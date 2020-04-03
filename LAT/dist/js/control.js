/**
 */
(function ($) {
    'use strict';
  
    var $sidebar   = $('#control-sidebar-color-tab');
    var $settings   = $('#control-sidebar-home-tab');
    
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

    var value = (get('border-bottom-0') == 'true');
    var $no_border_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-header').addClass('border-bottom-0');
      } else {
        $('.main-header').removeClass('border-bottom-0');
      }
      store('border-bottom-0',$(this).is(':checked'));
    });
  
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($no_border_checkbox).append('<span>No Navbar border</span>'));

    value = (get('text-sm') == 'true');
    var $text_sm_body_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('body').addClass('text-sm');
      } else {
        $('body').removeClass('text-sm');
      }
      store('text-sm',$(this).is(':checked'));
    });

    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($text_sm_body_checkbox).append('<span>Body small text</span>'));
    
    value = (get('.main-header.text-sm') == 'true');
    var $text_sm_header_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-header').addClass('text-sm');
      } else {
        $('.main-header').removeClass('text-sm');
      }
      store('.main-header.text-sm',$(this).is(':checked'));
    });
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($text_sm_header_checkbox).append('<span>Navbar small text</span>'));
  
    value = (get('.nav-sidebar.text-sm') == 'true');
    var $text_sm_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('text-sm');
      } else {
        $('.nav-sidebar').removeClass('text-sm');
      }
      store('.nav-sidebar.text-sm',$(this).is(':checked'));
    });

    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($text_sm_sidebar_checkbox).append('<span>Sidebar nav small text</span>'));
  
    value = (get('.main-footer.text-sm') == 'true');
    var $text_sm_footer_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-footer').addClass('text-sm');
      } else {
        $('.main-footer').removeClass('text-sm');
      }
      store('.main-footer.text-sm',$(this).is(':checked'));
    });

    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($text_sm_footer_checkbox).append('<span>Footer small text</span>'));
    
    value = (get('nav-flat') == 'true');
    var $flat_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-flat');
      } else {
        $('.nav-sidebar').removeClass('nav-flat');
      }
      store('nav-flat',$(this).is(':checked'));
    });
    
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($flat_sidebar_checkbox).append('<span>Sidebar nav flat style</span>'));
    
    value = (get('nav-legacy') == 'true');
    var $legacy_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked:value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-legacy');
      } else {
        $('.nav-sidebar').removeClass('nav-legacy');
      }
      store('nav-legacy',$(this).is(':checked'));
    });
    
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($legacy_sidebar_checkbox).append('<span>Sidebar nav legacy style</span>'));
    
    value = (get('nav-compact') == 'true');
    var $compact_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-compact');
      } else {
        $('.nav-sidebar').removeClass('nav-compact');
      }
      store('nav-compact',$(this).is(':checked'));
    });
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($compact_sidebar_checkbox).append('<span>Sidebar nav compact</span>'));
    
    value = (get('nav-child-indent') == 'true');
    var $child_indent_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-child-indent');
      } else {
        $('.nav-sidebar').removeClass('nav-child-indent');
      }
      store('nav-child-indent',$(this).is(':checked'));
    });
    
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($child_indent_sidebar_checkbox).append('<span>Sidebar nav child indent</span>'));
    
    value = (get('sidebar-no-expand') == 'true');
    var $no_expand_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-sidebar').addClass('sidebar-no-expand');
      } else {
        $('.main-sidebar').removeClass('sidebar-no-expand');
      }
      store('sidebar-no-expand',$(this).is(':checked'));
    });
    
    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($no_expand_sidebar_checkbox).append('<span>Main Sidebar disable hover/focus auto expand</span>'));
    

    value = (get('sidebar-collapse') == 'true');
    var $text_collapsed_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('body').addClass('sidebar-collapse');
      } else {
        $('body').removeClass('sidebar-collapse');
      }
      store('sidebar-collapse',$(this).is(':checked'));
    });

    $containerSettings.append($('<div />', {'class': 'mb-1'}).append($text_collapsed_checkbox).append('<span>Still collapse menu bar</span>'));
    




    value = (get('.brand-link.text-sm') == 'true');
    var $text_sm_brand_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: value,
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.brand-link').addClass('text-sm');
      } else {
        $('.brand-link').removeClass('text-sm');
      }
      store('.brand-link.text-sm',$(this).is(':checked'));
    });

    $containerSettings.append($('<div />', {'class': 'mb-4'}).append($text_sm_brand_checkbox).append('<span>Brand small text</span>'));


    //checkboxes


    $container.append(
        '<h5>Customize Colors</h5><hr class="mb-2"/>'
      );

  
    $container.append('<h6>Navbar Variants</h6>');
  
    var $navbar_variants        = $('<div />', {
      'class': 'd-flex'
    });

    var navbar_all_colors       = navbar_dark_skins.concat(navbar_light_skins);
    var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function (e) {
      var color = $(this).data('color');
      var $main_header = $('.main-header');
      $main_header.removeClass('navbar-dark').removeClass('navbar-light');
      navbar_all_colors.map(function (color) {
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
    $container.append(createSkinBlock(accent_colors, function () {
      var color         = $(this).data('color');
      var accent_class = color;
      var $body      = $('body');
      accent_colors.map(function (skin) {
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
    $container.append(createSkinBlock(sidebar_colors, function () {
      var color         = $(this).data('color');
      var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '');
      var $sidebar      = $('.main-sidebar');
      sidebar_skins.map(function (skin) {
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
    $container.append(createSkinBlock(sidebar_colors, function () {
      var color         = $(this).data('color');
      var sidebar_class = 'sidebar-light-' + color.replace('bg-', '');
      var $sidebar      = $('.main-sidebar');
      sidebar_skins.map(function (skin) {
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
    }).text('clear').on('click', function () {
      var $logo = $('.brand-link');
      logo_skins.map(function (skin) {
        $logo.removeClass(skin);
      });
    });

    $container.append(createSkinBlock(logo_skins, function () {
      var color = $(this).data('color');
      var $logo = $('.brand-link');
      logo_skins.map(function (skin) {
        $logo.removeClass(skin);
      });
      $logo.addClass(color);
      store('.brand-link', color);
    }).append($clear_btn));
  
    function createSkinBlock(colors, callback) {
      var $block = $('<div />', {
        'class': 'd-flex flex-wrap mb-3'
      });
  
      colors.map(function (color) {
        var $color = $('<div />', {
          'class': (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-') + ' elevation-2'
        });
  
        $block.append($color);
  
        $color.data('color', color);
  
        $color.css({
          width       : '40px',
          height      : '20px',
          borderRadius: '25px',
          marginRight : 10,
          marginBottom: 10,
          opacity     : 0.8,
          cursor      : 'pointer'
        });
  
        $color.hover(function () {
          $(this).css({ opacity: 1 }).removeClass('elevation-2').addClass('elevation-4');
        }, function () {
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
    if (typeof (Storage) !== 'undefined') {
      console.log('get value' + name);
        return localStorage.getItem(name);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}

function store(name, val) {
    if (typeof (Storage) !== 'undefined') {
      console.log('store value: ' + name+" = "+val);
        localStorage.setItem(name, val);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}