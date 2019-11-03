import {displayData,revealKeywordSymptome} from "./lib.js"

	let data;
	let MeridienChoise = document.getElementById("MeridienChoise");
	let TypePathoChoise = document.getElementById("TypePathoChoise");
// fct d'affichage de patho en AJAX
window.addEventListener("load", async function(event)
{
	// Appel à l'API pour avoir les resultats en json
	var answer = await fetch("?API=GetAllPatho");
	data = await answer.json();

	displayData(data);
});

function filtrer()
{
		const filtered = data.filter(function(item) {
			return ((item.CodeMeridien==MeridienChoise.value)||(MeridienChoise.value=="All"))&&((item.type==TypePathoChoise.value)||(TypePathoChoise.value=="All"));
		});
		displayData(filtered);
}

MeridienChoise.addEventListener("change" , filtrer);
TypePathoChoise.addEventListener("change" , filtrer);

// permet le clic sur l'élément pour afficher/cacher les mots clef et les symptome
document.getElementById('searchResult').addEventListener('click',callRevealKeywordSymptome);

function callRevealKeywordSymptome()
{
	revealKeywordSymptome(event,data)
}
