Vue.component("navmenu", {
  template:
    '<div id="containerElnav"><div id="menuptgauche"><img  src="dist/logocolo.jpg" class="ImgLogo"></div><div id="menuptdroit"> <div class="containerBtnTitle"><a href="" class=""><i style="font-size:2rem" class="fas fa-home"></i></a></div><div class="containerBtnTitle"><a href="" class="">Agenda</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">A propos</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Contact</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Commentaire</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Galerie</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Pro-presse</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div> </div><div class="imgAngre"><i class="fas fa-cog rotate " id="GrosAngre"></i></div></div>'
});
new Vue({
  el: "nav"
});

$(document).ready(function() {
  function respNav() {
    var laptop = window.matchMedia("(max-width : 860px)");
    if (laptop.matches) {
      function GrosAngreActive() {
        if ($("#GrosAngre").hasClass("bounceActive")) {
          $("#GrosAngre").removeClass("bounceActive");
          $("#GrosAngre").addClass("rotate");
        } else {
          $("#GrosAngre").removeClass("rotate");
          $("#GrosAngre").addClass("bounceActive");
        }
      }
// setInterval(function() {
//         GrosAngreActive();
//       }, 1000);

      $("#menuptdroit").css({
        display: "none"
      });
      var clickBtn = false;
      // console.log("init:", clickBtn);
      $("#GrosAngre").on("click ", function() {
        if (clickBtn) {
          $("#menuptdroit").slideUp();
          clickBtn = false;
          // console.log("clickmonte:",clickBtn )
        } else {
          $("#menuptdroit").slideDown();
          clickBtn = true;
          // console.log("clickdescend:",clickBtn )
        }
      });
    } else {
      clickBtn = false;
      $("#GrosAngre").off();
      $("#GrosAngre").addClass("rotate");
      $("#menuptdroit").css({
        display: "flex"
      });
    }
    window.addEventListener("resize", respNav, true);
  }
  respNav();
  $(".containerBtnTitle")
    .mouseout(function() {
      $(".petitAngre2,.petitAngre1", this).removeClass("activeRotate");
    })
    .mouseover(function() {
      $(".petitAngre2,.petitAngre1", this).addClass("activeRotate");
    });
});
