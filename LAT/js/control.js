/**
 */
(function($) {
    'use strict';

    var $sidebar = $('#control-sidebar-color-tab');
    var $settings = $('#control-sidebar-home-tab');

    var $container = $('<div />', {
        class: 'p-3 control-sidebar-content'
    });

    var $containerSettings = $('<div />', {
        class: 'p-3 control-sidebar-content'
    });

    $sidebar.append($container);
    $settings.append($containerSettings);

    var navbar_dark_skins = [
        'navbar-primary',
        'navbar-secondary',
        'navbar-info',
        'navbar-success',
        'navbar-danger',
        'navbar-indigo',
        'navbar-purple',
        'navbar-pink',
        'navbar-navy',
        'navbar-lightblue',
        'navbar-teal',
        'navbar-cyan',
        'navbar-dark',
        'navbar-gray-dark',
        'navbar-gray',
    ];

    var navbar_light_skins = [
        'navbar-light',
        'navbar-warning',
        'navbar-white',
        'navbar-orange',
    ];

    $containerSettings.append(
        '<h5>Customize Template</h5><hr class="mb-2"/>'
    );
    //checkboxes
    var settings = [{
            selector: ".main-header",
            group: "Navbar options",
            class: ["border-bottom-0", "text-sm"],
            title: ["No Navbar border", "Navbar small text"]
        },
        {
            selector: "body",
            group: "Menu bar options",
            class: ["text-sm", "sidebar-collapse"],
            title: ["Small text", "Still collapse"]
        },
        {
            selector: ".nav-sidebar",
            group: "Sidebar nav options",
            class: ["text-sm", "nav-flat", "nav-legacy", "nav-compact", "nav-child-indent"],
            title: ["Small text", "Flat style", "Legacy style", "Compact", "Child indent"]
        },
        {
            selector: ".main-footer",
            group: "Footer option",
            class: ["text-sm"],
            title: ["Small text"]
        },
        {
            selector: ".main-sidebar",
            group: "Main sidebar option",
            class: ["sidebar-no-expand"],
            title: ["disable hover/focus auto expand"]
        },
        {
            selector: ".brand-link",
            group: "Brand option",
            class: ["text-sm"],
            title: ["Small text"]
        }
    ];
    var value = "";
    var $no_border_checkbox = "";
    settings.forEach(e => {
        var i = 0;
        $containerSettings.append('<h6>' + e.group + '</h6>');
        e.class.forEach(c => {
            value = (get(e.selector + "_" + c) == "true");
            $no_border_checkbox = $('<input />', {
                type: 'checkbox',
                value: 1,
                checked: value,
                'class': 'mr-1'
            }).on('click', function() {
                if ($(this).is(':checked')) {
                    $(e.selector).addClass(c);
                } else {
                    $(e.selector).removeClass(c);
                }
                store(e.selector + "_" + c, $(this).is(':checked'));
            });

            $containerSettings.append($('<div />', { 'class': 'mb-1' }).append($no_border_checkbox).append('<span>' + e.title[i] + '</span>'));
            i++;
        });
    });

    $container.append(
        '<h5>Customize Colors</h5><hr class="mb-2"/>'
    );

    $container.append('<h6>Navbar Variants</h6>');

    var $navbar_variants = $('<div />', {
        'class': 'd-flex'
    });

    var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins);
    var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function(e) {
        var color = $(this).data('color');
        var $main_header = $('.main-header');
        $main_header.removeClass('navbar-dark').removeClass('navbar-light');
        navbar_all_colors.map(function(color) {
            $main_header.removeClass(color);
        });

        if (navbar_dark_skins.indexOf(color) > -1) {
            $main_header.addClass('navbar-dark');
        } else {
            $main_header.addClass('navbar-light');
        }

        $main_header.addClass(color);
        store('.main-header', color);
    });

    $navbar_variants.append($navbar_variants_colors);

    $container.append($navbar_variants);

    var sidebar_colors = [
        'bg-primary',
        'bg-warning',
        'bg-info',
        'bg-danger',
        'bg-success',
        'bg-indigo',
        'bg-lightblue',
        'bg-navy',
        'bg-purple',
        'bg-fuchsia',
        'bg-pink',
        'bg-maroon',
        'bg-orange',
        'bg-lime',
        'bg-teal',
        'bg-olive'
    ];

    var accent_colors = [
        'accent-primary',
        'accent-warning',
        'accent-info',
        'accent-danger',
        'accent-success',
        'accent-indigo',
        'accent-lightblue',
        'accent-navy',
        'accent-purple',
        'accent-fuchsia',
        'accent-pink',
        'accent-maroon',
        'accent-orange',
        'accent-lime',
        'accent-teal',
        'accent-olive'
    ];

    var sidebar_skins = [
        'sidebar-dark-primary',
        'sidebar-dark-warning',
        'sidebar-dark-info',
        'sidebar-dark-danger',
        'sidebar-dark-success',
        'sidebar-dark-indigo',
        'sidebar-dark-lightblue',
        'sidebar-dark-navy',
        'sidebar-dark-purple',
        'sidebar-dark-fuchsia',
        'sidebar-dark-pink',
        'sidebar-dark-maroon',
        'sidebar-dark-orange',
        'sidebar-dark-lime',
        'sidebar-dark-teal',
        'sidebar-dark-olive',
        'sidebar-light-primary',
        'sidebar-light-warning',
        'sidebar-light-info',
        'sidebar-light-danger',
        'sidebar-light-success',
        'sidebar-light-indigo',
        'sidebar-light-lightblue',
        'sidebar-light-navy',
        'sidebar-light-purple',
        'sidebar-light-fuchsia',
        'sidebar-light-pink',
        'sidebar-light-maroon',
        'sidebar-light-orange',
        'sidebar-light-lime',
        'sidebar-light-teal',
        'sidebar-light-olive'
    ];

    $container.append('<h6>Accent Color Variants</h6>');
    var $accent_variants = $('<div />', {
        'class': 'd-flex'
    });
    $container.append($accent_variants);
    $container.append(createSkinBlock(accent_colors, function() {
        var color = $(this).data('color');
        var accent_class = color;
        var $body = $('body');
        accent_colors.map(function(skin) {
            $body.removeClass(skin);
        });

        $body.addClass(accent_class);
        store('body', accent_class);
    }));

    $container.append('<h6>Dark Sidebar Variants</h6>');
    var $sidebar_variants = $('<div />', {
        'class': 'd-flex'
    });
    $container.append($sidebar_variants);
    $container.append(createSkinBlock(sidebar_colors, function() {
        var color = $(this).data('color');
        var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '');
        var $sidebar = $('.main-sidebar');
        sidebar_skins.map(function(skin) {
            $sidebar.removeClass(skin);
        });

        $sidebar.addClass(sidebar_class);
        store('.main-sidebar', sidebar_class);
    }));

    $container.append('<h6>Light Sidebar Variants</h6>');
    $sidebar_variants = $('<div />', {
        'class': 'd-flex'
    });
    $container.append($sidebar_variants);
    $container.append(createSkinBlock(sidebar_colors, function() {
        var color = $(this).data('color');
        var sidebar_class = 'sidebar-light-' + color.replace('bg-', '');
        var $sidebar = $('.main-sidebar');
        sidebar_skins.map(function(skin) {
            $sidebar.removeClass(skin);
        });

        $sidebar.addClass(sidebar_class);
        store('.main-sidebar', sidebar_class);
    }));

    var logo_skins = navbar_all_colors;
    $container.append('<h6>Brand Logo Variants</h6>');
    var $logo_variants = $('<div />', {
        'class': 'd-flex'
    });
    $container.append($logo_variants);

    var $clear_btn = $('<a />', {
        href: 'javascript:void(0)'
    }).text('clear').on('click', function() {
        var $logo = $('.brand-link');
        logo_skins.map(function(skin) {
            $logo.removeClass(skin);
        });
    });

    $container.append(createSkinBlock(logo_skins, function() {
        var color = $(this).data('color');
        var $logo = $('.brand-link');
        logo_skins.map(function(skin) {
            $logo.removeClass(skin);
        });
        $logo.addClass(color);
        store('.brand-link', color);
    }).append($clear_btn));

    function createSkinBlock(colors, callback) {
        var $block = $('<div />', {
            'class': 'd-flex flex-wrap mb-3'
        });

        colors.map(function(color) {
            var $color = $('<div />', {
                'class': (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-') + ' elevation-2'
            });

            $block.append($color);

            $color.data('color', color);

            $color.css({
                width: '40px',
                height: '20px',
                borderRadius: '25px',
                marginRight: 10,
                marginBottom: 10,
                opacity: 0.8,
                cursor: 'pointer'
            });

            $color.hover(function() {
                $(this).css({ opacity: 1 }).removeClass('elevation-2').addClass('elevation-4');
            }, function() {
                $(this).css({ opacity: 0.8 }).removeClass('elevation-4').addClass('elevation-2');
            });

            if (callback) {
                $color.on('click', callback);
            }
        });

        return $block;
    }

})(jQuery);

function get(name) {
    if (typeof(Storage) !== 'undefined') {
        //console.log('get value' + name);
        return localStorage.getItem(name);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}

function store(name, val) {
    if (typeof(Storage) !== 'undefined') {
        //console.log('store value: ' + name+" = "+val);
        localStorage.setItem(name, val);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}