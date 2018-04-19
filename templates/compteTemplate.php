<?php
	$nom = $_SESSION["nom"];
	$prenom = $_SESSION["prenom"];
	$email = $_SESSION["email"];
	$id_user = $_SESSION["id_user"];
	//$password = $_SESSION["password"];
	$telephone = $_SESSION["telephone"];
	$site = User::getSite($email);
	$fonction = User::getFonction($email);
	$voitures = User::showListeVoitures($id_user);

?>

<div class="profil">
		<h2 class="section-heading text-uppercase"> Mon Profil </h2>
			<form action="index.php?c=user&a=updateAllProfil" method="post">
				<table class="tab-profil">
					 <tr>
							 <td><label for="nom_user">Nom</label></td>
							 <td><input class="form-control champ-non-modifiable" name="nom_user" type="text" value= '<?php print_r($nom);?>'  disabled="disabled"></td>
					 </tr>

					 <tr>
						 <td><label for="prenom_user">Prénom</label></td>
						 <td><input class="form-control champ-non-modifiable" name="prenom_user" type="text" value= '<?php print_r($prenom);?>'  disabled="disabled"></td>
					 </tr>

					 <tr>
						 <td><label for="email">Email</label></td>
						 <td><input class="form-control champ-non-modifiable" name="email" type="email" value= '<?php print_r($email);?>'  disabled="disabled"></td>
					 </tr>

					 <tr>
						 <td><label for="telephone">Téléphone</label></td>
						 <td><input class="form-control" name="telephone" type="text" value= '<?php print_r($telephone);?>' required data-validation-required-message="Entrez un téléphone"></td>
					 </tr>

					 <tr>
						 <td><label for="site">Site</label></td>
						 <td><input class="form-control" name="site" type="text" placeholder="Site : "value= '<?php print_r($site);?>'></td>
					 </tr>

					 <tr>
						 <td><label for="fonction">Fonction</label></td>
						 <td><input class="form-control" name="fonction" type="text" value= '<?php print_r($fonction);?>'></td>
					 </tr>

					<tr><td></td><td></td></tr>
					<tr>
						<td><label for="modele">Modèle</label></td>
						<td><input class="form-control" name="modele" type="text" value= '<?php print_r($voitures[0][1]);?>'></td>
					</tr>

					<tr>
						<td><label for="couleur">Couleur</label></td>
						<td><input class="form-control" name="couleur" type="text" value= '<?php print_r($voitures[0][2]);?>'></td>
					</tr>

					<tr>
						<td><label for="NbPlaces">Nombre de places</label></td>
						<td><input class="form-control" name="NbPlaces" type="text" value= '<?php print_r($voitures[0][3]);?>'></td>
					</tr>

					<tr>
						<td><label for="tailleBagage">Taille des bagages</label></td>
						<td><input class="form-control" name="tailleBagage" type="text" value= '<?php print_r($voitures[0][4]);?>'></td>
					</tr>

				</table>
				<div class="clearfix"></div>
        <div class="col-lg-12 text-center">
          <div id="success"></div>
          <input type="submit" value="Enregistrer" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input>
				</div>
      </form>
		</div>
