{include file='header.tpl'}

  {if (empty($ConnectedUser))}
    <h2> Necessite d'etre connecté </h2>
  {else}
  <form action="/ModifUserBdd" method="POST">
		<table>
			<tr>
				<td>
						<label for="nom"> Nom <span class="formStar">*</span> :</label>
				</td>
				<td>
						<input required placeholder="Nom" value="{$ConnectedUser->nom}" name="Nom">
				</td>
		  </tr>
			<td>
					<label for="prenom"> Prenom <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input requiredrequired placeholder="Prenom" value="{$ConnectedUser->prenom}" name="Prenom">
			</td>
		</tr>
		<tr>
	  	<td>
    		<label for="email">Mail <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input required type="email" placeholder="Enter your email" value="{$ConnectedUser->email}" name="email">
	 		</td>
		</tr>
	</br>	

		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>

  {/if}

{include file='errorMsg.tpl'}
{include file='footer.tpl'}
