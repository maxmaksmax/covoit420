<?php
	$trajets = $this->getArg('mesTrajets');

?>
 <link href="css/menuAgency.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
	  
<section class="content-section" id="portfolio">
	<section id="trajets">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Trajets recherchés</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="container">
				<?php 
					$nbTrajets = sizeof($trajets);
					for ($i=0; $i<$nbTrajets; $i++){ ?>
						<form action="index.php?c=user&a=validateRechercheTrajet" method="post" >
						<ul class="list-inline mb-2" style="text-align: center;">
							<li class;;="list-inline-item"> 
								<p class="text" name="id_trajet" id="id_trajet"><?php print_r($trajets[$i]['id_trajet']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="lieu_depart"><?php print_r($trajets[$i]['lieu_depart']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="lieu_arrivee"><?php print_r($trajets[$i]['lieu_arrivee']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="heure_depart"><?php print_r($trajets[$i]['heure_depart']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="nombre_places"><?php print_r($trajets[$i]['nombre_places']);?></p>
							</li>
							<li class="list-inline-item"> 
								<input type="submit" value="M'inscrire" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input></a> 	
								<input value="<?php print_r($trajets[$i]['id_trajet'])?>" name="id_trajet" style="visibility: hidden;"></input></a> 	<!-- Sert a garder l'id trajet-->
							</li>
						</ul> 
						</form>
						<?php 
					}?>
				</div>
			</div>
			</div>
		</div>
	</section>
</section>