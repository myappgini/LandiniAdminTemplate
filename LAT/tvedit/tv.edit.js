var submitdata = { tn: '', id: '', fn: '' };

function tv_editlets(tn, ingnore = []) { //ignore has field name with ignore
    add_buttons(tn);
    //var td = $j('tr > td[id^="' + tn + '"] > a').addClass('tve');
    var td = $j('tr > td[id^="' + tn + '"]').addClass('tve');
    if (typeof ingnore !== 'undefined' && ingnore.length > 0) {
        ingnore.forEach(element => {
            $j.each(td, function() {
                var a = $j(this).attr('id')
                if (!$j(this).children().length) {
                    $j(this).append('<a></a>')
                }
                if (a.indexOf(element) !== -1) {
                    //remove elements in ignore array
                    $j(this).removeClass('tve');
                }
            });
        })
    }

    td = $j('.tve >a');

    submitdata.tn = tn;
    td.prop("onclick", null).off("click")
        .removeAttr("href").css("cursor", "pointer")
        .editable("LAT/tvedit/tv.edit.php", {
            cssclass: 'edit_box',
            cancel: ' <i class="fa fa-times"></i> ',
            cancelcssclass: 'btn btn-danger btn-xs',
            submit: ' <i class="fa fa-check"></i> ',
            submitcssclass: 'btn btn-success btn-xs',
            tooltip: "Click to edit...",
            onsubmit: function() {
                submitdata.id = $j(this).closest('tr').attr('data-id');
                submitdata.fn = $j(this).closest('td').attr('id');
            },
            submitdata: submitdata,
            callback: function(result, settings, submitdata) {
                if (typeof tv_callback !== "undefined") {
                    tv_callback(result, settings, submitdata);
                }
            }
        });
};

function add_buttons(tn) {
    $j('thead tr th:first-child').css('width', '80px');
    $j('tbody > tr td:first-child').each(function() {
        $j(this).append('<a style="color: rgba(0,0,0,.5);margin: 5px;" href="' + tn + '_view.php?SelectedID=' + $j(this).closest('tr').attr('data-id') + '"><i class="fa fa-edit"></i></a>');
    })
};