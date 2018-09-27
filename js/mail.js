
    $('#form').submit(function(e){
        //enlève le comportement par default
        e.preventDefault()
        var mail = $('#mail').val();
        var pseudo = $('#pseudo').val();
        var commentaire =$('#com').val();

        $.ajax({
            url:'addcom.php',
            type:"POST",
            data:{mail:mail, pseudo:pseudo, comment:commentaire},
            success:function(data){
               if (data === 'erreur'){
                   M.toast({
                       html: 'Vous ne pouvez pas commenter.'  
                   }); 

               }else{
                   M.toast({
                       html:'Votre commentaire a bien été posté !'
                   })
               }
                
            }
        })
    })


