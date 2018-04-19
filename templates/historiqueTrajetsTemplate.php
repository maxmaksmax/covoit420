<?php
	$mesTrajets = $this->getArg('mesTrajets');
	$trajetsRecherches = $this->getArg('trajetsRecherches');

?>

<section class="content-section" id="portfolio">

	<h2 class="section-heading text-uppercase">Historique de mes trajets</h2>
		<table>

			<tr>
				<th>Lieu de départ</th>
				<th>Lieu d'arrivée</th>
				<th>Heure de départ</th>
				<th>Participants</th>
			</tr>

			<?php
				$nbTrajets = sizeof($trajetsRecherches);
				for ($i=0; $i<$nbTrajets; $i++){ ?>


			<tr>
				<td><?php print_r($trajetsRecherches[$i]['lieu_depart']);?></td>
				<td><?php print_r($trajetsRecherches[$i]['lieu_arrivee']);?></td>
				<td><?php print_r($trajetsRecherches[$i]['heure_depart']);?></td>
				<td>
					<?php
					// affiche les participants
					$participants = User::showParticipantsTrajet($trajetsRecherches[$i]['id_trajet']);
					$nbParticipants = sizeof($participants);
					for ($j=0; $j<$nbParticipants; $j++){ ?>

				<?php print_r($participants[$j]['nom_user']);?>


					<?php }
					?></td>

				<td><?php print_r($trajetsRecherches[$i]['nombre_places']-$nbParticipants);?></td>

				<td>

						<?php // cache le bouton "m'incrire" si l'utilisateur est déjà participant
						if( array_search($id_user, array_column($participants, 'id_user')) === FALSE ){ ?>

					<form action="index.php?c=user&a=validateInscriptionATrajet" method="post" >
						<p><input type="submit" value="M'inscrire" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input>
						   <input value="<?php print_r($trajetsRecherches[$i]['id_trajet'])?>" name="id_trajet_recherche" style="visibility: hidden;"></input>
						</p>
					</form>
						<?php } else{ ?>

					<form action="index.php?c=user&a=validateDesinscriptionATrajet" method="post" >
						<p><input type="submit" value="Me désinscrire" name="boutonInscription"  class="btn btn-primary btn-xl text-uppercase"></input>
					       <input value="<?php print_r($trajetsRecherches[$i]['id_trajet'])?>" name="id_trajet_recherche" style="visibility: hidden;"></input>
					       <input value="<?php print_r($trajetsRecherches)?>" name="liste_trajets_recherches" style="visibility: hidden;"></input>
						</p>
					</form>
						<?php }?>

				</td>
			</tr>
		<?php } ?>
		</table>


</section>




<section class="content-section" id="portfolio">
	<section id="trajets">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Historique de mes trajets</h2>
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
