
<!--
<script language='javascript' type="text/javascript">
function recolter()
{
	document.getElementById("modèle").request({
		onComplete:function(transport){
			switch(document.getElementById('cléprimaire').value)
			{
				case 'recup_client':
					var tab_construct = modele.responseText.split('|');
					document.getElementById('nomclient').value = tab_info[0];
					document.getElementById('numérocommande').value = tab_info[1];
					document.getElementById('date').value = tab_info[2];			
				break;
				
				case 'recup_modele':
					var tab_info = transport.responseText.split('|');
					document.getElementById('nom').value = tab_info[0];
					document.getElementById('marque').value = tab_info[1];
					document.getElementById('catégorie').value = tab_info[2];
					document.getElementById('nb').value = tab_info[3];	
					document.getElementById('quantité').value = tab_info[4];
					document.getElementById('estportable').value = tab_info[5];	
					document.getElementById('prix').value = tab_info[6];
					document.getElementById('archive').value = tab_info[7];							
				break;
				
					else
					{
						var liste = document.getElementById("ref_client");
						var option = document.createElement("composant");
						option.value = rep;
						option.text = rep;
						liste.add(option);
						liste.selectedIndex = liste.length-1;						
					}
				break;	

				case 'état commande':
					if(transport.responseText=="ok")
						alert("Le modèle est en cours de conception");
					else
						alert("Le modèle est en cours de montage");
				break;					
				
			}	
		}
	});
}
</script>
			<div style="width:100%;display:block;text-align:center;">
			</div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>						
			
			<div style="float:left;width:10%;height:40px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
			<div class="titre_h1">
			<h1>Modèle choisie par le client</h1>
			</div>
			</div>
			<div style="float:left;width:10%;height:40px;"></div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
			
			<div style="float:left;width:10%;height:350px;"></div>
			<div style="float:left;width:80%;height:350px;text-align:center;">
			<form id="modèle" name="modèle" method="post" >
				<div class="titre_h1" style="height:350px;">
					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:35%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#a13638;">
					
						Réf. Client :<br />
						<select id="recup_client" name="recup_client" onchange="document.getElementById('client').value='recup_client';recolter();">
							<option value="0">Choisir client</option>
						
						</select>
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Nom du client :<br />
						<input type="text" id="nom_client" name="nom_client" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Prénom du client :<br />
						<input type="text" id="prenom_client" name="prenom_client" />
					</div>					
					<div style="width:10%;height:75px;float:left;"></div>

			<div class="div_saut_ligne" style="height:5px;">
			</div>

					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:80%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#a13638;">
						<u> Modèle commandé</u><br />
					</div>
					<div style="width:10%;height:50px;float:left;"></div>	
					
					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf. Composants :<br />
						<select id="ref_composants" name="ref_composants" onchange="document.getElementById('param').value='recup_composants';recolter();">
							<option value="0">Réf. composants</option>
						
						</select>
					</div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté en stock :<br />
						<input type="text" id="qte" name="qte" disabled style="text-align:right;" />
					</div>
					

					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Nombre :<br />
						<input type="text" id="nb_commande" name="nb_commande" />
					</div>
					
			</form>
			</div>
			<div style="float:left;width:10%;height:350px;"></div>	

			<div class="div_saut_ligne" style="height:50px;">
			</div>						
			
			<div style="float:left;width:10%;height:25px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
				<div class="titre_h1" style="float:left;height:auto;width:100%;">
					<div style="float:left;width:5%;height:25px;"></div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf.
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté
					</div>
					<div style="width:30%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;overflow:hidden;">
						Composant
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:right;">
					
					
				</div>
			</div>
			<div style="float:left;width:10%;height:auto;"></div>	
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
			 -->


<!-- DUCOUP PHP ET UTILISATION DU PDO -->

<!-- PHP -->
<?php
include 'header.php';
$statement = $connection->prepare('SELECT* FROM  composant (nom , marque , nb , categorie , archive , quantite ) JOIN modele ON id.composant
 = id.models
WHERE id.models IS ');

            foreach ($composants as $composant) {
                $statement->execute([
                    ':nom' => $composant['nom'],
                    ':marque' => $composant['marque'],
                    ':prix' => $composant['prix'],
                    ':nb' => $composant['nb'],
                    ':categorie' => $composant['categorie'],
                    ':archive' => $composant['archive'],
                    ':quantite' => $composant['quantite'],
                ]);
            } 
			?>
			

<!-- HTML  -->
			<div style="width:100%;display:block;text-align:center;">
			</div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>						
			
			<div style="float:left;width:10%;height:40px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
			<div class="titre_h1">
			<h1>Modèle choisie par le client</h1>
			</div>
			</div>
			<div style="float:left;width:10%;height:40px;"></div>
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>
			
			<div style="float:left;width:10%;height:350px;"></div>
			<div style="float:left;width:80%;height:350px;text-align:center;">
			<form id="modèle" name="modèle" method="post" >
				<div class="titre_h1" style="height:350px;">
					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:35%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#a13638;">
					
						Réf. Client :<br />
						<select id="recup_client" name="recup_client" onchange="document.getElementById('client').value='recup_client';recolter();">
							<option value="0">Choisir client</option>
						
						</select>
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Nom du client :<br />
						<input type="text" id="nom_client" name="nom_client" />
					</div>
					<div style="width:25%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Prénom du client :<br />
						<input type="text" id="prenom_client" name="prenom_client" />
					</div>					
					<div style="width:10%;height:75px;float:left;"></div>

			<div class="div_saut_ligne" style="height:5px;">
			</div>

					<div style="width:10%;height:50px;float:left;"></div>
					<div style="width:80%;height:50px;float:left;font-size:20px;font-weight:bold;text-align:left;color:#a13638;">
						<u> Modèle commandé</u><br />
					</div>
					<!-- barre de progression -->
					<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
					<div style="width:10%;height:50px;float:left;"></div>	
					
					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf. Composants :<br />
						<select id="ref_composants" name="ref_composants" onchange="document.getElementById('param').value='recup_composants';recolter();">
							<option value="0">Réf. composants</option>
						
						</select>
					</div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté en stock :<br />
						<input type="text" id="qte" name="qte" disabled style="text-align:right;" />
					</div>
					

					<div style="width:10%;height:75px;float:left;"></div>
					<div style="width:15%;height:75px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Nombre :<br />
						<input type="text" id="nb_commande" name="nb_commande" />
					</div>
					
			</form>
			</div>
			<div style="float:left;width:10%;height:350px;"></div>	

			<div class="div_saut_ligne" style="height:50px;">
			</div>						
			
			<div style="float:left;width:10%;height:25px;"></div>
			<div style="float:left;width:80%;height:auto;text-align:center;">
				<div class="titre_h1" style="float:left;height:auto;width:100%;">
					<div style="float:left;width:5%;height:25px;"></div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Réf.
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;">
						Qté
					</div>
					<div style="width:30%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:left;overflow:hidden;">
						Composant
					</div>
					<div style="width:15%;height:25px;float:left;font-size:16px;font-weight:bold;text-align:right;">
					
					
				</div>
			</div>
			<div style="float:left;width:10%;height:auto;"></div>	
			
			<div class="div_saut_ligne" style="height:30px;">
			</div>

<?php
include 'page/footer.php';