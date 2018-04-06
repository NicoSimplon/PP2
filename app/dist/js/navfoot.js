Vue.component("navmenu", {
  template: '<div id="containerElnav"><div id="menuptgauche"><img  src="logo/logocolo.jpg" class="ImgLogo"></div><div id="menuptdroit"> <div class="containerBtnTitle"><a href="" class="">Accueil</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Agenda</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">A propos</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Contact</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Commentaire</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Galerie</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div><div class="containerBtnTitle"><a href="" class="">Pro-presse</a><div class="petitsAngre"><i class="fas fa-cog petitAngre1"></i><i class="fas fa-cog petitAngre2"></i> </div></div> </div><div class="imgAngre"><i class="fas fa-cog GrosAngre"></i></div></div>'
});
new Vue({
  el: "nav"
});

$(document).ready(function () {
  function respNav() {
    var laptop = window.matchMedia("(max-width : 860px)");
    if (laptop.matches) {
      $("#menuptdroit").css({
        display: "none"
      });
      var clickBtn = false;
      $(".GrosAngre").on("click", function () {
        if (clickBtn) {
          $("#menuptdroit").slideUp();
          clickBtn = false;
        } else {
          $("#menuptdroit").slideDown();
          clickBtn = true;
        }
      }) ;
    }
    if (laptop.matches == false) {
      clickBtn = false;
      $(".GrosAngre").off();
     $("#menuptdroit").css({
        display: "flex"
      });

    }
    window.addEventListener("resize", respNav, true);
  }
  respNav();
});