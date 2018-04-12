$(document).ready(function() {
  $('#modalReservation').modal();
  $("#modal_desabo").modal();
  $("#modal1").modal();
  $(".card" ).click(function() {
    var dataRecup = $(".modal-trigger",this).data("recupval"); 
    console.log(dataRecup);
    var recupMyDate = $(".TitleDate",this).text();    
    $.ajax({
      url: "modalinfo.php",
      method: "POST",
      dataType: "html",
      data: { myDate: recupMyDate,
        modalCreate:dataRecup},
      success :function(arg){
        $("#modalReservation").html(arg);
      }
    });
  });



  // Carousel de la page d'accueil
  $(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: false
      }
    }
  });

});
