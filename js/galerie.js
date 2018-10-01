$(document).ready(function(){
    $('#selection_galeries, #rangee_galerie').hide();
    getGalerieLieu();
  });

//Récupère la liste des evenements dans liste_evenement
function setSelectEvent(){
    $.ajax({
        url: 'pages_back/requeteListeEvenement.php',
        type: 'POST',
        data: {case: 'eventList'},
        success: function(data){
            var liste_evenement = JSON.parse(data);
            getGalerieImage(liste_evenement)
        }
    });
}

//Récupère la première photo de l'évènement pour l'afficher sur le dossier de l'évènement concerné
//Récupère et affiche le nom de l'évènement sur la card lors de sa création
function getGalerieImage(liste_evenement){
    $.ajax({
        url:'pages_back/requeteImageGalerie.php',
        type: 'POST',
        data: {case: 'eventList'},
        success: function(data){
            var photo_dossier_evenement = JSON.parse(data);
            for(var i = 0; i < photo_dossier_evenement.length; i++){
                for(var j = i; j < liste_evenement.length; j++){
                    var nom = liste_evenement[i].event;
                    $("#galeries").append('<div class="col s12 m4"><div class="card hover card_evenement"><div class="card-image"><img src="'+ photo_dossier_evenement[i]['photo'] +'" id="dossier'+ photo_dossier_evenement[i]['id_event'] +'"><div class="card-content"><span class="nom_evenement">'+ nom +'</span></div></div></div></div>');
                    i++;
                }
            }
        }
    });
}

setSelectEvent();

//Efface les images précédemment affichées
//Affiche la galerie sélectionnée
//Attribue a l'image un id correspondant à l'id enregistré dans la BDD, puis exécute getGalerie et affiche les images récupérées par getGalerie
$(document).on('click','.card_evenement',function(){
        $('#rangee_galerie').html('');
        $('#galerie_lieu ,#galeries').hide();
        i = $(this).children('.card-image').children('img').attr('id').replace("dossier", "");
        getGalerie(i);
        $('#selection_galeries, #rangee_galerie').show();
    });

//Récupère les images liées à l'évènement indiqué dans l'id de l'image du dossier de l'évènement
function getGalerie(i){
    id_evenement = i;
    $.ajax({
        url: 'pages_back/requeteImageEvenement.php',
        type: 'POST',
        data: {event: id_evenement},
        success: function(data){
            var photos = JSON.parse(data);
            for (var i = 0; i < photos.length; i++){
                var url_photos = photos[i].photo;
                $('#rangee_galerie').append('<div class="col s12 m4 center-align"><img src="'+ url_photos +'" class="galerie-img materialboxed"></div>');
            }
            $('.materialboxed').materialbox();
        }
    });
}

//Gère l'affichage des sections
$('#btn_selection_galeries').click(function(){
    $('#selection_galeries').hide();
    $('#rangee_galerie').html('');
    $('#galerie_lieu ,#galeries').show();
});

//Récupère les photos liées à la galerie lieu
function getGalerieLieu(){
    $.ajax({
        url: 'pages_back/requeteImageGalerieLieu.php',
        type: 'POST',
        data: {galerie: 'lieu'},
        success: function(data){
            var photos_galerie_lieu = JSON.parse(data);
            $('#dossierLieu').attr('src', photos_galerie_lieu[0]['photo'] );
            for (i = 0; i < photos_galerie_lieu.length; i++){
                var url_photos_galerie_lieu = photos_galerie_lieu[i]['photo']; 
                $('#rangee_galerie').append('<div class="col s12 m4 center-align"><img src="'+ url_photos_galerie_lieu +'" class="galerie-img materialboxed"></div>');
            }
        }
    });
}



//Affiche la galerie Lieu
$(document).on('click','.card_lieu',function(){
        $('#rangee_galerie').html('');
        $('#galerie_lieu ,#galeries').hide();
        getGalerieLieu();
        $('#selection_galeries, #rangee_galerie').show();
    });