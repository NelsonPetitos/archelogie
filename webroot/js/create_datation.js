/**
 * Created by ndenelson on 02/04/2017.
 */

$('[data-archeologie="true"]').click(function (event) {
    "use strict";
    event.preventDefault();
    console.log("Je clique sur un boutton de acrcheologie add");
    var url = $("#ajaxcreate").val();
    var remote = this.value;
    // console.log(url);
    // console.log(remote);
    if(url && remote){
        $.ajax({
            url:  url,
            type: 'get',
            dataType: 'html',
            data: {remote: remote},

            success: function (code_html, statut) {
                console.log(statut);
                $('#modal_add_form_content').html(code_html);
                displayForm();
                attachEventListener();
            },

            error : function(resultat, statut, erreur){
                console.log(resultat);
                console.log(statut);
                console.log(erreur);
            }
        });
    }
})


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

    if($(".auteur-select-list").length !== 0) {
        $(".auteur-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner le(s) auteur(s)'
        });
    }
}