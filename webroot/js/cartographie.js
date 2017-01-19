/**
 * Created by ndenelson on 19/11/2016.
 */

//Pour éviter des conflit de version entre les fichiers Jquery. Cette Opération permet de travaillé avec La version qui précède la dernière chargée soit la 2.4.1 pour nous
// var $jq151 = $.noConflict();
var marqueur = [];
var values = {};
var map, bulle, i, j;



//Initialisation de la carte google map
function initMap() {
    var myLatlng = new google.maps.LatLng(2.15055,13.34027);
    map = new google.maps.Map(document.getElementById('map__cartographie'), {
        center: myLatlng,
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.HYBRID
    });
}



//Initialise some generic variables
function setMinMaxMiddle() {
    values.min = parseInt(document.getElementById('minimum').value);
    values.max = parseInt(document.getElementById('maximum').value);
    // console.log(chemin);

    if(typeof values.max !== 'undefined' && typeof values.min !== 'undefined'){
        if(values.max < values.min){
            var interm = values.max;
            values.max = values.min;
            values.min = interm;
        }
        values.middle = (values.max + values.min)/2;
        values.valeurMaxCumul = (values.max + values.min)/4;
        values.valeurMinCumul = 3 * (values.max + values.min)/4;
    }
    return ;
}



function getMapDatas(){
    var chemin = document.getElementById('mapdatasurl').value;
    if(typeof chemin !== 'undefined'){
        $.ajax({
            url: chemin,
            type: 'post',
            dataType: 'json',
            update: 'carte',

            success: function (data) {
                console.log('Tout est ok')
                afficher_marqueur(data.datas, values.middle);
                return ;
            },

            error: function (data, statut, erreur) {
                alert('Une erreur c\'est produite');
                return;
            }
        });
    }else{
        console.log('Pas de hidden input avec l\'url pour les datas');
        return;
    }
}



//Fonction d'affichage de marqueurs sur une carte
function afficher_marqueur(datas, valeur) {
    console.log(datas.length+' datations a afficher');
    if(typeof datas === 'undefined' ){
        datas = [];
        console.log('le tableau de datations a afficher est vide');
    }
//vider les ancien marqueurs
    for (j = 0; j < marqueur.length; j++){
        marqueur[j].setMap(null);
        marqueur[j] = null;
    }
    marqueur = [];

//fabriquer des images de marqueurs différentes
    var icon_rouge = {
        url: document.getElementById('iconrougeurl').value,
//size: new google.maps.Size(60, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 20)
    };
    var icon_rose = {
        url: document.getElementById('iconjauneurl').value,
//size: new google.maps.Size(25, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 20)
    };

//créer des nouveaux marqueurs
    for (i = 0; i < datas.length; i++) {
        if(datas[i].site == null) {
            console.log('j\'ai saute la datation '+i);
            continue;
        }
        if (datas[i].date_bp == valeur) {
            marqueur[i] = new google.maps.Marker({
                position: new google.maps.LatLng(datas[i].site.latitude, datas[i].site.longitude),
                map: map,
                icon: icon_rouge,
                draggable: true
            });
        } else {
            marqueur[i] = new google.maps.Marker({
                position: new google.maps.LatLng(datas[i].site.latitude, datas[i].site.longitude),
                map: map,
                icon: icon_rose,
                draggable: true
            });
        }
//instancier une variable avec les infos utiles à l'infoWindow
        marqueur[i].set('infos', datas[i]);
        // console.log(datas[i]);
//Associer un évènement  à chaque marqueur
        google.maps.event.addListener(marqueur[i], 'click', function (data) {
//je récupère les informations qui vont servir à la fabrication de l'info window
            var infos = this.get('infos');
            bulle = new google.maps.InfoWindow({
                content:
                '<table cellspacing="2" cellpadding="4" bgcolor="FFFFFF">' +
                    '<tr>' +
                        '<td>Localisation : </td>' +
                        '<td>' + infos.site.latitude + ' , ' + infos.site.longitude +
                    '</tr>' +
                    '<tr>' +
                        '<td>Nom du site : </td>' +
                        '<td>' + infos.site.name + '</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td>Date before present : </td>' +
                    '<td>' + infos.date_bp + '</td></tr>' +
                    '<tr>' +
                        '<td>Erreur standard : </td>' +
                        '<td>' + infos.erreur_standard + '</td>' +
                    '</tr>' +
                    '<tr>' +
                        '<td>Date calibrée : </td>' +
                        '<td>' + infos.date_calibree + '</td>' +
                    '</tr>' +
                '</table>',
//size : new google.maps.Size(120, 120),
                zIndex: -20,
                disableAutoPan: false
//pixelOffset : new google.maps.Size(50, 50)
            });
            bulle.open(this.getMap(), this);
        });
    }
    //Enlever si possible le slider
    hideLoader();
}



//Fonction de manipulation du choix du cumul de points sur la carte
$("input[name='cumul']").change(function () {
    if ($(this).val() == "oui") {
//j'active les champs max et min
        $('#recherche').attr('disabled', false);
        $("#cumulMin").attr('disabled', false);
        $("#cumulMax").attr('disabled', false);
//je désactive le slider et le champ de saisi des valeurs non cumulées
        $(".bloc_saisie_non_cumul").fadeOut();
        $(".bloc_saisie_cumul").fadeIn();
    } else {
//je désactive les champs max et min
        $('#recherche').attr('disabled', true);
        $("#cumulMin").attr('disabled', true);
        $("#cumulMax").attr('disabled', true);
//Modification du champ texte pour la valeur de la date BP
        //$('.slider-input').val(valeur);
        //$('.slider-input').trigger('onChange');
//j'affiche le slider et la zone de saisie pour les valeurs non cumulées
        $(".bloc_saisie_cumul").fadeOut();
        $(".bloc_saisie_non_cumul").fadeIn();
    }
//appel ajax pour l'affichage de marqueurs
    appelAjax();

});



//Fontion pour contrôller la saisie de la valeur minimale
$("#cumulMin").keyup(function (touche) {
    var appuie = touche.which || touche.keyCode;
    if (appuie == 13) {
        $("#recherche").trigger('click');
    }
});



//Fontion pour contrôller la saisie de la valeur maximale
$("#cumulMax").keyup(function (touche) {
    var appuie = touche.which || touche.keyCode;
    if (appuie == 13) {
        $("#recherche").trigger('click');
    }
});



//Fonction pour lancer la recherche à travers le boutton
$("#recherche").click(function () {
//Je traite la valeur mainimale
    maxCumul = parseInt($("#cumulMax").val());
    carac = maxCumul.toString();
    if (carac == "NaN") maxCumul = values.valeurMaxCumul;
    if (maxCumul > 0) maxCumul = maxCumul * (-1);
    if(maxCumul > values.max) maxCumul = values.max;
    if(maxCumul < values.min) maxCumul = values.min;

//Je traite la valeur maximale
    minCumul = parseInt($("#cumulMin").val());
    carac = minCumul.toString();
    if (carac == "NaN") minCumul = values.valeurMinCumul;
    if (minCumul > 0) minCumul = minCumul * (-1);
    if(minCumul > values.max) minCumul = values.max;
    if(minCumul < values.min) minCumul = values.min;
//Je traite l'alternance entre les valeurs
    if (minCumul > maxCumul) {
        intermediaire = maxCumul;
        maxCumul = minCumul;
        minCumul = intermediaire;
    }
//JE met à jour les champs de texte et le slider
    $("#cumulMin").val(minCumul);
    $("#cumulMax").val(maxCumul);
    $("#alternating-slider-cumul").slider("values", [minCumul, maxCumul])
//appel ajax pour l'affichage de marqueurs
    appelAjax();
});



//fonction de contrôle de saisie des valeurs non cumulées
$("#datebp").keyup(function (touche) {
    //Effectuer un contrôle pour voir si on a appuyé sur la touche Entrée du clavier
    var appuie = touche.which || touche.keyCode;
    if (appuie == 13) {
    //contrôle sur la valeur saisie
        valeur = parseInt($("#datebp").val());
        carac = valeur.toString();
        if (carac == "NaN") valeur = values.middle;
        if (valeur > 0) valeur = valeur * -1;
        if (valeur > values.max) valeur = values.max;
        if (valeur < values.min) valeur = values.min;
        $("#datebp").val(valeur);
        $("#alternating-slider").slider("value", valeur); //Je met le slider à jour
        //appel ajax pour l'affichage de marqueurs va etre différée dans la function change du slider
    }
});



//Fonction qui s'exécute lorsqu'on laisse le curseur
function appelAjax() {
    var params = {}
    params.minCumul = $("#alternating-slider-cumul").slider("values", 0);
    params.maxCumul = $("#alternating-slider-cumul").slider("values", 1);
    params.valeur = $("#alternating-slider").slider("value");
    params.statutCumul = $('input[type=radio][name=cumul]:checked').attr('value');
    var chemin = document.getElementById('ajaxSliderUrl').value;
    showLoader();
    // console.log(params);
    // console.log(document.getElementById('ajaxSliderUrl').value);

    $.ajax({
        url: chemin,
        type: 'POST',
        dataType: 'JSON',
        data: {
            params: params
        },
        success: function (data) {
            // console.log(data.datas);
            afficher_marqueur(data.datas, params.valeur);
        },
        error: function (data, statut, erreur) {
            console.log('une erreur c\'est produite');
            console.log(data);
            console.log(erreur);
            hideLoader();
        }
    });
}



//fonction de mise à jour de la carte lors de la première visite
$(document).ready(function () {
//Initialisation de la carte google map
    initMap();
//Initiation des variables pour la fabication des slidersTest
    $(".bloc_saisie_cumul").fadeOut();
    $('input[name="cumul"][value="non"]').prop("checked", true);
//Initialise les  valeurs generales de l'application
    setMinMaxMiddle();
    console.log(values);

    getMapDatas();
    // console.log(values);
//J'initialise les champs de saisie
    $("#datebp").val(values.middle);
    $("#cumulMin").val(values.valeurMinCumul);
    $("#cumulMax").val(values.valeurMaxCumul);
//Traitement du Slider des valeurs non cumulées
    $("#alternating-slider")
        .slider({
            max: values.max,
            min: values.min,
            value: values.middle,
            range: false,
            step: 1,
            animate: "fast",
            slide: function(event, ui){
                $("#datebp").val(ui.value);
            },
            change: function (event, ui){
                console.log('value change');
                $("#datebp").val(ui.value);
                appelAjax();
            }
        })
        .slider("pips", {
            rest: "label",
        })
        .slider("float", {});
//Traitement du Slider des valeurs cumulées
    $("#alternating-slider-cumul")
        .slider({
            max: values.max,
            min: values.min,
            values: [values.valeurMinCumul, values.valeurMaxCumul],
            range: true,
            step: 1,
            animate: "fast",
            slide: function(event, ui){
                $("#cumulMin").val(ui.values[0]);
                $("#cumulMax").val(ui.values[1]);
            },
            change: function (event, ui){
                console.log('value change');
                $("#cumulMin").val(ui.values[0]);
                $("#cumulMax").val(ui.values[1]);
                appelAjax();
            }
        })
        .slider("pips", {
            rest: "label",
        })
        .slider("float", {});
});

