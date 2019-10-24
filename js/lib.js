const searchResult = document.getElementById('searchResult');

export function displayData(list) {
	// traitement de la data pour l'afficher dans le HTML
	searchResult.innerHTML=list.map(function(currentElement)
		{
			return `
			<tr class="openabled">
				<td>${currentElement.desc	}</td>
				<td>${currentElement.type	}</td>
				<td>${currentElement.MeridienNom	}</td>
				<td>${currentElement.MeridienElement	}</td>
				<td>${(currentElement.MeridienYin==1)?"Yin":"Yang"	}</td>
			</tr>
			`
		}
	).join("");
}
