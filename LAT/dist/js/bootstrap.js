$j(function(){
   updateBS();
   //setTimeout(updateBS(),5200);
    $j('.add_new_parent, .view_parent').on('click', function(){
        setTimeout(function(){
            updateBS();
        },500);
    });
});

function updateBS(){
    $j('.visible-xs.visible-sm').addClass('d-block d-sm-block d-md-none');
    $j('.visible-md.visible-lg').addClass('d-md-block d-sm-none d-none');
    $j('.btn-default').addClass('btn-secondary');
    $j('.input-group-btn').addClass('input-group-append');
    $j('.btn-group-lg').removeClass('btn-group-lg');
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
    $j('.btn').removeClass('btn-lg');
    //admin tools
    setTimeout(function(){
         $j('#admin-tools-menu-button').removeClass('pull-right');
         $adminToolsMenu = $j('#admin-tools-menu');
         $adminToolsMenu.removeAttr('id');
         $adminToolsMenu.each(function(){
             $j(this).children().addClass('dropdown-item');
         });
     },500);
    //modal windows
    $j('.modal-dialog').addClass('modal-xl');
    $j('.modal-title').prependTo('.modal-header');
}