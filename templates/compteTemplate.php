
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
              <div class="row">
                <div class="col-md-6" >
                  <div class="form-group">
										<label class="control-label col-sm-3" for="nom_user">Nom</label>
                   <input class="form-control champ-non-modifiable" name="nom_user" type="text" value= '<?php print_r($nom);?>'  disabled="disabled">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
										<label class="control-label col-sm-3" for="prenom_user">Prénom</label>
                   <input class="form-control champ-non-modifiable" name="prenom_user" type="text" value= '<?php print_r($prenom);?>'  disabled="disabled">
				   <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group" >
										 <label class="control-label col-sm-3" for="email">Email</label>
                    <input class="form-control champ-non-modifiable" name="email" type="email" value= '<?php print_r($email);?>'  disabled="disabled">
					<p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
										<label class="control-label col-sm-3" for="telephone">Téléphone</label>
                    <input class="form-control" name="telephone" type="text" value= '<?php print_r($telephone);?>' required data-validation-required-message="Entrez un téléphone">
					<p class="help-block text-danger"></p>
                  </div>
                </div>
								<div class="col-md-6">
                   <div class="form-group">
										 <label class="control-label col-sm-3" for="site">Site</label>
                    <input class="form-control" name="site" type="text" value= '<?php print_r($site);?>' required data-validation-required-message="Entrez un site">
					<p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
										<label class="control-label col-sm-3" for="fonction">Fonction</label>
                    <input class="form-control" name="fonction" type="text" value= '<?php print_r($fonction);?>' required data-validation-required-message="Entrez une fonction">
					<p class="help-block text-danger"></p>
                  </div>
                </div>
								<br>
								<div class="col-md-6">
									<div class="form-group" >
										<label class="control-label col-sm-3" for="modele">Modèle de voiture</label>
	                 <input class="col-sm-3 form-control champ-non-modifiable" name="modele" type="text" value= '<?php print_r($voitures[0][1]);?>'  disabled="disabled">
	         <p class="help-block text-danger"></p>
                  </div>
									<div class="form-group" >
										<label class="control-label col-sm-3" for="couleur">Couleur</label>
	                 <input class="form-control champ-non-modifiable" name="couleur" type="text" value= '<?php print_r($voitures[0][2]);?>'  disabled="disabled">
	         <p class="help-block text-danger"></p>
                  </div>
									<div class="form-group" >
										<label class="control-label col-sm-3" for="NbPlaces">Nombre de places</label>
	                 <input class="form-control champ-non-modifiable" name="NbPlaces" type="text" value= '<?php print_r($voitures[0][3]);?>'  disabled="disabled">
	         <p class="help-block text-danger"></p>
                  </div>
									<div class="form-group" >
										<label class="control-label col-sm-3" for="tailleBagage">Couleur</label>
	                 <input class="form-control champ-non-modifiable" name="tailleBagage" type="text" value= '<?php print_r($voitures[0][4]);?>'  disabled="disabled">
	         <p class="help-block text-danger"></p>
                  </div>
								</div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input type="submit" value="Enregistrer" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
					</div>
