$(".validFirstResa").click(function(){

	var bouton = $(this).data("first");
	// console.log(bouton);
	
	if(bouton=="btn1"){
		var nom = $("#first_name").val();
        var prenom = $("#last_name").val();
        var email = $("#email").val();
        var numTel = $("#textarea1").val();
        var ville = $("#ville").val();
        var cp = $("#cp").val();
        var range1 = $("#start").val();
        var id = $("#cache").val();

        $.ajax({
            url: "modalinfo.php",
            method: "POST",
            data:{
                name: nom,
                lname: prenom,
                mail: email,
                tel: numTel,
                town: ville,
                code: cp,
                nbResa: range1,
                id_eve: id,
                bouton: bouton
            },
            success : function(arg){
              M.toast({html: arg, inDuration: 8000});
            }

		});

	}
	if(bouton=="btn2"){
		var mail2 = $("#email2").val();
		var range2 = $("#start2").val();
		var id2 = $("#cache2").val();

		$.ajax({
			url: "modalinfo.php",
    		method: "POST",
    		dataType: 'html',
    		data:{
    			mail2: mail2,
    			nbResa2: range2,
    			id_eve2: id2,
    			bouton: bouton
    		},
    		success : function(arg){
              M.toast({html: arg, inDuration: 8000});
          	}
		});
	}

});
