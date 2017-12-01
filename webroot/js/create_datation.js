/**
 * Created by ndenelson on 02/04/2017.
 */

document.body.addEventListener('click', function (event) {

    var element  = event.srcElement
    if(!element.dataset){
        return
    }

    //Set local variables
    var isAddBtn = element.dataset.archeologie;

    if(!isAddBtn){
        return
    }
    if(isAddBtn.toLowerCase().trim() !== "true"){
        // console.log('Ce n\'est pas true pour l\'ettribut dataarcheologie')
        return
    }

    event.preventDefault();
    var url = $("#ajaxcreate").val();
    var remote = element.value;

    if(url && remote){
        $.ajax({
            url:  url,
            method: 'get',
            dataType: 'html',
            data: {remote: remote},

            success: function (code_html, statut, req) {
                addForm(code_html)
            },

            error : function(req, status, err){
                console.log(status)
                console.log(err);
            }
        });
    }

})



// $('[data-archeologie="true"]').click(function (event) {
//     "use strict";
//     event.preventDefault();
//     var url = $("#ajaxcreate").val();
//     var remote = this.value;
//     if(url && remote){
//         $.ajax({
//             url:  url,
//             method: 'get',
//             dataType: 'html',
//             data: {remote: remote},
//
//             success: function (code_html, statut, req) {
//                 hideForm();
//                 $('#modal_add_form_content').html(code_html);
//                 displayForm();
//                 attachEventListener();
//             },
//
//             error : function(req, status, err){
//                 console.log(err);
//             }
//         });
//     }
// })


function addForm(code_html){
    hideForm();
    $('#modal_add_form_content').html(code_html);
    displayForm();
    attachEventListener();
}

function displayForm() {
    if($("#modal_add_form")){
        $("#modal_add_form").css('display', 'inline-block');
    }
}

function hideForm() {
    if($("#modal_add_form")){
        $("#modal_add_form").css('display', 'none');
    }
    if($("#modal_add_form_content")){
        $("#modal_add_form_content").html('');
    }
}

function attachEventListener(){
    $('[data-annuler="true"]').click(function (event) {
        event.preventDefault();
        hideForm();
    });

    $("#modal_add_form form").submit(function(e){
        console.log('Formulaire valide')
        e.preventDefault();
        const $form = $(this)
        const url = $form.attr('action')
        const data = $form.serialize()
        console.log(data)
        console.log(url)
        $.ajax({
            url:  url,
            method: 'post',
            dataType: 'json',
            data: data,

            success: function (returnData, statut, req) {
                hideForm()
                //Add the new element to the
                handleAjaxCreation(returnData)
            },

            error : function(err){
                console.log(err);
            }
        });
    });

    if($(".auteur-select-list").length !== 0) {
        $(".auteur-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner le(s) auteur(s)'
        });
    }
}


function handleAjaxCreation(resultObject){

    //Traiter les objets
    if(resultObject.remote === 'objet'){
        // console.log(resultObject.objet)
        var objTag = $("select[name='objets[_ids][]']")
        var matTag = $("select[name='materiels[_ids][]']")

        const id = resultObject.objet.id;
        const label = resultObject.objet.name

        objTag.append($("<option></option>").attr("value",id).text(label))
        matTag.append($("<option></option>").attr("value",id).text(label))

        var objVal = objTag.val()
        objVal[objVal.length] = id
        objTag.val(objVal)

        var matVal = matTag.val()
        matVal[matVal.length] = id
        matTag.val(matVal)
        return
    }

    //Traiter les sites
    if(resultObject.remote === 'site'){
        // console.log(resultObject.site)
        var tag = $( "select[name='site_id']" );
        const id = resultObject.site.id;
        const label = resultObject.site.name
        tag.append($("<option></option>").attr("value",id).text(label))
        tag.val(id);
        return
    }

    //Traiter les laboratoires
    if(resultObject.remote === 'laboratoire'){
        // console.log(resultObject.laboratoire)
        var tag = $( "select[name='laboratoire_id']" );
        const id = resultObject.laboratoire.id;
        const label = resultObject.laboratoire.code_laboratoire
        tag.append($("<option></option>").attr("value",id).text(label))
        tag.val(id);
        return;
    }

    //Traiter les publications
    if(resultObject.remote === 'publication'){
        var tag = $("select[name='publications[_ids][]']")

        const id = resultObject.publication.id;
        const year = resultObject.publication.annee;
        const title = resultObject.publication.title;
        const reference = resultObject.publication.reference;
        const display = year+" - "+title+" - "+reference

        tag.append($("<option></option>").attr("value", id).text(display))

        var val = tag.val()
        val[val.length] = id
        tag.val(val)
        return;
    }

    if(resultObject.remote === 'auteur'){
        addForm(resultObject.publicationView)
    }
}