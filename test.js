function setSelectEvent(){
    $.ajax({
        url: 'admin/eventList.php',
        type: 'POST',
        data: {case: 'eventList'},
        success: function(data){
            var liste = JSON.parse(data);
            for(var i = 0; i < liste.length; i++){
                var nom = liste[i].event;
                $("#galeries").append('<div class="col s12 m4"><div class="card"><div class="card-image"><img src="img/spookyTrumpet.jpg"><span class="card-title nom_evenement">'+ nom +'</span></div></div></div>');
            }
        }
    });
}

setSelectEvent();

function getGalerie(){
    $.ajax({
        url: 'testRequest.php',
        type: 'POST',
        data: {event: 'testRequest'},
        success: function(data){
            var photos = JSON.parse(data);
            for (var i = 0; i < photos.length; i++){
                var url_photo = photos[i].photo;
                $('#rangée_galerie').append('<div class="col s12 m4 center-align"><img src="'+ url_photo +'" class="galerie-img materialboxed"></div>')
            }
            $('.materialboxed').materialbox();
        }
    });
}

// $('.nom_evenement').click(function(){
//     console.log("click");
//     $('#rangée_galerie').html('');
//     getGalerie();
// });

$(document).on('click','.nom_evenement',function(){
    $('#rangée_galerie').html('');
    getGalerie();
});