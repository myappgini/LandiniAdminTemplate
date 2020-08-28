/* global $j */

function show_error(field, campo, msg) {
    modal_window({
        message: '<div class="alert alert-danger">' + msg + '</div>',
        title: 'Error en ' + campo,
        close: function() {
            $j('#' + field).parents('.form-group').addClass('has-error');
            $j('#' + field).focus();
        }
    });

    return false;
}

function show_warning(field, campo, msg) {
    modal_window({
        message: '<div class="alert alert-warning">' + msg + '</div>',
        title: 'Atención en ' + campo,
        close: function() {
            $j('#' + field).parents('.form-group').addClass('has-error');
            $j('#' + field).focus();
        }
    });

    return false;
}

function addWarningBtn(field, title = "click me...", icon = "glyphicon glyphicon-ok") { //lagcy function

    prepend_btn(field, title, text, icon);
}

function prepend_btn(field = false, title = "click me...", text = "", icon_class = "glyphicon glyphicon-ok") {
    if (field) {

        $obj = $j('#' + field).closest('div');

        var $container = $j('<div/>', {
            class: "input-group"
        });

        var $append = $j('<span/>', {
            class: 'input-group-append'
        });

        var $btn = $j('<button/>', {
            class: 'btn btn-default btn-fix',
            "data-field": field,
            type: "button",
            title: title,
            text: text
        });

        var $btn_image = $j('<span/>', {
            class: icon_class
        });

        $btn.append($btn_image);
        $append.append($btn);
        $container.append($obj.html()).append($append);
        $obj.html($container);
    }
}

function ToggleFix(field, a = 'default') {

    $field = $j('.btn-fix [data-field="' + field + '"]')

    if (!$field.hasClass('btn-' + a)) {

        $field.removeClass('btn-warning btn-danger btn-default');
        $field.children().removeClass('glyphicon-warning-sign glyphicon-remove glyphicon-ok');

        if (a === 'default') {
            $field.children().toggleClass('glyphicon-ok');
            $j('#' + field).parents('.form-group').removeClass('has-error');
        }
        if (a === 'warning') {
            $field.children().toggleClass('glyphicon-warning-sign');
        }
        if (a === 'danger') {
            $field.children().toggleClass('glyphicon-remove');
        }
        $field.toggleClass('btn-' + a);
    }
}

function inline_fields(fields = [], label = false, with_cols = [], label_col = 3) { //place two or more fields of a form online
    if (fields.length > 1) {
        var $container = $j('<div/>')
        var $pos = "";
        var $input = "";
        var i = 0;
        fields.forEach(f => {
            if (fields.length !== with_cols.length) {
                with_cols.push("auto");
            }
            $cols = $j('<div/>', {
                class: "col-sm-" + (with_cols[i] === "auto" ? "auto" : with_cols[i])
            });
            $input = $j('#' + f).closest('.form-group');
            if (i === 0) {
                $pos = $input;
                var $label = $j('<label/>', {
                    class: "col-sm-" + label_col + " col-form-label",
                    text: (label ? label : $input.find("label").text())
                })
                $container.append($label);
            }
            $input.find('label').remove();
            $cols.append($input.children('div[class^="col-"]').removeClass().addClass("vspacer-sm"))
            if (i > 0) $input.remove();
            $container.append($cols);
            i++;
        });
        $pos.html($container.html())
    } else {
        console.warn('You need an array of more than one element');
    }
}

function selected_id() { //return ID from selected record
    return $j('input[name=SelectedID]').val();
}

function is_add_new() { //return true if the user are in add new form 
    var add_new_mode = (!selected_id());
    return add_new_mode;
}

function getNumbers(inputString) {
    var regex = /\d+\.\d+|\.\d+|\d+/g,
        results = [],
        n;

    while (n = regex.exec(inputString)) {
        results.push(parseFloat(n[0]));
    }
    return results;
}

function showCard(field, dest, url) {
    //field = field to get the ID from
    //dest = ID where to put the html result
    //url = url&cmd for ajax
    var Data = $j('#' + field + '-container').select2("data");
    var id = parseInt(Data.id) || 0;
    if (id < 1) {
        id = parseInt($j('#' + field).val());
    }
    ajaxCard(id, url, dest);
}

function ajaxCard(id, url, dest) {
    if (id > 0) {
        $j.ajax({
                method: 'post', //post, get
                dataType: 'html', //json,text,html
                url: 'hooks/' + url + '.php',
                cache: 'false',
                data: { id: id, cmd: url }
            })
            .done(function(msg) {
                //function at response
                $j("#" + dest).html(msg).show();
            });
    }
}

function showCardsTV(field, dest, url) {
    //field = field to get the ID from
    //dest = ID where to put the html result
    //url = url&cmd for ajax
    var id = parseInt($j('#' + dest).attr('myId')) || 0; //este id es el id del registro
    if (id > 0) {
        $j.ajax({
                method: 'post', //post, get
                dataType: 'html', //json,text,html
                url: 'hooks/contacts_companies_AJAX.php',
                cache: 'false',
                data: { id: id, cmd: 'record' }
            })
            .done(function(msg) {
                //function at response
                var data = $j.parseJSON(msg);
                ajaxCard(data[`${field}`], url, dest);
            });
    }
}

function showItem(id, dest, url) {
    //field = field to get the ID from
    //dest = ID where to put the html result
    //url = url&cmd for ajax
    if (id > 0) {
        $j.ajax({
                method: 'post', //post, get
                dataType: 'html', //json,text,html
                url: 'hooks/' + url + '_card_AJAX.php',
                cache: 'false',
                data: { id: id, cmd: 'record' }
            })
            .done(function(msg) {
                //function at response
                //            var data = $j.parseJSON(msg);
                //            ajaxCard( data[`${field}`], url, dest );
                $j(dest).html(msg);
                showTumbs();
            });
    }
}

function showParent(Data) {
    var parent_id = parseInt(Data.attributes.myid.value);
    var pt = Data.attributes.pt.value;
    var title = Data.attributes.title.value;
    modal_window({
        url: pt + '_view.php?Embedded=1&SelectedID=' + encodeURIComponent(parent_id),
        close: function() {
            var field_id = $j('#' + pt + '_view_parent').prevAll('input:hidden').eq(0).attr('id');
            $j('#' + field_id + '-container').select2('focus').select2('focus');
        },
        size: 'full',
        title: title
    });
}

function removeEmpty() { //remove empty values from TV
    $j('dt').filter(function() {
        var t = ($j(this).next().is('dd'));
        if (t) {
            var a = $j(this).next().text();
            a = a.replace(/(\r\n|\n|\t|\r)/gm, "");
            if (a === '' || a === ' ' || a === '\xa0') { //&nbsp;
                $j(this).next().remove();
                return true;
            }
            return false;
        }
    }).remove();
}

function getUrlVars(url) {
    //https://stackoverflow.com/questions/17483057/convert-url-to-json
    var hash;
    var myJson = {};
    var hashes = url.slice(url.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        myJson[hash[0]] = hash[1];
    }
    return myJson;
}

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function normalizeView() {
    $j('#top_buttons').prepend($j('#addNew'));
    var $header = $j('.page-header > h1');

    $j($header).replaceWith(function() {
        return $j("<h4 />").append($j(this).contents());
    });

    var $div = $j('<div />', {
        class: "card-header"
    });

    $j('.form-group').addClass('row'); //ad this clas to view the form inline in DV
    $j('.control-label').addClass("col-form-label"); //ad this clas to view the form inline in DV


    $div.append($j('.page-header > h4'));
    $div.append($j('#top_buttons'));
    $j('.table_view').addClass('card card-default').prepend($div);
    $j('.table').addClass('table-sm').removeClass('table-striped table-bordered ');
    // hide selector in table
    $j('.record_selector').parent('td').hide();
    $j('#select_all_records').parent('th').hide();

    $j('.pagination-section').addClass('justify-content-center');

    //remueve texto de los botones y los hace btn-group
    removeText('#top_buttons .btn-group .btn');
    removeText('.pagination-section .btn');
    removeText('.btn');
    removeText('#addNew');
    $j('.btn-group-vertical').removeClass().addClass('btn-group')

    $j('div').removeClass('tv-tools ');
    $j('.selected_records').remove();

    $j('hr').remove();

    //cambiar la clase de los botones de ver o de agregar en los select2
    $j('.view_parent').removeClass('btn-default hspacer-md btn-secondary').addClass('btn-tool');
    $j('.add_new_parent').removeClass('btn-success hspacer-md').addClass('btn-tool');
    //cambia la clase del boton para seleccionar la fecha
    $j('[id^="fd-but"]').removeClass('btn-default btn-block btn-secondary').addClass('btn-tool');



}

function removeText(selector) { //from buttons
    $j(selector).each(function() {
        //console.log(this);
        $o = $j(this);
        var i = $o.children('i');
        var t = $o.text();
        $o.html(i);
        if (!$o.attr('title')) {
            $o.attr('title', t);
        }
    });
}

function labelize_table() { //labelize tables when get small screens
    $j('div.table-responsive thead > tr > th').each(function(index, element) {
        text = $j(this).text();
        text = (text.length < 2 ? "" : text + ":&nbsp")
        if (text) {
            $j('div.table-responsive td:nth-of-type(' + (index + 1) + ')').prepend("<label class='d-lg-none'>" + text + "</label>")
        }
    });
}