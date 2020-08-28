$j(function() {
    updateBS();
    //setTimeout(updateBS(),5200);
    $j('.add_new_parent, .view_parent').on('click', function() {
        setTimeout(function() {
            updateBS();
        }, 500);
    });
});

function updateBS() {
    $j('.visible-xs.visible-sm').addClass('d-block d-sm-block d-md-none');
    $j('.visible-md.visible-lg').addClass('d-md-block d-sm-none d-none');
    $j('.btn-default').addClass('btn-secondary');
    $j('.input-group-btn').addClass('input-group-append');
    $j('.row > .col-xs-12').addClass('col-12');
    $j('.pull-right').addClass('float-md-right');
    $j('.pull-left').addClass('float-md-left');
    $j('.hidden-md').addClass('d-md-none');
    $j('.hidden-lg').addClass('d-lg-none');
    $j('.panel').addClass('card');
    $j('.panel-heading').addClass('card-header');
    $j('.panel-body').addClass('card-body');
    $j('.panel-title').addClass('card-title');
    $j('.hidden-print').addClass('d-print-none');
    $j('textarea').addClass('form-control');
    $j('hr.hidden-xs').remove();
    $j('.btn').removeClass('btn-lg');
    $j('.btn-group-lg').removeClass('btn-group-lg');
    $j('#quick-search').remove();
    $j(".btn-toolbar").removeClass().addClass('sticky-top');

    //changue offset classes TODO: add more
    $j('.col-lg-offset-3').addClass('offset-lg-3');
    $j('.col-lg-offset-1').addClass('offset-lg-1');

    //modal windows
    $j('.modal-dialog').addClass('modal-xl');
    $j('.modal-title').prependTo('.modal-header');

    setTimeout(function() {
        //admin tools
        $j('#admin-tools-menu-button').removeClass('pull-right');
        $adminToolsMenu = $j('#admin-tools-menu');
        $adminToolsMenu.removeAttr('id');
        $adminToolsMenu.each(function() {
            $j(this).children().addClass('dropdown-item');
        });
        //fix nav-tab display
        $tabs = $j('ul.nav.nav-tabs li');
        $tabs.addClass('nav-item');
        $tabs.each(function(index, element) {
            if ($j(this).hasClass('active')) {
                $j(this).children('a').addClass('active');
            }
            $j(this).children('a').addClass('nav-link');
        });
    }, 500);

}
