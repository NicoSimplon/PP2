// Carousel de la page d'accueil
$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
        }
    }
});

// initialisation modale
$(document).ready(function(){
    $('#modal_abo').modal();
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