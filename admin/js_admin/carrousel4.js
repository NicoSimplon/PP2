
$(document).ready(function (e) {
    $("#uploadimage4").on('submit',(function(e) {
        e.preventDefault();

        $.ajax({
            url: "admin_back/carrousel4.php",
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
        $("#file4").change(function() {
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg","image/PNG"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
                $('#previewing4').attr('src','carrou4.png');
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
        $('#previewing4').attr('src', e.target.result);
        $('#previewing4').attr('width', '250px');
    };
});