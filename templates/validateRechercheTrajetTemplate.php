<?php
	$trajets = User::showMesFutursTrajets($_SESSION['id_user']);
	$trajetsRecherchés = $this->getArg('trajetsRecherchés');
	//$trajetsR = User::showTrajet($_SESSION['id_user']);


?>

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
					$nbTrajets = sizeof($trajetsRecherchés);
					for ($i=0; $i<$nbTrajets; $i++){ ?>
						<form action="index.php?c=user&a=validateRechercheTrajet" method="post" >
						<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item">
								<p class="text" name="lieu_depart"><?php print_r($trajetsRecherchés[$i]['lieu_depart']);?></p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="lieu_arrivee"><?php print_r($trajetsRecherchés[$i]['lieu_arrivee']);?></p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="heure_depart"><?php print_r($trajetsRecherchés[$i]['heure_depart']);?></p>
							</li>
							<li class="list-inline-item">
								<p class="text" name="nombre_places"><?php print_r($trajetsRecherchés[$i]['nombre_places']);?></p>
							</li>

							<?php
								$participants = User::showParticipantsTrajet($trajetsRecherchés[$i]['id_trajet']);
								$nbParticipants = sizeof($participants);
								for ($j=0; $j<$nbParticipants; $j++){ ?>

								<li class="list-inline-item">
								<p class="text" name="nombre_places"><?php print_r($participants[$j]['nom_user'].' '.$participants[$j]['prenom_user']);?></p>
								</li>

								<?php }
							?>

							<li class="list-inline-item"
								<?php

									// cache le bouton "m'incrire" si l'utilisateur est déjà participant
									// if(User::showParticipantsTrajet($trajetsRecherchés[$i]['id_trajet'])['id_user'] == $_SESSION['id_user']){
										// echo("style=\"visibility:hidden\" ");
									// }
									// A MODIFIER AVEC UNE FONCTION QUI VERIFIE SI LE USER EST PARTICIPANT, ET NON CREATEUR
								?>
							>
								<input type="submit" value="M'inscrire" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input>
							</li>
						</ul>
						</form>
							<?php	} ?>
				</div>
			</div>
			</div>
		</div>
	</section>
</section>
