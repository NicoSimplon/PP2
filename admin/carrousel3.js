
$(document).ready(function (e) {
    $("#uploadimage3").on('submit',(function(e) {
        e.preventDefault();
        console.log($("#textarea3").val());
        $.ajax({
            url: "carrousel3.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            }
        });
    }));
    
    $(function() {
        $("#file3").change(function() {
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg","image/PNG"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
                $('#previewing3').attr('src','carrou3.png');
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
        $('#previewing3').attr('src', e.target.result);
        $('#previewing3').attr('width', '250px');
    };
});