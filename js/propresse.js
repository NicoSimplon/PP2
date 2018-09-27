$(document).ready(function(){
    $('#pro_container, #presse_container, #changement_section').hide();
});

$('#pro').click(function() {
    $('#propresse_container').hide();
    $('#pro_container, #changement_section').show();
});

$('#presse').click(function() {
    $('#propresse_container').hide();
    $('#presse_container, #changement_section').show();
});

$('#btn_changement_section').click(function() {
    $('#pro_container, #presse_container').toggle();
});