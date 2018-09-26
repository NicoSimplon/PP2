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
	$("#modif_event").hide();

	// Ajout nouvel événement
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy'
	});
	getArtites();
	getGenres();
	getEvents();

	// chargement modales
	$("#modalModifResa").modal();
	$("#modalAjoutEvent").modal();
	$("#formModifEvent").modal();

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

	// On affiche les boutons
	$("#modif_event").show();

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
			getTotalResa(nomEvent);
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

// Ajout d'un événement
function getArtites(){

	$.ajax({
		type: 'POST',
		url: 'getArtistes.php',
		success: function(json){
			var jsonParse = JSON.parse(json);
			var data = {};
			var options = {
				data: data,
				limit: Infinity,
				minLength: 1,
			};

			for(var i = 0; i < jsonParse.length; i++){

				data[jsonParse[i].nom_artiste] = null;			

			}
			
			var elems = document.querySelectorAll('#autocomplete-input');
			var instances = M.Autocomplete.init(elems, options);
			var instance = M.Autocomplete.getInstance($('#autocomplete-input'));
			instance.updateData(data);
			
		}
	});

}

function getGenres(){

	$.ajax({
		type: 'POST',
		url: 'getGenres.php',
		success: function(json){
			var jsonParse = JSON.parse(json);
			var data = {};
			var options = {
				data: data,
				limit: Infinity,
				minLength: 1,
			};

			for(var i = 0; i < jsonParse.length; i++){

				data[jsonParse[i].lib_genre] = null;			

			}
			
			var elems = document.querySelectorAll('#autocomplete-input2');
			var instances = M.Autocomplete.init(elems, options);
			var instance = M.Autocomplete.getInstance($('#autocomplete-input2'));
			instance.updateData(data);
			
		}
	});

}

function getEvents(){

	$.ajax({
		type: 'POST',
		url: 'getEvents.php',
		success: function(json){
			var jsonParse = JSON.parse(json);
			var data = {};
			var options = {
				data: data,
				limit: Infinity,
				minLength: 1,
			};

			for(var i = 0; i < jsonParse.length; i++){

				data[jsonParse[i].event] = null;			

			}
			
			var elems = document.querySelectorAll('#autocomplete-input3');
			var instances = M.Autocomplete.init(elems, options);
			var instance = M.Autocomplete.getInstance($('#autocomplete-input3'));
			instance.updateData(data);
			
		}
	});

}

$("#validerAjout").click(function(){

	var artiste = $("#autocomplete-input").val();
	var genre = $("#autocomplete-input2").val();
	var nomEvent = $("#autocomplete-input3").val();
	var descriptif = $("#textarea1").val();
	var datetime = $("#date_event").val();
	var dateFin = $("#date_fin").val();
	var img = $("#imgAgenda").val();

	var tabData = [];

	tabData.push(artiste, genre, nomEvent, descriptif, datetime, dateFin, img);

	$.ajax({
		type: 'POST',
		url: 'newEvent.php',
		data: {
			array: tabData,
		},
		success: function(data){
			M.toast({html:data});
			setSelectEvent();
			$("#modif_event").hide();
		}
	});

});

// Gestion Miniature image événement
$("#imgAgenda").change(function(){

	var file = this.files[0];
	var imagefile = file.type;
	var match = ["image/jpeg", "image/png", "image/jpg"];

	if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){

		$("#miniature").attr('src', 'https://www.southwelldentalcare.com/img/pictures/photo.png');

		return false;
	}
	else{

		var reader = new FileReader();
		reader.onload = imageIsLoaded;
		reader.readAsDataURL(this.files[0]);
	}
});
function imageIsLoaded(e){
	
	$("#miniature").attr('src', e.target.result);

}

$("#modalModifEvent").click(function(){

	var nomEvent = $("#eventList").val();

	$.ajax({
		type: 'POST',
		url: 'modalModifEvent.php',
		data:{
			nomEvent: nomEvent
		},
		success: function(data){
			
			var json = JSON.parse(data);

			$("#nom_evenement").val(json[0].event);
			$("#modif_date_event").val(json[0].date_event);
			$("#modif_date_fin").val(json[0].date_fin);
			$("#modif_descriptif").val(json[0].descriptif);
			$("#modif_miniature").attr('src', "../img_event/" + json[0].url_img);
			$("#modif_miniature").data('url', "../img_event/" + json[0].url_img);
			
			if($("#modif_miniature").attr('src') == '../img_event/null'){
				$("#modif_miniature").attr('src', '../img_event/photo.png');
				$("#modif_miniature").data('url', "../img_event/photo.png");
			}

		}
	});

});

$("#modif_imgAgenda").change(function(){

	var file = this.files[0];
	var imagefile = file.type;
	var match = ["image/jpeg", "image/png", "image/jpg"];

	if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){

		$("#modif_miniature").attr('src', '../img_event/photo.png');

		return false;
	}
	else{

		var reader = new FileReader();
		reader.onload = imageIsLoadedModif;
		reader.readAsDataURL(this.files[0]);
	}
});
function imageIsLoadedModif(e){
	
	$("#modif_miniature").attr('src', e.target.result);

}

$("#validerModifForm").click(function(){

	var tabData = [];

	var event = $("#nom_evenement").val();
	var date_event = $("#modif_date_event").val();
	var date_fin = $("#modif_date_fin").val();
	var descriptif = $("#modif_descriptif").val();
	var url = $("#modif_imgAgenda").val();
	var data = $("#modif_miniature").data('url'); 
	
	
	if( url ){
		
		data = url; 
		
	}

	tabData.push(event, date_event, date_fin, descriptif, data);

	$.ajax({
		type: 'POST',
		url: 'modifEvent.php',
		data:{
			tabData: tabData
		},
		success:function(data){
			M.toast({html:data});
			setSelectEvent();
			$("#modif_event").hide();
		}
	});
	
});

$("#btnDelete").click(function(){

	var event = $("#eventList").val();

	$.ajax({
		type: 'POST',
		url: 'deleteEvent.php',
		data:{
			event: event
		},
		success: function(data){
			M.toast({html:data});
			setSelectEvent();
			$("#modif_event").hide();
		}
	});

});
