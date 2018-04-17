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
  $("#modal_desabo").modal();
  $("#modal1").modal();


  $(".modal-trigger").click(function () {
    var date = $(this).data("date");
    var dataRecup = $(this).data("recupval");

    // console.log(date);
    // console.log(dataRecup);
    var recupMyDate = $(".TitleDate", this).text();
    $.ajax({
      url: "modalinfo.php",
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

  $("#modal_abo").modal();

  $("#modal_desabo").modal();

  $("#sabonner").click(function () {
    $("#abo").show();
    $("#desabo").hide();
    $("#modal_titre").text("S'abonner");
  });

  $("#sedesabonner").click(function () {
    $("#abo").hide();
    $("#desabo").show();
    $("#modal_titre").text("Se désabonner");
  });
});

$(".ajaxBtn").click(function () {
  var idclick = $(this).data("news");
  var recupMail = $("#email").val();
  //console.log(recupMail);

  $.ajax({
    url: "dist/validation_newsletter.php",
    method: "post",
    dataType: "html",
    data: {
      clickRecup: idclick,
      mailRecup: recupMail
    },
    success: function (arg) {
      M.toast({ html: arg, inDuration: 8000 });
      $("#email").val("");
    }
  });
});

$(document).ready(function () {
  function heure() {
    moment.locale("fr");
    var myheure = $("#insertDate").text(moment().format("LTS"));
  }
  heure();
  setInterval(heure, 1000);

  function saluTime() {
    moment.locale("fr");
    var myheure = $("#insertDate").text(moment().format("LTS"));
    var heure = moment("18:00:00").format("LTS");
    if (myheure > heure) {
      $("#variente").html("Bonsoir," + "&nbsp");
      // alert("bonsoir");
    } else {
      $("#variente").html("Bonjour," + "&nbsp");
    }
  }
  saluTime();
});

