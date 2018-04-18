
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

	  
				<div class="container">
						<form action="index.php?c=user&a=update" method="post" >
						<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item"> 
								<p class="text" name="nom" id="nom"><?php print_r($nom);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="prenom"><?php print_r($prenom);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="email"><?php print_r($email);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="telephone"><?php print_r($telephone);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="voitures"><?php print_r($voitures)[0];?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="site"><?php print_r($site);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="fonction"><?php print_r($fonction);?></p>
							</li>
							<li class="list-inline-item"> 
								<input type="submit" value="Enregistrer" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input></a> 	
	<!-- Sert a garder l'id trajet-->
							</li>
						</ul> 
						</form>

				</div>
<!--
<section class="content-section" id="portfolio">
 
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Ajouter une voiture</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="index.php?c=trajet&a=validateCreationVoiture" method="post" >
              <div class="row">
			  
			<div class="col-md-6">
				  <div class="form-group">
                    <input class="form-control" id="modele" name="modele" type="text" placeholder="Modèle" required data-validation-required-message="Sélectionner un modèle">
                    <p class="help-block text-danger"></p>
                  </div>
                  
                  <div class="form-group">
                    <input class="form-control" id="couleur" name="couleur" type="text" placeholder="Couleur" required data-validation-required-message="Sélectionner une couleur">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="taille_bagage" name="taille_bagage" type="text" placeholder="Taille de bagages" required data-validation-required-message="Sélectionner une taille de coffre">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="nombre_places" name="nombre_places" type="text" placeholder="Nombre de places" required data-validation-required-message="Sélectionner le nombre de voyageurs que peut contenir votre voiture">
                    <p class="help-block text-danger"></p>
                </div>
			</div>

                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
				
                  <div id="success"></div>
                  <input type="submit" value="Valider" name="creationVoiture" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</section>
-->