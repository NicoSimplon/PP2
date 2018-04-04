Vue.component('navmenu', {
    template: '<div id="cool" :style="caca">Un composant personnalisé !</div>',

    
})

// créer une instance racine
new Vue({
    el: 'header',
    data:{
    
    }
})

$(document).ready(function(){
$("img").on('click', function(){
        var url = $(this).attr('src');    
        console.log(url);
    $('#cool').html(url);
    });

})



