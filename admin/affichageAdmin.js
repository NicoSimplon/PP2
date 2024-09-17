$('.dropdown-trigger').dropdown();


$(".deleteUser").click(function(){
    var x = $(this).attr("value");
    console.log(x +" = Utilisateur")
  
    $.ajax({
      type:"POST",
      url:"requetteDeletUser.php",
      data:{
        nom: x,
      },
      success: function(arg){
        M.toast({html: arg})  
      }
    })
    $(this).parent().parent().hide();
  });