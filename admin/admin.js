$(document).ready(function() {
    $("select").formSelect();  
    $("#tabs-swipe").tabs();
    $('#modalAjoutUtil').modal();
    $('.dropdown-trigger').dropdown();
    $("#modal1").modal();

    affichageAdmin();

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

$("#valideNewUser").click(function(){
  var nom_user = $("#nom").val();
  var mail_user = $("#mail").val();
  var password_user = $("#password").val();
  var droit_user = document.querySelector('input[name="role"]:checked').value;

  $.ajax({
    type:"POST",
    url:'requetteNewUser.php',
    data:{
      nom: nom_user,
      mail: mail_user,
      password: password_user,
      droit: droit_user
    },
    success: function(arg){
      M.toast({html: arg})  
      $("#listeAdmin").html("");
      affichageAdmin();
    }
  })
})


function affichageAdmin(){
  $.ajax({
    type:"POST",
    url:'affichageAdmin.php',

    success:function(arg){
      $("#listeAdmin").html(arg);
    }
  })
}

$("#valideNewUser").click(affichageAdmin());