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
	
	// remplie la liste déroulante
	setSelectEvent();

	// chargement modale
	$("#modalModifResa").modal();

});

function setSelectEvent(){

	$("#eventList").html(
		'<option value="" disabled selected>Sélectionner un évènement</option>'
	);

	$.ajax({
		url: 'eventList.php',
		type: 'POST',
		data: {case: 'eventList'},
		success: function(data){
			var liste = JSON.parse(data);
			for(var i = 0; i < liste.length; i++){
				var nom = liste[i].event;
				$("#eventList").append('<option value="'+ nom +'">'+ nom +'</option>');
			}
		}
	});
}

$("#eventList").on('change', function(){

	// Récupère le nom de l'évènement
	var nomEvent = $("#eventList").val();

	//On récupère la date de l'événement
	getDate(nomEvent);

	// On rempli le tableau
	setEventTable(nomEvent);

	// On renseigne le total de réservations
	getTotalResa(nomEvent);

});

function setEventTable(evenement){

	$.ajax({
		type: "POST",
		url: "admin_req.php",
		data: {
		  nom_eve: evenement,
		},
		success: function(arg){

		  $("#tableau_reservation").html(arg);

		}
	});

}

function getTotalResa(evenement){

	$.ajax({

		type: 'POST',
		url: 'totalResa.php',
		data: {
			nom_eve: evenement
		},
		success: function(data){
			$("#total").html(data);
		}

	});

}

// Gestion des réservations
function modifResa(perso, event){
	
	$("#id_perso").val(perso);
	$("#id_event").val(event);
	
}

function setModif(){
	
	var id_perso = $("#id_perso").val();
	var id_event = $("#id_event").val();
	var nb_resa = $("#nbPerso").val();

	$.ajax({

		type: 'POST',
		url: 'modifResa.php',
		data:{
			perso: id_perso,
			event: id_event,
			nb_resa: nb_resa
		},
		success:function(data){
			M.toast({html:data});
			var nomEvent = $("#eventList").val();
			setEventTable(nomEvent);
			getTotalResa(nomEvent)
		}

	});

}

function deleteResa(perso, event){

	$.ajax({

		type: 'POST',
		url: 'deleteResa.php',
		data:{
			perso: perso,
			event: event
		},
		success:function(data){
			M.toast({html:data});
			var nomEvent = $("#eventList").val();
			setEventTable(nomEvent);
			getTotalResa(nomEvent);
		}

	});

}

// Gestion des admins
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
	});
});
  
  
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
  function getDate(evenement){
  
	$.ajax({
		type: "POST",
		url: "date_req_admin.php",
		data: {
			eve: evenement,
		},
		success: function(dt){
			$("#date_evenement").html('<p style="font-size:20pt;"><strong>'+ dt+'</strong></p>');
		}
	});
  
}