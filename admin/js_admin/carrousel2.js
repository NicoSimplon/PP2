
$(document).ready(function (e) {
    $("#uploadimage2").on('submit',(function(e) {
        e.preventDefault();

        $.ajax({
            url: "admin_back/carrousel2.php",
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
        $("#file2").change(function() {
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg","image/PNG"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
                $('#previewing2').attr('src','carrou2.png');
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
        $('#previewing2').attr('src', e.target.result);
        $('#previewing2').attr('width', '250px');
    };
});