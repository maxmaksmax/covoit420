
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

			<form action="index.php?c=user&a=update" method="post">
              <div class="row">
                <div class="col-md-6" class="champ-non-modifiable">
                  <div class="form-group">
                   <input class="form-control" name="nom_user" type="text" value= '<?php print_r($nom);?>'  disabled="disabled">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                   <input class="form-control" name="nom_user" type="text" value= '<?php print_r($prenom);?>'  disabled="disabled"> 
				   <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group" >
                    <input class="form-control" class="champ-non-modifiable" name="nom_user" type="text" value= '<?php print_r($email);?>'  disabled="disabled">
					<p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="nom_user" type="text" value= '<?php print_r($telephone);?>' required data-validation-required-message="Entrez un téléphone">
					<p class="help-block text-danger"></p>
                  </div>
                </div>
				<div class="col-md-6">
                   <div class="form-group">
                    <input class="form-control" name="nom_user" type="text" value= '<?php print_r($site);?>' required data-validation-required-message="Entrez un site">
					<p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group" >
                   <input class="form-control champ-non-modifiable" name="nom_user" type="text" value= '<?php print_r($voitures[0][0].' '.$voitures[0][1]);?>'  disabled="disabled">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="nom_user" type="text" value= '<?php print_r($fonction);?>' required data-validation-required-message="Entrez une fonction">
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

