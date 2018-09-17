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
