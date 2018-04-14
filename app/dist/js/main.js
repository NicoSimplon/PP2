// Carousel de la page d'accueil
// $(document).ready(function(){
//     $('.slider').slider();
//   });
// initialisation modale
$(document).ready(function(){
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  function autoplay() {
    $('.carousel').carousel('next')
}
setTimeout(autoplay, 10000);
    $('#modal_abo').modal();

    $('#modal_desabo').modal();

  });

$("#sabonner").click(function(){
    $("#abo").show();
    $("#desabo").hide();
    $("#modal_titre").text("S'abonner");
});

$("#sedesabonner").click(function(){
    $("#abo").hide();
    $("#desabo").show();
    $("#modal_titre").text("Se désabonner");
});


// $("#modal_abo").click(function(){
    
// })


$(".ajaxBtn").click(function(){
    var idclick = $(this).data("news");
    var recupMail = $("#email").val();
    console.log(recupMail);
    
    $.ajax({
        url: 'dist/validation_newsletter.php',
        method: 'post',
        dataType: 'html',
        data:{
            clickRecup: idclick,
            mailRecup: recupMail 
        },
        success : function(arg){
            M.toast({html: arg, inDuration: 8000});
            $("#email").val("");
        }

    })
})

var caca=(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=198863107382803&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// $(window).load(function() {

// })