// Vue.component('navmenu', {
//     template: '<div id="cool" :style="modusfocus">Un composant personnalisé !</div>',

    
// })

// // créer une instance racine
// var navbar = new Vue({
//     el: 'header',
//     data:{
    	
//     }
// })


var app = new Vue({
  el: '#app',
  data: {
    message: 'Ceci est un component de test en Vue.js'
  }
})

var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'You loaded this page on ' + new Date().toLocaleString()
  }
})

var app3 = new Vue({
  el: '#app-3',
  data: {
    seen: true
  }
})

var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' },
      { text: 'J\'ai aidé Damien' },
    ]
  },
  methods: {
  	ajoutText: function () {
  		this.todos.push({ text: 'Je suis un pirate' })
  	},
  	enleverText: function () {
  		this.todos.splice(6)
  	}
  }
})

var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'Colo & Co!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
})

var app6 = new Vue({
  el: '#app-6',
  data: {
    plop: 'Mamie va au marché!'
  }
})


Vue.component('todo-item', {
  // The todo-item component now accepts a
  // "prop", which is like a custom attribute.
  // This prop is called todo.
  props: ['todo'],
  template: '<li>{{ todo.text }}</li>'
})


var app7 = new Vue({
  el: '#app-7',
  data: {
    groceryList: [
      { id: 0, text: 'Vegetables' },
      { id: 1, text: 'Cheese' },
      { id: 2, text: 'Whatever else humans are supposed to eat' }
    ]
  }
})


var vm = new Vue({
 	el: 'nav',
 	data: {
 		
 	}
})
// $(document).ready(function(){
// $("img").on('click', function(){
//         var url = $(this).attr('src');    
//         console.log(url);
//     $('#cool').html(url);
//     });

// })
