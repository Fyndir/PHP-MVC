import {displayData,revealKeywordSymptome} from "./lib.js"

	let data;
	let keywords = document.getElementById("keywordschoise");
	keywords.addEventListener("change", async function(event)
	{
		// Appel à l'API pour avoir les resultats en json
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
