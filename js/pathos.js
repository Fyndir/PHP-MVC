
// defini le formulaire ou chercher
let searchForm = document.forms.patho_search;

// fct de recherche de patho en AJAX
searchForm.addEventListener("submit", async function(event)
{
	// empeche le rechargement de la page lors de l'action submit
	event.preventDefault();
	// recup la valeur la l'input de recherche
	var patho=searchForm.patho_choice.value;
	// Appel à l'API pour avoir les resultats en json
	var answer = await fetch("?API=recherche&search="+patho);
	var data = await answer.json();
	// verif de debug
	console.log(data);
	// traitement de la data pour l'afficher dans le HTML
	document.getElementById('searchResult').innerHTML=`${data.map(function(currentElement)
		{
			return "<li>"+currentElement.desc+"</li>"
		}
	)}`;
});
