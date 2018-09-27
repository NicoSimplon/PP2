
$(document).ready(function (e) {
    $("#uploadimage").on('submit',(function(e) {
        
        e.preventDefault();
        
        $.ajax({
            
            url: "admin_back/carrousel.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
                M.toast({html:data});
            }

        });
    }));
    
    $(function() {
        $("#file").change(function() {
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg","image/PNG"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
                $('#previewing').attr('src','carrou1.png');
                return false;
            }
                else
            {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    function imageIsLoaded(e) {
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '250px');
    };
});