/**
 * Created by ndenelson on 04/01/2017.
 */
function attachEvenListener() {
    var textFields = selectInput();
    for(var i = 0; i < textFields.length; i++){
        textFields[i].addEventListener("keyup", function(e){
            // console.log(e);
            if (e.keyCode == 13) {
                // triggerSearch();
                var cheminUrl = document.getElementById("archeologie_ajaxchUrl").value;
                ajaxPageLoader(cheminUrl);
            }
        })
    }
}


// function triggerSearch() {
//     var params = getSearchParams();
//     var cheminUrl = document.getElementById("archeologie_searchUrl").value;
//     if(params.length > 0 && cheminUrl){
//         ajaxPageLoader(cheminUrl, params);
//     }
// }


function displayDatationSearchResults(datations, isAdmin) {
    if(datations.length == 0){
        $('#data_table_body').html('<tr><td colspan="6" style="text-align: center; font-size: 14px;">Aucune datation pour cette recherche</td></tr>');
    }else {
        $.each(datations, function( index, datation ) {
            var apenstr =
                '<tr onclick="voirDetail(\'datations/view/'+datation.id+'\')">' +
                '<td>'+((datation.date_bp == null)? "":datation.date_bp)+'</td>' +
                '<td>'+((datation.erreur_standard == null)? "":datation.erreur_standard)+'</td>' +
                '<td>'+((datation.date_calibree == null)? "":datation.date_calibree)+'</td>' +
                '<td>'+((datation.name == null)? "":datation.name)+'</td>' +
                '<td>'+((datation.code_laboratoire == null)? "":datation.code_laboratoire)+'</td>' +
                '<td>'+((datation.code_reference == null)? "":datation.code_reference)+'</td>';
            if(isAdmin){
                apenstr +=
                    '<td>'+((datation.commentaire == null)?"":datation.commentaire)+'</td>' +
                    '<td class="action">' +
                    ' <a href="datations/view/'+datation.id+'">Détails</a> '+
                    ' <a href="datations/edit/'+datation.id+'">Modifier</a> '+
                    ' <a href="datations/delete/'+datation.id+'">Supprimer</a>'+
                    '</td>';
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}



function displaySiteSearchResults(sites, isAdmin) {
    if(sites.length == 0){
        $('#data_table_body').html('<tr><td colspan="6" style="text-align: center; font-size: 14px;">Aucun site pour cette recherche</td></tr>');
    }else {
        $.each(sites, function( index, site ) {
            var apenstr =
                '<tr onclick="voirDetail(\'sites/view/'+site.id+'\')">' +
                    '<td>'+((site.name == null)? "":site.name)+'</td>' +
                    '<td>'+((site.type == null)?"":site.type)+'</td>' +
                    '<td>'+((site.contry == null)?"":site.contry)+'</td>' +
                    '<td>'+((site.province == null)? "":site.province)+'</td>' +
                    '<td>'+((site.latitude == null)?"":site.latitude)+'</td>' +
                    '<td>'+((site.longitude == null)?"":site.longitude)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        ' <a href="sites/view/'+site.id+'">Détails</a> '+
                        ' <a href="sites/edit/'+site.id+'">Modifier</a> '+
                        ' <a href="sites/delete/'+site.id+'">Supprimer</a> '+
                    '</td>';
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}




function displayPublicationSearchResults(publications, isAdmin) {
    if(publications.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucune publication pour cette recherche</td></tr>');
    }else {
        $.each(publications, function( index, publication ) {
            var apenstr =
                '<tr onclick="voirDetail(\'publications/view/'+publication.id+'\')">' +
                    '<td>'+((publication.title == null)?"":publication.title)+'</td>' +
                    '<td>'+((publication.annee == null)?"":publication.annee)+'</td>' +
                    '<td>'+((publication.reference == null)?"":publication.reference)+'</td>';
            if(isAdmin){
                apenstr +=
                    '<td>'+((publication.created == null)?"":publication.created)+'</td>' +
                    '<td>'+((publication.modified == null)?"":publication.modified  )+'</td>' +
                    '<td class="action">' +
                        ' <a href="publications/view/'+publication.id+'">Détails</a> '+
                        ' <a href="publications/edit/'+publication.id+'">Modifier</a> '+
                        ' <a href="publications/delete/'+publication.id+'">Supprimer</a>'+
                    '</td>';

            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}


function displayAuteurSearchResults(auteurs, isAdmin) {
    if(auteurs.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucun auteur pour cette recherche</td></tr>');
    }else {
        $.each(auteurs, function( index, auteur ) {
            var apenstr =
                '<tr>' +
                    '<td>'+auteur.name+'</td>' +
                    '<td>'+((auteur.created == null)? "" : auteur.created)+'</td>' +
                    '<td>'+((auteur.modified == null)? "" : auteur.modified)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        ' <a href="auteurs/view/'+auteur.id+'">Détails</a> '+
                        ' <a href="auteurs/edit/'+auteur.id+'">Modifier</a> '+
                        ' <a href="auteurs/delete/'+auteur.id+'">Supprimer</a> '+
                    '</td>';
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}



function displayLaboratoireSearchResults(laboratoires, isAdmin) {
    if(laboratoires.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucun laboratoire pour cette recherche</td></tr>');
    }else {
        $.each(laboratoires, function( index, laboratoire ) {
            var apenstr =
                '<tr>' +
                    '<td>'+((laboratoire.code_laboratoire == null)? "" : laboratoire.code_laboratoire)+'</td>' +
                    '<td>'+((laboratoire.description == null)? "" : laboratoire.description)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td>'+((laboratoire.created == null)? "" : laboratoire.created)+'</td>' +
                    '<td>'+((laboratoire.modified == null)? "" : laboratoire.modified)+'</td>'+
                    '<td class="action">' +
                    ' <a href="laboratoires/view/'+laboratoire.id+'">Détails</a> '+
                    ' <a href="laboratoires/edit/'+laboratoire.id+'">Modifier</a> '+
                    ' <a href="laboratoires/delete/'+laboratoire.id+'">Supprimer</a> '+
                    '</td>';
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}


function displayObjetSearchResults(objets, isAdmin) {
    if(objets.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucun objet pour cette recherche</td></tr>');
    }else {
        $.each(objets, function( index, objet ) {
            var apenstr =
                '<tr>' +
                '<td>'+objet.name+'</td>'+
                '<td>'+((objet.categorie == null)? "" : objet.categorie)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td>'+((objet.created == null)? "" : objet.created)+'</td>' +
                    '<td>'+((objet.modified == null)? "" : objet.modified)+'</td>'+
                    '<td class="action">' +
                        ' <a href="objets/view/'+objet.id+'">Détails</a> '+
                        ' <a href="objets/edit/'+objet.id+'">Modifier</a> '+
                        ' <a href="objets/delete/'+objet.id+'">Supprimer</a> '+
                    '</td>';
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}

function voirDetail(url){
    if(url){
        window.location.assign(url);
        console.log(url);
    }else{
        alert("This line id is not define.");
    }
}



function selectInput() {
    return document.querySelectorAll('[data-class]');
}


function callDisplayMethod(datas, cheminUrl) {
    var split = cheminUrl.split('/');
    var model = split[3].split('?')[0]; //Pour retirer les infos de paginations
    var isAdmin = (split[2] == 'admin');

    if(model == 'publications'){
        displayPublicationSearchResults(datas, isAdmin);
    }

    if(model == 'datations'){
        displayDatationSearchResults(datas, isAdmin);
    }

    if(model == 'sites'){
        displaySiteSearchResults(datas, isAdmin);
    }

    if(model == 'auteurs'){
        displayAuteurSearchResults(datas, isAdmin);
    }

    if(model == 'laboratoires'){
        displayLaboratoireSearchResults(datas, isAdmin);
    }

    if(model == 'objets'){
        displayObjetSearchResults(datas, isAdmin);
    }
}


function ajaxPageLoader(request_url) {
    //Set a default value to
    var limit = $('#paginateLimit').val();
    if(typeof limit == 'undefined') {
        limit = 10;
    }
    request_url += '&limit='+limit;
    params = getSearchParams();

    $('#data_table_body').html('');

    $.ajax({
        url:  request_url,
        type: 'POST',
        dataType: 'JSON',
        data: {
            params: params
        },
        // En cas de succes, affichage mettre a jour le DOM
        success: function (response) {
            // Récuperation du site
            console.log('Sucess data size: '+response.datas.length)
            // console.log(response.datas);
            callDisplayMethod(response.datas, request_url);

        },

        // En cas d'erreur, afficher le statut et l'erreur
        error:function(jqXHR, textStatus, errorThrown){
            console.log("Une erreur c'est produite");
            console.log(jqXHR);
        }
    });
}


function getSearchParams() {
    var params = [];
    var textFields = selectInput();
    for(var i = 0; i < textFields.length; i++){
        var field = textFields[i].dataset.opname;
        var tab = textFields[i].dataset.tab;
        var externField = textFields[i].dataset.exfield;
        var val = textFields[i].value.toLowerCase();
        var typedata = textFields[i].dataset.datatype;

        if(field){
            var operat = document.getElementById(field).value;
        }
        if(val){
            //J controle le fait de mettre une chaine de caractere dans une entier
            if(typedata == 'number'){
                if(!(val = parseFloat(val))){
                    val = 0;
                    textFields[i].value  = val;
                }
            }
            params.push(
                {
                    typedata: typedata,
                    field: field,
                    value: val,
                    operation: operat,
                    table: tab,
                    assoc: externField
                }
            )
        }
    }
    return params;
}


function showLoader(){
    document.getElementById('archeologie_loader').style.display = 'inline-block';
}


function hideLoader(){
    document.getElementById('archeologie_loader').style.display = 'none';
}

/***************************************************************************************************************** \
 *
 * Select button
 *
 \*****************************************************************************************************************/

$('#paginateLimit').on('change', function() {
    // console.log(this.value);
    var request_url = $('#archeologie_ajaxchUrl').val();
    ajaxPageLoader(request_url);
});

$(document).ready(function () {
    hideLoader();
    attachEvenListener();
    $('.pagination > li > a').bind('click', function(e) {
        e.preventDefault();
        var request_url = $(this).attr('href');
        $('#archeologie_ajaxchUrl').val(request_url);
        // request_url += '&limit='+$('#paginateLimit').val();
        console.log('Lien ajax : '+request_url);
        ajaxPageLoader(request_url);
        return false;
    })

})
