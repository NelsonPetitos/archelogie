/**
 * Created by ndenelson on 04/01/2017.
 */
//    Declare une variable d'options d'affichage des dates
var options = {day: "numeric", month: "numeric", year: "numeric", hour: 'numeric', minute: 'numeric'}

function setEvenListenSearchInputText() {
    var textFields = selectInput();
    for(var i = 0; i < textFields.length; i++){
        textFields[i].addEventListener("keyup", function(e){
            // console.log(e);
            if (e.keyCode == 13) {
                // triggerSearch();
                var cheminUrl = document.getElementById("archeologie_ajaxchUrl").value;
                cheminUrl = setPageToOne(cheminUrl);
                ajaxPageLoader(cheminUrl);
            }
        })
    }
}


function attachPagination() {
    $('.pagination > li > a').bind('click', function(e) {
        e.preventDefault();
        var request_url = $(this).attr('href');
        $('#archeologie_ajaxchUrl').val(request_url);
        // request_url += '&limit='+$('#paginateLimit').val();
        // console.log('Lien ajax : '+request_url);
        ajaxPageLoader(request_url);
        return ;
    })
}


//Afficher les résultats d'une recherche sur les DATATIONS
function displayDatationSearchResults(datations, isAdmin) {
    if(datations.length == 0){
        $('#data_table_body').html('<tr><td colspan="7" style="text-align: center; font-size: 14px;">Aucune datation pour cette recherche</td></tr>');
    }else {
        $.each(datations, function( index, datation ) {
            var formname = "post_"+index;
            var apenstr =
                '<tr>' +
                '<td>'+((datation.date_bp == null)? "":datation.date_bp)+'</td>' +
                '<td>'+((datation.erreur_standard == null)? "":datation.erreur_standard)+'</td>' +
                '<td>'+((datation.date_calibree == null)? "":datation.date_calibree)+'</td>' +
                '<td>'+(!(datation.site)? "":'<a href="'+$('#sitedetailUrl').val()+'/'+datation.site.id+'">'+datation.site.name+'</a>')+'</td>' +
                '<td>'+((datation.laboratoire == null)? "":datation.laboratoire.code_laboratoire)+'</td>' +
                '<td>'+((datation.code_reference == null)? "":datation.code_reference)+'</td>';
            if(isAdmin){
                apenstr +=

                    '<td class="action">' +
                        '<a href="datations/view/'+datation.id+'" class="space-right"><span class="glyphicon glyphicon-search"></span></a> '+
                        '<a href="datations/edit/'+datation.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#" onclick="if(confirm(\'Supprimer la datation ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="datations/delete/'+datation.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }else{
                apenstr = apenstr.replace('<tr>', '<tr onclick="voirDetail(\'datations/view/'+datation.id+'\')">');
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}


//Afficher les résultats d'une recherche sur les SITES
function displaySiteSearchResults(sites, isAdmin) {
    if(sites.length == 0){
        $('#data_table_body').html('<tr><td colspan="7" style="text-align: center; font-size: 14px;">Aucun site pour cette recherche</td></tr>');
    }else {
        $.each(sites, function( index, site ) {
            var formname = "post_"+index;
            var apenstr =
                '<tr>' +
                    '<td>'+((site.name == null)? "":site.name)+'</td>' +
                    '<td>'+((site.type == null)?"":site.type)+'</td>' +
                    '<td>'+((site.contry == null)?"":site.contry)+'</td>' +
                    '<td>'+((site.province == null)? "":site.province)+'</td>' +
                    '<td>'+((site.latitude == null)?"":site.latitude)+'</td>' +
                    '<td>'+((site.longitude == null)?"":site.longitude)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        '<a href="sites/view/'+site.id+'" class="space-right"><span class="glyphicon glyphicon-search"></span></a> '+
                        '<a href="sites/edit/'+site.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#" onclick="if(confirm(\'Voulez vous supprimer '+site.name+' ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="sites/delete/'+site.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }else{
                apenstr = apenstr.replace('<tr>', '<tr onclick="voirDetail(\'sites/view/'+site.id+'\')">');
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}



//Afficher les résultats d'une recherche sur les PUBLICATIONS
function displayPublicationSearchResults(publications, isAdmin) {
    if(publications.length == 0){
        $('#data_table_body').html('<tr><td colspan="4" style="text-align: center; font-size: 14px;">Aucunes publications pour cette recherche</td></tr>');
    }else {
        $.each(publications, function( index, publication ) {
            var formname = "post_"+index;
            var apenstr =
                '<tr>' +
                    '<td>'+displayAuthorNames(publication.auteurs)+'</td>'+
                    '<td>'+((publication.annee == null)?"":publication.annee)+'</td>' +
                    '<td>'+((publication.title == null)?"":publication.title)+'</td>';
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        '<a href="publications/edit/'+publication.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#"  onclick="if(confirm(\'Voulez vous supprimer ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="publications/delete/'+publication.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }else{
                apenstr = apenstr.replace('<tr>', '<tr onclick="voirDetail(\'publications/view/'+publication.id+'\')">');
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}


//Afficher les résultats d'une recherche sur les AUTEURS
function displayAuteurSearchResults(auteurs, isAdmin) {
    if(auteurs.length == 0){
        $('#data_table_body').html('<tr><td colspan="2" style="text-align: center; font-size: 14px;">Aucun auteur pour cette recherche</td></tr>');
    }else {
        $.each(auteurs, function( index, auteur ) {
            var formname = "post_"+index;
            // auteur.created = new Date(auteur.created);
            // auteur.modified = new Date(auteur.modified);
            // options = {day: "numeric", month: "numeric", year: "numeric", hour: 'numeric', minute: 'numeric'}
            var apenstr =
                '<tr>' +
                    '<td>'+auteur.name+'</td>' ;
                    // '<td>'+((auteur.created == null)? "" : auteur.created.toLocaleString('en-GB', options))+'</td>' +
                    // '<td>'+((auteur.modified == null)? "" : auteur.modified.toLocaleString('en-GB', options))+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        '<a href="auteurs/edit/'+auteur.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#"  onclick="if(confirm(\'Voulez vous supprimer '+auteur.name+' ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="auteurs/delete/'+auteur.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}



//Afficher les résultats d'une recherche sur les LABORATOIRES
function displayLaboratoireSearchResults(laboratoires, isAdmin) {
    if(laboratoires.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucun laboratoire pour cette recherche</td></tr>');
    }else {
        $.each(laboratoires, function( index, laboratoire ) {
            var formname = "post_"+index;
            var apenstr =
                '<tr>' +
                    '<td>'+((laboratoire.code_laboratoire == null)? "" : laboratoire.code_laboratoire)+'</td>' +
                    '<td>'+((laboratoire.description == null)? "" : laboratoire.description)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        '<a href="laboratoires/edit/'+laboratoire.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#"  onclick="if(confirm(\'Voulez vous supprimer '+laboratoire.code_laboratoire+' ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="laboratoires/delete/'+laboratoire.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}



//Afficher les résultats d'une recherche sur les OBJETS
function displayObjetSearchResults(objets, isAdmin) {
    if(objets.length == 0){
        $('#data_table_body').html('<tr><td colspan="3" style="text-align: center; font-size: 14px;">Aucun objet pour cette recherche</td></tr>');
    }else {
        $.each(objets, function( index, objet ) {
            var formname = "post_"+index;
            var apenstr =
                '<tr>' +
                '<td>'+objet.name+'</td>'+
                '<td>'+((objet.categorie == null)? "" : objet.categorie)+'</td>' ;
            if(isAdmin){
                apenstr +=
                    '<td class="action">' +
                        '<a href="objets/edit/'+objet.id+'" class="space-right"><span class="glyphicon glyphicon-pencil"></span></a> '+
                        '<a href="#"  onclick="if(confirm(\'Voulez vous supprimer '+objet.name+' ? \')) { document.'+formname+'.submit(); } event.returnValue = false; return false;"><span class="glyphicon glyphicon-trash"></span></a>' +
                    '</td>';
                apenstr += '<form name="'+formname+'" style="display:none;" method="post" action="objets/delete/'+objet.id+'"><input type="hidden" name="_method" class="form-control" value="POST"></form>'
            }
            apenstr += '</tr>';
            $('#data_table_body').append(apenstr);
        });
    }
}


//Permet de se rediriger vers une adresse passée en paramètre
function voirDetail(url){
    if(url){
        window.location.assign(url);
        console.log(url);
    }else{
        alert("This line id is not define.");
    }
}


//Identifier tout les champs de recherches de la page.
function selectInput() {

    return document.querySelectorAll("[data-opname]");
    // return document.querySelectorAll('[data-class]');
}


//Fonction permettant de decider quelle methodes devra afficher les résultats d'une recherche.
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


//
function ajaxPageLoader(request_url) {
    showLoader();
    //Set a default value to
    var limit = $('#paginateLimit').val();
    if(typeof limit == 'undefined') {
        limit = 10;
    }
    if(request_url.indexOf("page") != -1){
        // console.log('url contain page');
        request_url += '&limit='+limit;
    }else{
        // console.log('url not containing page')
        request_url += '?page=1&limit='+limit;
    }
    params = getSearchParams();
    // console.log(params)
    $('#data_table_body').html('');
    $('#pagination_box').html('');

    $.ajax({
        url:  request_url,
        type: 'POST',
        dataType: 'JSON',
        data: {
            params: params
        },
        // En cas de succes, affichage mettre a jour le DOM
        success: function (response) {
            // console.log('Sucess data size: '+response.datas.length)
            // console.log(response.pagination);
            $('#pagination_box').append(response.pagination.toString());
            attachPagination();
            callDisplayMethod(response.datas, request_url);
            hideLoader();
            // loadPagination(params);

        },

        // En cas d'erreur, afficher le statut et l'erreur
        error:function(jqXHR, textStatus, errorThrown){
            console.log("Une erreur c'est produite");
            console.log(jqXHR);
            hideLoader();
        }
    });
}


function getSearchParams() {
    var params = [], operat;
    var textFields = selectInput();
    // var textFields = document.querySelectorAll("[data-opname]");
    for(var i = 0; i < textFields.length; i++){
        var field = textFields[i].dataset.opname;
        var tab = textFields[i].dataset.tab;
        var externField = textFields[i].dataset.exfield;
        var val = textFields[i].value.toLowerCase();
        var typedata = textFields[i].dataset.datatype;

        if(document.getElementById(field)){
            operat = document.getElementById(field).value;
        }else{
            console.log('No field '+field)
        }
        if(val){
            //J controle le fait de mettre une chaine de caractere dans une entier
            if(typedata == 'number'){
                if(isNaN(parseFloat(val))){
                    val = null;
                    textFields[i].value  = val;
                }
            }
            if(typedata == 'date'){
                if(isNaN(Date.parse(val))){
                    val = null;
                    textFields[i].value = val;
                }else{
                    val = new Date(val);
                }
            }
            if(val != null){
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
    }
    return params;
}


function showLoader(){
    document.getElementById('archeologie_loader').style.display = 'inline-block';
}

function displayAuthorNames(authors){
    var name = ""
    for(var i = 0; i < authors.length; i++){
        name += authors[i].name+", "
    }
    return name
}

function hideLoader(){
    document.getElementById('archeologie_loader').style.display = 'none';
}


function setPageToOne(url) {
    var request_url = url;
    var debut = request_url.indexOf('page=');
    var fin = request_url.indexOf("&");
    var partie = '';
    if(debut != -1){
        if(fin == -1){
            partie = request_url.slice(debut);
        }else{
            partie = request_url.slice(debut, fin);
        }
        // console.log(partie);
        request_url = request_url.replace(partie, 'page=1');
    }
    return request_url;
}

function drawMap() {
    if($('#lalat').html() && $('#lalong').html()){
        // console.log('on peut dessiner la carte');
        var lalat = parseFloat($('#lalat').html());
        var lalong = parseFloat($('#lalong').html());
        var sitename = $('#sitename').html();

        // console.log(lalat);
        // console.log(lalong);
        if(typeof lalat !== 'undefined' && typeof lalong !== 'undefined') {
            var myLatlng = new google.maps.LatLng(lalat, lalong);
            var carte = new google.maps.Map(document.getElementById('map__cartographie'), {
                center: myLatlng,
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });
            var myMarker = new google.maps.Marker({
                position: myLatlng,
                map: carte,
                title: sitename
            })
            google.maps.event.addListener(myMarker, 'click', function () {
                bulle = new google.maps.InfoWindow({
                    content: '<table cellspacing="2" cellpadding="4" bgcolor="FFFFFF">' +
                    '<tr>' +
                    '<td style="text-decoration: underline; font-weight: bold;">Site : </td>' +
                    '<td style="padding-left: 5px;">' + sitename + '</td>' +
                    '</tr>' +
                    '</table>',
                    zIndex: -20,
                    disableAutoPan: false
                });
                bulle.open(this.getMap(), this);
            });
        }
    }else{
        // console.log('On ne peut pas dessiner la carte');
    }
}

$('#paginateLimit').on('change', function() {
    // console.log(this.value);
    var request_url = $('#archeologie_ajaxchUrl').val();
    request_url = setPageToOne(request_url);
    ajaxPageLoader(request_url);
});

$(document).ready(function () {
    hideLoader();
    setEvenListenSearchInputText();
    attachPagination();
    drawMap();
    if($(".auteur-select-list").length !== 0) {
        $(".auteur-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner le(s) auteur(s)'
        });
    }
    if($(".publication-select-list").length !== 0) {
        $(".publication-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner une(les) publication(s)'
        });
    }
    if($("[name='laboratoire_id']").length !== 0) {
        $("[name='laboratoire_id']").select2();
    }
    if($("[name='site_id']").length !== 0) {
        $("[name='site_id']").select2();
    }
    if($(".objet-select-list").length !== 0) {
        $(".objet-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner un objet'
        });
    }
    if($(".materiel-select-list").length !== 0) {
        $(".materiel-select-list").select2({
            placeholder: 'Saisir pour rechercher et selectionner un materiel'
        });
    }

})
