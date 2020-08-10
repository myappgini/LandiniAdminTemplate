(function($) {
    'use strict';
    var settings = [{
            selector: ".main-header",
            class: ["border-bottom-0", "text-sm"],
        },
        {
            selector: "body",
            class: ["text-sm", "sidebar-collapse"]
        },
        {
            selector: ".nav-sidebar",
            class: ["text-sm", "nav-flat", "nav-legacy", "nav-compact", "nav-child-indent"]
        },
        {
            selector: ".main-footer",
            class: ["text-sm"]
        },
        {
            selector: ".main-sidebar",
            class: ["sidebar-no-expand"]
        },
        {
            selector: ".brand-link",
            class: ["text-sm"]
        }
    ];
    var value = "true";
    settings.forEach(e => {
        e.class.forEach(c => {
            value = get(e.selector + "_" + c) == "true";
            if (value) {
                $(e.selector).addClass(c)
            } else {
                $(e.selector).removeClass(c)
            }
        });
    });

    var navbar_dark_skins = [
        "navbar-primary",
        "navbar-secondary",
        "navbar-info",
        "navbar-success",
        "navbar-danger",
        "navbar-indigo",
        "navbar-purple",
        "navbar-pink",
        "navbar-navy",
        "navbar-lightblue",
        "navbar-teal",
        "navbar-cyan",
        "navbar-dark",
        "navbar-gray-dark",
        "navbar-gray",
    ];

    var navbar_light_skins = [
        "navbar-light",
        "navbar-warning",
        "navbar-white",
        "navbar-orange",
    ];

    var sidebar_colors = [
        "bg-primary",
        "bg-warning",
        "bg-info",
        "bg-danger",
        "bg-success",
        "bg-indigo",
        "bg-lightblue",
        "bg-navy",
        "bg-purple",
        "bg-fuchsia",
        "bg-pink",
        "bg-maroon",
        "bg-orange",
        "bg-lime",
        "bg-teal",
        "bg-olive",
    ];

    var accent_colors = [
        "accent-primary",
        "accent-warning",
        "accent-info",
        "accent-danger",
        "accent-success",
        "accent-indigo",
        "accent-lightblue",
        "accent-navy",
        "accent-purple",
        "accent-fuchsia",
        "accent-pink",
        "accent-maroon",
        "accent-orange",
        "accent-lime",
        "accent-teal",
        "accent-olive",
    ];

    var sidebar_skins = [
        "sidebar-dark-primary",
        "sidebar-dark-warning",
        "sidebar-dark-info",
        "sidebar-dark-danger",
        "sidebar-dark-success",
        "sidebar-dark-indigo",
        "sidebar-dark-lightblue",
        "sidebar-dark-navy",
        "sidebar-dark-purple",
        "sidebar-dark-fuchsia",
        "sidebar-dark-pink",
        "sidebar-dark-maroon",
        "sidebar-dark-orange",
        "sidebar-dark-lime",
        "sidebar-dark-teal",
        "sidebar-dark-olive",
        "sidebar-light-primary",
        "sidebar-light-warning",
        "sidebar-light-info",
        "sidebar-light-danger",
        "sidebar-light-success",
        "sidebar-light-indigo",
        "sidebar-light-lightblue",
        "sidebar-light-navy",
        "sidebar-light-purple",
        "sidebar-light-fuchsia",
        "sidebar-light-pink",
        "sidebar-light-maroon",
        "sidebar-light-orange",
        "sidebar-light-lime",
        "sidebar-light-teal",
        "sidebar-light-olive",
    ];

    var $sidebar = $(".main-sidebar");
    var sidebar_class = get(".main-sidebar");
    sidebar_skins.map(function(skin) {
        $sidebar.removeClass(skin);
    });
    $sidebar.addClass(sidebar_class);

    var accent_class = get("body");
    var $body = $("body");
    accent_colors.map(function(skin) {
        $body.removeClass(skin);
    });
    $body.addClass(accent_class);

    var logo_skins = navbar_dark_skins.concat(navbar_light_skins);
    var color = get(".bramd-link");
    var $logo = $(".brand-link");
    logo_skins.map(function(skin) {
        $logo.removeClass(skin);
    });
    $logo.addClass(color);

    color = get(".main-header");
    var $main_header = $(".main-header");
    $main_header.removeClass("navbar-dark").removeClass("navbar-light");
    logo_skins.map(function(color) {
        $main_header.removeClass(color);
    });
    if (navbar_dark_skins.indexOf(color) > -1) {
        $main_header.addClass("navbar-dark");
    } else {
        $main_header.addClass("navbar-light");
    }
    $main_header.addClass(color);
})(jQuery);