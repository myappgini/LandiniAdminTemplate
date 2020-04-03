
    var submitdata = {tn:'',id:'',fn:''};
    function tv_editlets(tn) {
        add_buttons(tn);  
        var td = $j('tr > td[id^="'+tn+'"] > a');
        submitdata.tn = tn;
        td.prop("onclick", null).off("click")
            .removeAttr("href").css("cursor","pointer")
            .editable("LAT/tvedit/tv.edit.php", {
                cssclass: 'edit_box',
                cancel : ' <i class="fa fa-times"></i> ',
                cancelcssclass : 'btn btn-danger btn-xs',
                submit : ' <i class="fa fa-check"></i> ',
                submitcssclass : 'btn btn-success btn-xs',
                tooltip : "Click to edit...",
                onsubmit : function() { 
                    submitdata.id = $j(this).closest('tr').attr('data-id'); 
                    submitdata.fn = $j(this).closest('td').attr('id'); 
                },
                submitdata : submitdata
            }
        );
    };

    function add_buttons(tn){
        $j('thead tr th:first-child').css('width','80px');
        $j('tbody > tr td:first-child').each( function(){
            $j(this).append('<a style="color: rgba(0,0,0,.5);margin: 5px;" href="'+tn+'_view.php?SelectedID='+$j(this).closest('tr').attr('data-id')+'"><i class="fa fa-edit"></i></a>');
        })
    };