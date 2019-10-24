import {displayData} from "./lib.js"

	let data;
	let MeridienChoise = document.getElementById("MeridienChoise");
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
			return (item.CodeMeridien==MeridienChoise.value)||(MeridienChoise.value=="All");
		});
		displayData(filtered);
}

MeridienChoise.addEventListener("change" , filtrer);

document.getElementById('searchResult').addEventListener('click',async function(event) {
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
});
