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

//Surligner les liens actifs
var lien_actif = window.location.pathname;

switch(lien_actif) {
  case '/index.php':
    $("#lien_accueil").css("color", "#577866");
    break;

  case '/evenement.php':
    $("#lien_agenda, #engre_agenda1, #engre_agenda2").css("color", "#577866");
    break;

  case '/qui_sommes_nous.php':
    $("#lien_apropos, #engre_apropos1, #engre_apropos2").css("color", "#577866");
    break;

  case '/contact.php':
    $("#lien_contact, #engre_contact1, #engre_contact2").css("color", "#577866");
    break;

  case '/livre_dor.php':
    $("#lien_commentaire, #engre_commentaire1, #engre_commentaire2").css("color", "#577866");
    break;

  case '/galerie.php':
    $("#lien_galerie, #engre_galerie1, #engre_galerie2").css("color", "#577866");
    break;

  case '/propresse.php':
    $("#lien_infopresse, #engre_infopresse1, #engre_infopresse2").css("color", "#577866");
}