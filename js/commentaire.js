$(document).ready(function(){

    displayComments();

});



$('#btn_envoi').click(function(){
        
    var mail = $('#mail').val();
    var pseudo = $('#pseudo').val();
    var commentaire = $('#com').val();
    var tabData = [];

    tabData.push(mail, pseudo, commentaire);

    $.ajax({
        url:'pages_back/addcom.php',
        type:"POST",
        data:{
            tabData: tabData
        },
        success:function(data){

            M.toast({
                html: data  
            }); 

            displayComments();
                
        }
    });
});


function displayComments(){

    $.ajax({
        type: 'POST',
        url: 'pages_back/displayComment.php',
        success: function(data){
            
            var json = JSON.parse(data);

            $("#divComment").html('');

            for(var i = 0; i<json.length; i++){

                $("#divComment").append(
                    '<div class="col s12">\
                        <div class="card">\
                            <div class="card-content ">\
                                <span class="card-title">'+json[i]['pseudo']+'</span>\
                                <p class="text">'+json[i]['commentaire']+'</p>\
                            </div>\
                            <div class="card-action">\
                                <p>'+json[i]['date_com']+'</p>\
                            </div>\
                        </div>\
                    </div>'
                );

            }
			
        }
    });

}