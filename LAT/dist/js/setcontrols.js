(function ($) {
    var value = (get('border-bottom-0') == 'true');
    if (value) {
        $('.main-header').addClass('border-bottom-0');
    } else {
        $('.main-header').removeClass('border-bottom-0');
    }

    value = (get('text-sm') == 'true');
    if (value) {
        $('body').addClass('text-sm');
    } else {
        $('body').removeClass('text-sm');
    }

    value = (get('sidebar-collapse') == 'true');
    if (value) {
        $('body').addClass('sidebar-collapse');
    } else {
        $('body').removeClass('sidebar-collapse');
    }

    value = (get('.main-header.text-sm') == 'true');
    if (value) {
        $('.main-header').addClass('text-sm');
    } else {
        $('.main-header').removeClass('text-sm');
    }

    value = (get('.nav-sidebar.text-sm') == 'true');
    if (value) {
        $('.nav-sidebar').addClass('text-sm');
    } else {
        $('.nav-sidebar').removeClass('text-sm');
    }

    value = (get('.main-footer.text-sm') == 'true');
    if (value) {
        $('.main-footer').addClass('text-sm');
    } else {
        $('.main-footer').removeClass('text-sm');
    }

    value = (get('nav-flat') == 'true');
    if (value) {
        $('.nav-sidebar').addClass('nav-flat');
    } else {
        $('.nav-sidebar').removeClass('nav-flat');
    }

    value = (get('nav-legacy') == 'true');
    if (value) {
        $('.nav-sidebar').addClass('nav-legacy');
    } else {
        $('.nav-sidebar').removeClass('nav-legacy');
    }

    value = (get('nav-compact') == 'true');
    if (value) {
        $('.nav-sidebar').addClass('nav-compact');
    } else {
        $('.nav-sidebar').removeClass('nav-compact');
    }

    value = (get('nav-child-indent') == 'true');
    if (value) {
        $('.nav-sidebar').addClass('nav-child-indent');
    } else {
        $('.nav-sidebar').removeClass('nav-child-indent');
    }

    value = (get('sidebar-no-expand') == 'true');
    if (value) {
        $('.main-sidebar').addClass('sidebar-no-expand');
    } else {
        $('.main-sidebar').removeClass('sidebar-no-expand');
    }

    value = (get('.brand-link.text-sm') == 'true');
    if (value) {
        $('.brand-link').addClass('text-sm');
    } else {
        $('.brand-link').removeClass('text-sm');
    }
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

    var $sidebar = $('.main-sidebar');
    var sidebar_class = get('.main-sidebar');
    sidebar_skins.map(function (skin) {
        $sidebar.removeClass(skin);
    });
    $sidebar.addClass(sidebar_class);

    var accent_class = get('body');
    var $body = $('body');
    accent_colors.map(function (skin) {
        $body.removeClass(skin);
    });
    $body.addClass(accent_class);
    
    var logo_skins = navbar_dark_skins.concat(navbar_light_skins);
    var color = get('.bramd-link');
    var $logo = $('.brand-link');
    logo_skins.map(function (skin) {
        $logo.removeClass(skin);
    });
    $logo.addClass(color);

    color = get('.main-header');
    var $main_header = $('.main-header');
    $main_header.removeClass('navbar-dark').removeClass('navbar-light');
    logo_skins.map(function (color) {
      $main_header.removeClass(color);
    });
    if (navbar_dark_skins.indexOf(color) > -1) {
      $main_header.addClass('navbar-dark');
    } else {
      $main_header.addClass('navbar-light');
    }
    $main_header.addClass(color);
    

})(jQuery);