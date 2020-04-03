/**
 * @file makecounter.js is small control to animate counter
 * @author Alejandro Landini landini.com.ar
 * @version 1.0
 * @copyright © 2020 Alejandro Landini
 * @licence MIT (see LICENCE file)
 * @name makecounter
 * @type  jQuery
 * @tutorial:
 *   This control has two functions:
 *   $(element).mcounter(); is the js constructor that allows to reform any element in an animated counter. option values can be passed to it.
 *   $('.counter').visibilityChanged (); 
 *   This second method activates the counters on the screen, if these are visible, the counter starts. option values can be passed to it.
 *   use HTML attr start counter without js
 *   <span class="counter" id="counter-lat" data-endcountvalue="3801"></span>
 * 
 * @param {Boolean} runOnLoad - true start counter is visible on load page
 * @param {Number} frequency - 100ms, time to check if the control chague vsibility
 * @param {Number} startcountvalue - start count value in counter
 * @param {Number} endcountvalue - end count value in counter
 * @param {Number} elapsetime -in seconds, elapse time to finish count
 * 
 * @requires library 
 * <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 * <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
 * 
 * @example <caption>Simple usage example:</caption>
 *          $('#sales').mcounter({
 *               endcountvalue: 4002,
 *               startcountvalue: 3995,
 *               elapsetime:8
 *           });
 * 
 *           $('.counter').visibilityChanged({
 *               callback: function(element, visible, initialLoad) {
 *                   // do something
 *                   console.log("visible?: " + visible);
 *            });
 * 
 */
(function ($) {
    var defaults = {
        callback: function () {},
        runOnLoad: true,
        frequency: 100,
        previousVisibility: null,
        startcountvalue: 0, //start count value in counter
        endcountvalue: 3000, //end count value in counter
        elapsetime: 4, //in seconds
        formatterLocals: 'DE',
        formatterStyle: 'decimal', //can be. decimal, currency, percent
        formatterCurrency: 'USD', //can be a valid ISO code: like USD, EUR...etc check here https://www.currency-iso.org/en/home/tables/table-a1.html
        formatterCurrencyDisplay: 'symbol', //can be name, symbol or code
        formatteruseGrouping: true
    };

    var methods = {
        checkVisibility: function (element, options) {
            if (jQuery.contains(document, element[0])) {
                var previousVisibility = options.previousVisibility;
                var isVisible = methods.isInScreen(element); //get the element visibility
                options.previousVisibility = isVisible; //set the element visibility
                var initialLoad = previousVisibility === null; //check if initial load
                if (initialLoad) {
                    //the element is visible and is the first time in load is user option is true
                    if (options.runOnLoad) {
                        if (isVisible) methods.count(element, options);
                        options.callback(element, isVisible, initialLoad);
                    }
                } else if (previousVisibility !== isVisible) {
                    if (isVisible) methods.count(element, options);
                    options.callback(element, isVisible, initialLoad);
                }
                options.frequency = options.frequency < 100 ? 100 : options.frequency;
                setTimeout(function () {
                    methods.checkVisibility(element, options);
                }, options.frequency);
            }
        },
        isInScreen: function (e) {
            var isOnScreen = false;
            var elementPosition = e.get(0).getBoundingClientRect();
            if (elementPosition.top >= 0 && elementPosition.left >= 0 &&
                elementPosition.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                elementPosition.right <= (window.innerWidth || document.documentElement.clientWidth)) {
                isOnScreen = true;
            }
            return isOnScreen;
        },
        count: function (element, options) {
            // Create USD currency formatter.
            var formatter = new Intl.NumberFormat(options.formatterLocals, {
                style: options.formatterStyle,
                currency: options.formatterCurrency,
                currencyDisplay: options.formatterCurrencyDisplay,
                useGrouping: options.formatteruseGrouping
            });
            var counter = {
                var: options.startcountvalue
            };
            TweenMax.to(counter, options.elapsetime, {
                var: options.endcountvalue,
                onUpdate: function () {
                    var number = Math.ceil(counter.var);
                    element.text(formatter.format(number));
                    if (number === counter.var) {
                        return;
                    }
                },
                ease: Circ.easeOut
            });
        }
    };
    $.fn.visibilityChanged = function (options) {
        return this.each(function () {
            var $this = $(this);
            var settings = $.extend({}, defaults, $this.data(), options);
            methods.checkVisibility($this, settings);
        });
    };
    $.fn.mcounter = function (options) { //make counter as constructor, take the element and replace this with a span tag
        var settings = $.extend({}, defaults, options);
        var res = [];
        $.each(options, function (k, v) {
            res.push(`data-${k}="${v}"`);
        });
        $(this).hide().wrap(`<span class="counter" ${res.join(' ')}>0</span>`);
    };
    $('.counter').visibilityChanged();
})(jQuery);