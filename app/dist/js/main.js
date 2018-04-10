<<<<<<< HEAD
$(document).ready(function(){

	// $(".card") .mouseout(function() {
	// 	$(".card-reveal ", this).css({display: "none", transform: "translateY(0)"});
	// 	$(".card",this).css({overflow: "hidden"});
		
	//   })
	//   .mouseover(function() {
	// 	$(" .card-reveal ", this).css({display: "block", transform: "translateY(-100%)",cursor:"pointer"});
	// 	$(".card",this).css({overflow: "visible"});
	//   });
});
=======
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
    $('#modal_desabo').modal();
  });
      
>>>>>>> dev
