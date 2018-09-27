$(document).ready(function(){
    $('#selection_galeries').hide();
  });

//Récupère la liste des evenements dans liste_evenement
function setSelectEvent(){
    $.ajax({
        url: 'admin/eventList.php',
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
        url:'requeteImageGalerie.php',
        type: 'POST',
        data: {case: 'eventList'},
        success: function(data){
            var photo_dossier_evenement = JSON.parse(data);
            for(var i = 0; i < photo_dossier_evenement.length; i++){
                for(var j = i; j < liste_evenement.length; j++){
                    var nom = liste_evenement[i].event;
                    $("#galeries").append('<div class="col s12 m4"><div class="card hover"><div class="card-image"><img src="'+ photo_dossier_evenement[i]['photo'] +'" id="dossier'+ photo_dossier_evenement[i]['id_event'] +'"><div class="card-content"><span class="nom_evenement">'+ nom +'</span></div></div></div></div>');
                    i++;
                }
            }
        }
    })
}

setSelectEvent();

//Efface les images précédemment affichées
//Affiche la galerie sélectionnée
//Attribue a l'image un id correspondant à l'id enregistré dans la BDD, puis exécute getGalerie et affiche les images récupérées par getGalerie
$(document).on('click','.card',function(){
    $('#rangée_galerie').html('');
    $('#galerie_lieu ,#galeries').hide();
    i = $(this).children('.card-image').children('img').attr('id').replace("dossier", "");
    getGalerie(i);
    $('#selection_galeries').show();
});

//Récupère les images liées à l'évènement indiqué dans l'id de l'image du dossier de l'évènement
function getGalerie(i){
    id_evenement = i;
    $.ajax({
        url: 'requeteImageEvenement.php',
        type: 'POST',
        data: {event: id_evenement},
        success: function(data){
            var photos = JSON.parse(data);
            for (var i = 0; i < photos.length; i++){
                var url_photos = photos[i].photo;
                $('#rangée_galerie').append('<div class="col s12 m4 center-align"><img src="'+ url_photos +'" class="galerie-img materialboxed"></div>');
            }
            $('.materialboxed').materialbox();
        }
    });
}

//Gère l'affichage des sections
$('#btn_selection_galeries').click(function(){
    $('#selection_galeries').hide();
    $('#rangée_galerie').html('');
    $('#galerie_lieu ,#galeries').show();
});