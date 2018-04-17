
<section class="content-section" id="portfolio">
 
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Proposer un trajet</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="index.php?c=user&a=validateCreationTrajet" method="post"  >
              <div class="row">
			  
			<div class="col-md-6">
                 <div class="form-group">
                    <input class="form-control" id="lieu_depart" name="lieu_depart" type="text" placeholder="Lieu de départ" required data-validation-required-message="Selectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="lieu_arrivee" name="lieu_arrivee" type="text" placeholder="Lieu d'arrivée" required data-validation-required-message="Selectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="nombre_places" name="nombre_places" type="text" placeholder="Nombre de places disponibles" required data-validation-required-message="Selectionner un nombre de places disponibles">
                    <p class="help-block text-danger"></p>
                </div>
			</div>
			
            <div class="col-md-6">
				<div class="form-group">
                    <input class="form-control" id="date" name="date" type="date" placeholder="Date" required data-validation-required-message="Date">
                    <p class="help-block text-danger"></p>
                </div>
				<div class="form-group">
                    <input class="form-control" id="heure_depart" name="heure_depart" type="text" placeholder="Heure de départ au format hh:mm" required data-validation-required-message="Heure de départ">
                    <p class="help-block text-danger"></p>
                </div>
				<div class="form-group">
                    <input class="form-control" id="heure_arrivee" name="heure_arrivee" type="text" placeholder="Heure d'arrivée au format hh:mm" required data-validation-required-message="Heure d'arrivée">
                    <p class="help-block text-danger"></p>
                </div>              
				<div class="form-group">
					<select name="voiture">
						<?php for($i=0; $i < sizeof($reponse); $i++){ ?>
							<option value="<?php echo $reponse[$i][0]?>";>
							<?php echo $reponse[$i][0]; ?> </option>
						<?php
							} 
						?>
					</select>
                    <p class="help-block text-danger"></p>
                </div>
			</div>
			
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
				
                  <div id="success"></div>
                  <input type="submit" value="Créer un trajet" name="creationTrajet" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</section>
	