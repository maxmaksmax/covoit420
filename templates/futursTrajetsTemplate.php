<?php
	$mesTrajets = $this->getArg('mesFuturTrajets');

?>

<section class="content-section" id="portfolio">
	<section id="trajets">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Mes trajets en cours</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="container">
				<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item">
								<p class="text" name="nom_trajet" id="nom_trajet">Lieu de départ</p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="nom_trajet" id="nom_trajet">Lieu d'arrivée</p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="nom_trajet" id="nom_trajet">Heure du départ</p>
							</li>
						</ul>
				<?php
					$nbTrajets = sizeof($mesTrajets);
					for ($i=0; $i<$nbTrajets; $i++){ ?>
						<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item">
								<p class="text" name="lieu_depart"><?php print_r($mesTrajets[$i]['lieu_depart']);?></p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="lieu_arrivee"><?php print_r($mesTrajets[$i]['lieu_arrivee']);?></p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="heure_depart"><?php print_r($mesTrajets[$i]['heure_depart']);?></p>
							</li>
						</ul>
						<?php
					}?>
				</div>
			</div>
			</div>
		</div>
	</section>
</section>
