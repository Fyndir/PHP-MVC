{include file='header.tpl'}
{if (empty($ConnectedUser))}
  <h2> Necessite d'etre connecté </h2>
{else}
<h2>recherches des pathologies par mots clefs </h2>
<form id="SearchForm">
  <span class="OneLine">
    <label for="keywordschoise"> keywords </label>
    <input type="text" id="keywordschoise">
    <button type="submit" >recherche</button>
  </span>
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

<script type="module" src="/js/SearchPatho.js"></script>
{/if}
{include file='errorMsg.tpl'}
{include file='footer.tpl'}
