$(document).ready(function() {
  $('#modalReservation').modal();
  $("#modal_desabo").modal();
  $("#modal1").modal();


  $(".modal-trigger" ).click(function() {
    var date = $(this).data("date"); 
    var dataRecup = $(this).data("recupval"); 
    // console.log(date);
    // console.log(dataRecup);
    var recupMyDate = $(".TitleDate",this).text();    
    $.ajax({
      url: "modalinfo.php",
      method: "POST",
      dataType: "html",
      data: { myDate: date,
              modalCreate:dataRecup},
      success :function(arg){
        $("#modalReservation").html(arg);
      }
    });
  });
});
