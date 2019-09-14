let searchForm = document.forms.patho_search;

searchForm.addEventListener("submit", async function(event){
	event.preventDefault();
	var patho=searchForm.patho_choice.value;
	var answer = await fetch("?API=recherche&search="+patho);
	var data = await answer.json();
	console.log(data);
	document.getElementById('searchResult').innerHTML=`${data.map(function(currentElement){

		return "<li>"+currentElement.desc+"</li>"
	})}`;
});
