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
    
		if (myheure >= heure) {
		$("#variente").html("Bonsoir," + "&nbsp"); 
		} 
		else {
		$("#variente").html("Bonjour," + "&nbsp");
		}
  	}

	saluTime();
	  
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
		}

	});

}
