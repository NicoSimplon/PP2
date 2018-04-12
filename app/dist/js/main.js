// Carousel de la page d'accueil

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