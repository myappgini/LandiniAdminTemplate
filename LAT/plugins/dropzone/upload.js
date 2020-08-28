/* global $j */

function initTable() {
    recountsItems(thisTable());
}

/////////////////////////////
//function for items salvos
////////////////////////////

function addToList(index) {
    add_to_list(index, thisTable());
}

function add_to_list(id, tableName) {
    var image = $j('#' + tableName + '-uploadedFiles-' + id).text();
    $j.ajax({
        method: "POST",
        dataType: "text",
        url: 'hooks/savedList.php',
        data: { id: id, cmd: 'addToList', tableName: tableName, image: image },
        success: function(response) {
            if (response !== '1') {
                deleteItem(id, tableName);
            }
            recountsItems(tableName);
        }
    });
}

function deleteItem(id, tableName) {
    $j.ajax({
            method: "POST",
            dataType: "text",
            url: 'hooks/savedList.php',
            data: { cmd: 'deleteItem', id: id, tableName: tableName }
        })
        .done(function(msg) {});
}

function recountsItems(tableName) {
    $j.ajax({
        method: "POST",
        dataType: "text",
        url: 'hooks/savedList.php',
        data: { id: '1', cmd: 'recountItems' },
        success: function(response) {
            //                    alert('saved items: '+ response);
            $j('.itemSalvos').text(response);
            checkButtons(tableName);
            return response;
        }
    });
}

function checkButtons(tableName) {
    $j('.addToList').each(function(index) {
        //buscar los botones y verificar si el mismo esta guardado...
        var a = this.attributes;
        checkIsSaved(a.myid.value, tableName);
    });
    return;

}

function checkIsSaved(id, tableName) {
    $j.ajax({
            method: "POST",
            dataType: "text",
            url: 'hooks/savedList.php',
            data: { cmd: 'isSelected', id: id, tableName: tableName }
        })
        .done(function(msg) {
            //cambiar el estado del selected...<span class="glyphicon glyphicon-record"></span
            var tag = '';

            if (content_type() === 'detailview') {
                tag = '.addToList';
            } else {
                $j('#addToList-' + id).show();
                tag = '#addToList-' + id;
            }

            if (msg) {
                $j(tag).removeClass('btn-default');
                $j(tag).addClass('btn-success');
                if ($j(tag + ' > i').hasClass('glyphicon-unchecked')) {
                    $j(tag + ' > i').removeClass('glyphicon-unchecked');
                    $j(tag + ' > i').addClass('glyphicon-check');
                }
            } else {
                $j(tag).removeClass('btn-success');
                $j(tag).addClass('btn-default');
                if ($j(tag + ' > i').hasClass('glyphicon-check')) {
                    $j(tag + ' > i').removeClass('glyphicon-check');
                    $j(tag + ' > i').addClass('glyphicon-unchecked');
                }
            }
        });
}


/////////////END//////////

////////////////////////////
///Tumbs functions
///////////////////////////

async function showTumbs() {

    $j('.' + thisTable() + '-image').each(function(index) {
        var object = $j(this);
        var b = 'full';
        var x = this.id; //id
        x = x.split('-');
        x = x[2]; //id
        var title = $j('#' + thisTable() + '-customer-' + x).text();
        var imgTumb = $j('<div />', { id: 'imagesThumbs-' + x, class: 'thumbs', title: x });

        $j.ajax({
            type: "POST",
            url: "hooks/previewImages.php",
            data: { cmd: 'get_json', tn: 'Order', fn: 'uploads', where: 'id=' + x, json: ["1"] },
            dataType: "json",
            success: function(a) {
                if (!isJson(a) || !a) {
                    a = { images: [] };
                    b = 'empty';
                } else {
                    a = JSON.parse(a);
                }
                $j.ajax({
                    method: 'POST',
                    dataType: 'html',
                    url: 'hooks/previewImages.php',
                    cache: 'false',
                    data: { json: a, cmd: b, indice: x, title: title, tableName: thisTable() },
                    success: function(response) {
                        imgTumb.html(response);
                        setTimeout(function() {
                            object.append(imgTumb);
                            showSlides((getDefualtImage(a)), x);
                            if (a.images.length < 2) {
                                $j('#imagesThumbs-' + x + ' div.columns-thumbs').hide();
                            }
                        }, 500);
                    }
                });
            }
        });
    });
}

function get_uploades_json(data = {}) {
    const promise = new Promise(function(resolve, reject) {
        if (data) {
            $j.ajax({
                    type: "POST",
                    url: "hooks/previewImages.php",
                    data: data,
                    dataType: "json"
                })
                .done(function(a) {
                    resolve(a);
                });

        }
        if (!data) {
            reject(new Error('data needed'));
        }
    });
    return promise;
}

function getDefualtImage(j) {
    var ret = 1;
    for (var key in j.images) {
        if (j.images[key].defaultImage === true) {
            ret = parseInt(key) + 1;
            break;
        }
    }
    return ret;
}

async function loadImages(t, indice) {
    var b = 'full';
    var j = await getUploadedFile(indice);
    data = { cmd: b, tn: thisTable(), json: j, title: t }
    $j('#imagesThumbs').load('hooks/previewImages.php', data, function() {
        if (!is_add_new()) {
            showSlides(getDefualtImage(j));
            if (content_type() === 'print-detailview') {
                $j('div.columns-thumbs').hide();
            }
        }
        if (j.images.length < 2) {
            $j('div.columns-thumbs').hide();
        }
    });
}

function currentSlide(n, x) {
    showSlides(slideIndex = n, x);
}

function showPdf(file, n, i, tv) {
    var visible = 'hidden';
    var msg = '<div style ="height:100%;"><embed src="' + file + '#view=Fit"  width="100%" height="100%" style="z-index: 2;"></div>';
    modal_window({
        message: msg,
        title: n,
        size: 'full',
        footer: [{
                label: '<i class="glyphicon glyphicon-cloud-download"></i> Download',
                bs_class: 'default',
                click: function(e) {
                    var windowName = "popUp"; //$(this).attr("name");
                    window.open(file, windowName);
                    e.preventDefault(); //stop the browser from following
                },
                causes_closing: true
            },
            {
                label: '<i class="glyphicon glyphicon-remove"></i> Fechar',
                bs_class: 'primary',
                click: function() {
                    if (content_type() === 'tableview') {
                        showTumbs();
                    } else {
                        loadImages();
                    }
                    return true;
                },
                causes_closing: true //el valor indica que cuando hace click se cierra la ventana.
            }
        ]
    });
}

async function setPdfThumb(i, tv) {
    //move to top of iden selected images o make default
    var a = await getUploadedFile(tv);
    a = a.images[i - 1];
    var new_page = parseInt($j('#numPage').val()) || 0;
    if (new_page > 0) {
        $j.ajax({
            method: "POST",
            dataType: 'html',
            url: 'hooks/_resampledIMG.php',
            cache: 'false',
            data: { cmd: 'newPDF', $source: a.name, $fileName: a.fileName, $ext: a.extension, $folder: a.folder_base, $page: new_page },
            success: function(response) {
                //                       alert(response);
            }
        });
    }
}

function showSlides(n, x) {
    if (x === undefined || x === null) { x = ''; }
    var slides = $j(".lbid-" + x);
    var dots = $j(".img-lite");

    if (slides.length === 0) return;
    if (n > slides.length) { n = 1; }
    if (n < 1) { n = slides.length; }

    slides.hide();
    dots.removeClass("active");
    slides[n - 1].style.display = "block";
    dots[n - 1].className += " active";
}

function showMov(file, n, t = 'video/mp4') {

    //    modal_window({
    //        message: '<div align="center"><video controls style="height:auto"><source src="' + file + '" type="' + t + '"></video></div>',
    //        title: n,
    //        size: 'full',
    //        footer: [
    //              {
    //               label: '<i class="glyphicon glyphicon-cloud-download"></i> Download',
    //               bs_class: 'default',
    //               click: function(e){
    //                   //download y new window
    //                    var windowName = "popUp";//$(this).attr("name");
    //                    window.open(file, windowName);
    //                    e.preventDefault();  //stop the browser from following
    //                   },
    //               causes_closing: true
    //               },
    //               {
    //               label: '<i class="glyphicon glyphicon-remove"></i> Fechar',
    //               bs_class: 'primary',
    //               click: function(){
    //                   return true;
    //                   },
    //               causes_closing: true //el valor indica que cuando hace click se cierra la ventana.
    //               }
    //       ]
    //    });
}

async function getUploadedFile(id) { //si viene un id es una fucnion de la TV

    data = { cmd: 'get_json', tn: thisTable(), fn: 'uploads', where: 'id=' + id, json: ["1"] };
    var a = await get_uploades_json(data);

    if (!a || !isJson(a)) {
        a = { images: [] };
    } else {
        a = JSON.parse(a);
    }
    return a;
}

async function openOtherFiles(id) {
    var a = await getUploadedFile(id);
    var largo = $j('#' + AppGini.currentTableName + '-codigoCompleto-' + id).text();
    $j.ajax({
            method: "POST",
            dataType: "text",
            url: 'hooks/previewImages.php',
            data: { json: a, cmd: 'buttons', indice: id, largo: largo.length, tableName: AppGini.currentTableName }
        })
        .done(function(msg) {
            modal_window({
                message: msg,
                title: 'Arquivos',
                footer: [{
                    label: '<i class="glyphicon glyphicon-remove"></i> Fechar',
                    bs_class: 'primary',
                    click: function() {
                        return true;
                    },
                    causes_closing: true //el valor indica que cuando hace click se cierra la ventana.
                }]
            });
        });

}


/////////////END//////////


/////////////////////////////////////////
///automatic select filter functions
////////////////////////////////////////

function updatefilter() {
    var fil = filter();
    if (fil.length) {
        $j('#filterfield_2').val(fil);
    }
    var field = $j('#filter_2 p').attr('class');

    $j('#filter_2').select2({
        ajax: {
            url: './ajax_combo.php',
            dataType: 'json',
            cache: true,
            data: function(term, page) { return { s: term, p: page, t: AppGini.currentTableName, f: field }; },
            results: function(resp, page) {
                return resp;
            }
        },
        width: 250
    }).on('change', function(e) {
        $j("#filterfield_2").val(e.added.text);
        $j("[name^=FilterValue]").val(e.added.text);
        $j("#lookupoperator_2").val('equal-to');
        if (e.added.id === '{empty_value}') {
            $j("#lookupoperator_2").val('is-empty');
            $j("[name^=FilterOperator]").val('is-empty');
            beforeCancelFilters();
        }
        $j('form').submit();
        return true;
    });

    /* preserve the applied category filter and show it when re-opening the filters page */
    if ($j("#filterfield_2").val().length) {
        //None case 
        if ($j("#filterfield_2").val() === '<None>') {
            $j("#filter_2").select2('data', {
                id: '{empty-value}',
                text: '<None>'
            });
            $j("#lookupoperator_2").val('is-empty');
            return;
        }
        $j.ajax({
            url: 'ajax_combo.php',
            dataType: 'json',
            data: {
                s: $j("#filterfield_2").val(), //search term
                p: 1, //page number
                t: AppGini.currentTableName, //table name
                f: field //field name
            }
        }).done(function(response) {
            if (response.results.length) {
                $j("#filter_2").select2('data', {
                    id: response.results[1].id,
                    text: response.results[1].text
                });
            }
        });
    }
}

function beforeApplyFilters(event) {
    //get all field submitted values
    $j(":input[type=text][name^=FilterValue],:input[type=hidden][name^=FilterValue],:input[type=radio][name^=FilterValue]:checked").each(function(index) {

        //if type=hidden  and options radio fields with the same name are checked, supply its value
        if ($j(this).attr('type') == 'hidden' && $j(":input[type=radio][name='" + $j(this).attr('name') + "']:checked").length > 0) {
            return;
        }

        //do not submit fields with empty values
        if (!$j(this).val()) {
            var fieldNum = $j(this).attr('name').match(/(\d+)/)[0];
            $j(":input[name='FilterField[" + fieldNum + "]']").val('');

        }
    });
}

function beforeCancelFilters() {
    //other fields
    $j('form')[0].reset();
    //lookup case ( populate with initial data)
    $j(":input[class='populatedLookupData']").each(function() {
        $j(":input[name='FilterValue[" + $j(this).attr('name') + "]']").val($j(this).val());
        if ($j(this).val() == '<None>') {
            $j(this).parent(".row ").find('input[id^="lookupoperator"]').val('is-empty');
        } else {
            $j(this).parent(".row ").find('input[id^="lookupoperator"]').val('equal-to');
        }
    });
    //options case ( populate with initial data)
    $j(":input[class='populatedOptionsData']").each(function() {

        $j(":input[name='FilterValue[" + $j(this).attr('name') + "]']").val($j(this).val());
    });
    //remove unsuplied fields
    beforeApplyFilters();
    return true;
}

/////////////END//////////


function array_move(arr, old_index, new_index) {
    if (new_index >= arr.images.length) {
        var k = new_index - arr.images.length + 1;
        while (k--) {
            arr.images.push(undefined);
        }
    }
    arr.images.splice(new_index, 0, arr.images.splice(old_index, 1)[0]);
    //    return arr; // for testing
    $j('#uploadedFiles').val(returnJsonstr(arr));
}

function returnJsonstr(a) {
    a = JSON.stringify(a);
    a = a.replace(/\\/g, '');
    a = a.replace(/\["/g, '[');
    a = a.replace(/\"]/g, ']');
    a = a.replace(/\},"/g, '},');
    return a;
}

async function jsonImages(data) {
    var indice = $j('input[name=SelectedID]').val();
    var a = await getUploadedFile(indice);
    data.forEach(element => {
        a.images.push(element); //adding new image to json
    });


    a = returnJsonstr(a);
    $j.ajax({
        type: "POST",
        url: "hooks/previewImages.php",
        data: { cmd: 'put_json', tn: thisTable(), set: "uploads='" + a + "'", where: 'id=' + indice, json: ["1", "2"] },
        dataType: "json",
        success: function(response) {
            //console.log(response);
            $j('#imagesThumbs').html('');
            loadImages('New files', indice);
        }
    });

    return;
}

//open galery, open modal form
async function openGalery(btn) {
    var indice = $j('input[name=SelectedID]').val();
    if (is_add_new()) {
        indice = '';
    }
    var a = await getUploadedFile(indice);
    $j.ajax({
            method: "POST",
            dataType: "text",
            url: 'hooks/previewImages.php',
            data: { json: a, cmd: 'form', tableName: thisTable(), indice: indice }
        })
        .done(function(msg) {
            $j('body').append(msg);
            $j('#images-modal').modal('show')

        });

}

function save_button(data, id) {
    //encuentro valor devuelto del modal.
    var jsn = returnJsonstr(data.j);
    var del = data.d;

    $j.ajax({
        type: "POST",
        url: "hooks/previewImages.php",
        data: { cmd: 'put_json', tn: thisTable(), set: "uploads='" + jsn + "'", where: 'id=' + id, json: ["1", "2"] },
        dataType: "json",
        success: function(response) {
            console.log(response);
        }
    });

    $j.ajax({
        url: 'hooks/deleteFile.php',
        data: { 'file': del },
        dataType: 'json',
        success: function(response) {
            if (response.status === true) {}
        }
    });
    $j('#imagesThumbs').html('');
    loadImages($j('#titulo').val(), id);
    return;
}

function openMailForm() {
    $j.ajax({
            method: "POST",
            dataType: "HTML",
            url: 'hooks/mailForm.php',
            data: { cmd: 'form' }
        })
        .done(function(msg) {
            modal_window({
                message: msg,
                title: 'Arquivos Digitais',
                footer: [{
                    label: '<i class="glyphicon glyphicon-send"></i> Send',
                    bs_class: 'primary',
                    click: function() {
                        //                           console.log( $j( '#contact' ).serialize() );
                        var mail = $j('#contact').serialize();
                        $j.ajax({
                                method: "POST",
                                dataType: "text",
                                url: 'hooks/sendMail.php',
                                data: { mail: mail }
                            })
                            .done(function(ret) {
                                if (ret === '1') {
                                    alert('the e-mail has send!');
                                } else {
                                    alert('Sending e-mail Error: ' + ret);
                                }
                            });
                        return true;
                    },
                    causes_closing: true //el valor indica que cuando hace click se cierra la ventana.
                }]
            });
        });
}

function requestDownload(btn, indice) {
    //    alert(indice + " " + btn.attributes['filename'].value);
    var fn = btn.attributes.filename.value;
    $j.ajax({
            method: "POST",
            dataType: "json",
            url: 'hooks/requestDownload_AJX.php',
            data: { cmd: 'dr', id: indice, fileName: fn }
        })
        .done(function(ret) {
            if (ret) {
                //hace falta envier un mail??
                alert('Your request has send... If aproved then you are alowed to download the file. Admin.');
            } else {
                alert('your request has already been sended');
            }
        });
    return;
}

//check if the record are archived and change background
function isArchived() {
    $j('.is-archived').each(function() {
        var id = this.attributes.myid.value;
        if (id > 0) {
            $j.ajax({
                    method: 'post', //post, get
                    dataType: 'json', //json,text,html
                    url: 'hooks/isArchived_AJX.php',
                    cache: 'false',
                    data: { cmd: 'check', id: id, tn: AppGini.currentTableName + '-ARCHIVED' }
                })
                .done(function(msg) {
                    //function at response
                    if (msg > 0) {
                        $j("td[myid='" + msg + "']").removeClass('is-arvhived').addClass('archived');
                    }
                });
        }
    });
}

//archive item
function archiveItem(tableName, id) {
    $j.ajax({
            method: 'post', //post, get
            dataType: 'json', //json,text,html
            url: 'hooks/isArchived_AJX.php',
            cache: 'false',
            data: { cmd: 'archive', tn: tableName, id: id }
        })
        .done(function(msg) {
            //function at response
            //                    alert('Item has been archived!');
            var a = 1;
        });
}

function content_type() {
    if (typeof _contentType !== 'undefined') {
        var ret = _contentType();
        return ret;
    }
}

function trashForm() {
    $j.ajax({
            method: 'post', //post, get
            dataType: 'html', //json,text,html
            url: 'hooks/isArchived_AJX.php',
            cache: 'false',
            data: { cmd: 'trashForm', tn: 'tn', id: 'id' }
        })
        .done(function(msg) {
            //function at response
            modal_window({
                message: msg,
                title: 'Trash'
            });
        });
}

function importForm() {
    window.open('hooks/_importFiles.php');
}

function myCancel(btn) {
    var mysubmit = true;
    if ($j(btn).hasClass('btn-warning')) {
        if (!confirm("Comfirm Cancel?")) {
            mysubmit = false;
            enableButtons();
        }
    }
    if (mysubmit) {
        $j('form').submit();
        $j('form').eq(0).attr('novalidate', 'novalidate');
        document.myform.reset();
    }
    return mysubmit;
}

function enableButtons() {
    setTimeout(function() {
        $j('#insert, #update, #delete, #deselect').prop('disabled', false);
    }, 300); // delay purpose is to allow submitting the button values first then disable them.
}

function nullFunction() {
    return;
}