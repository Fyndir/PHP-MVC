{include file='header.tpl'}

<h2>Recherche</h2>

<form id="patho_search">
<label for="patho-choice">Choisir une pathologie :</label>
<input list="patho-list" id="patho-choice" name="patho_choice" />

<datalist id="patho-list">
  {foreach from=$ArrayPatho item=patho}
    <option value="{$patho.desc}"/>
{/foreach}
</datalist>

<!-- RAF : charge keyword + les autres dans des <datalist> -->
<button type="submit">Rechercher</button>

</form>

<ul id = 'searchResult'>

</ul>

<script type="module" src="js/pathos.js"></script>

{include file='errorMsg.tpl'}
{include file='footer.tpl'}
