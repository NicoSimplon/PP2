(function (d, s, id) {
  var js,
    fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src =
    "https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=198863107382803&autoLogAppEvents=1";
  fjs.parentNode.insertBefore(js, fjs);
})(document, "script", "facebook-jssdk");

$(document).ready(function () {
  $('.tooltipped').tooltip();
  $('#modalReservation').modal();
  $("#modal1").modal();
  $('.materialboxed').materialbox();
  displayLastComments();


  $(".modal-trigger").click(function () {
    var date = $(this).data("date");
    var dataRecup = $(this).data("recupval");

    // console.log(date);
    // console.log(dataRecup);
    var recupMyDate = $(".TitleDate", this).text();
    $.ajax({
      url: "pages_back/modalinfo.php",
      method: "POST",
      dataType: "html",
      data: {
        myDate: date,
        modalCreate: dataRecup
      },
      success: function (arg) {
        $("#modalReservation").html(arg);
      }
    });
  });
});


$(document).ready(function () {
  $("#tabs-swipe").tabs();

  $(".carousel.carousel-slider").carousel({
    fullWidth: true,
    indicators: true
  });
  function autoplay() {
    $(".sliderPerso").carousel("next");
  }
  setTimeout(autoplay, 10000);
});

$(".ajaxBtn").click(function () {
  var idclick = $(this).data("news");
  var recupMail = $("#Coloremail").val();
  //console.log(recupMail);

  $.ajax({
    url: "pages_back/validation_newsletter.php",
    method: "post",
    dataType: "html",
    data: {
      clickRecup: idclick,
      mailRecup: recupMail
    },
    success: function (arg) {
      M.toast({ html: arg, inDuration: 8000 });
      $("#Coloremail").val("");
    }
  });
});

function displayLastComments(){

    $.ajax({

        type: 'POST',
        url: 'pages_back/getLastComments.php',
        success: function(data){
            var json = JSON.parse(data);

            $("#lastComments").html('');

            for(var i = 0; i < json.length; i++){

                $("#lastComments").append(
                    '<div class="col s12 m12 l12">\
                        <div class="card">\
                            <div class="card-content ">\
                                <span class="card-title">'+json[i]['pseudo']+'</span>\
                                <p class="text">'+json[i]['commentaire']+'</p>\
                            </div>\
                            <div class="card-action">\
                                <p>'+json[i]['date_com']+'</p>\
                            </div>\
                        </div>\
                    </div>'
                );

            }

        }

    });

}