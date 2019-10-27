import {displayData,revealKeywordSymptome} from "./lib.js"

	let data;
	let SearchForm = document.getElementById("SearchForm");
	SearchForm.addEventListener("submit", async function(event)
	{
		//empeche la page de refresh
		event.preventDefault();
		// Appel à l'API pour avoir les resultats en json
		let keywords = document.getElementById("keywordschoise");
		var answer = await fetch("?API=SearchByKeywords&keywords="+keywords.value);
		data = await answer.json();
		displayData(data);
	});

	// permet le clic sur l'élément pour afficher/cacher les mots clef et les symptome
	document.getElementById('searchResult').addEventListener('click',callRevealKeywordSymptome);

	function callRevealKeywordSymptome()
	{
		revealKeywordSymptome(event,data)
	}
