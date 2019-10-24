<h2>Liste des pathologies</h2>
<form>
  <label for="MeridienChoise"> Meridien </label>
  <select id="MeridienChoise">
    <option value="All"> All</option>
    {foreach from=$AllMeridien item=meridien}
      <option value="{$meridien.code}"> {$meridien.nom}</option>
    {/foreach}
  </select>
</form>
<table>
  <thead>
    <tr>
      <th> Description </th>
      <th> Type </th>
      <th> Meridien </th>
      <th> Element </th>
      <th> Yin/Yang </th>
    </tr>
  </thead>

  <tbody  id = 'searchResult'>

  </tbody>

</table>

<script type="module" src="js/TriPathos.js"></script>
