const searchResult = document.getElementById('searchResult');

export function displayData(list)
 {
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

export async function revealKeywordSymptome(event,data)
{
	const tr = event.target.closest('.openabled');
	if (!tr)
	{
			return ;
	}
	const index = [...tr.parentNode.children].indexOf(tr);

	if (!data[index].Symptomes) {
		const response = await fetch('?API=GetDetails&idPatho=' + data[index].id);
		data[index] = await response.json();
	}

	if (tr.classList.contains('parent'))
	{
		tr.nextElementSibling.remove();
	}
	else
	{
		tr.insertAdjacentHTML('afterend', `
			<tr>
				<td>
				<b> Symptomes : </b>
					<ul>
						${data[index].Symptomes.map(function(item) {
							return `
								<li>${item.desc}</li>
							`;
						}).join('')}
					</ul>
				</td>
				<td>
					<b> Mots clef : </b>
					<ul>
						${data[index].Motclef.map(function(item) {
							return `
								<li>${item.name}</li>
							`;
						}).join('')}
					</ul>
				</td>
			</tr>
		`);
	}
	tr.classList.toggle('parent');
}
