Vue.component('navigation', {
	props: ['navi'],
	template: '<a href="index.php">Accueil</a><a href="evenement.php">Agenda</a><a href="galerie.php">Galerie</a><a href="commentaire.php">Livre d\'or</a><a href="qui_sommes_nous.php">Qui sommes nous?</a><a href="pro_presse.php">Pro / Presse</a><a href="contact.php">Contact</a>'
})

// var navbarre = new Vue({
// 	el: '#barnave',
// 	data: {
// 		navi:[{lien: '<a href="index.php">Accueil</a>'},
// 			{lien: '<a href="evenement.php">Agenda</a>'},
// 			{lien: '<a href="galerie.php">Galerie</a>'},
// 			{lien: '<a href="commentaire.php">Livre d\'or</a>'},
// 			{lien: '<a href="qui_sommes_nous.php">Qui sommes nous?</a>'},
// 			{lien: '<a href="pro_presse.php">Pro / Presse</a>'},
// 			{lien: '<a href="contact.php">Contact</a>'}]
// 	}
// })