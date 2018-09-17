$(document).ready(function() {
    $("select").formSelect();  
  $("#tabs-swipe").tabs();

  function heure() {
    moment.locale("fr");
    var myheure = $("#insertDate").text(moment().format("LTS"));
  }
  heure();
  setInterval(heure, 1000);

  function saluTime() {
    moment.locale("fr");
    var myheure = $("#insertDate").text(moment().format("LTS"));
    var heure = moment("180000", "HHmmss");
    
    //console.log(heure);
    if (myheure >= heure) {
      $("#variente").html("Bonsoir," + "&nbsp");
      
    } 
    else {
      $("#variente").html("Bonjour," + "&nbsp");
    }
  }

  saluTime();

});

$("#valider").click(function(){
  // Récupère le nom de l'évènement
  var evenement = $(".requete").val();

  //On récupère la date de l'événement
  $.ajax({
    method: "post",
    url: "date_req_admin.php",
    data: {
      eve: evenement,
    },
    success: function(dt){
      $("#date_evenement").html('<p style="font-size:20pt;"><strong>'+dt+'</strong></p>');
    }
  });
  
  $.ajax({
    method: "post",
    url: "admin_req.php",
    data: {
      nom_eve: evenement,
    },
    success: function(arg){
      // Affiche la date de l'évènement dans la page admin
      $("#tableau_reservation").html(arg);
    }
  });

});

