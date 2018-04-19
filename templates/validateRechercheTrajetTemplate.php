<?php
	//$trajets = User::showMesFutursTrajets($_SESSION['id_user']);
	$trajetsRecherches = $this->getArg('trajetsRecherches');
	$id_user = $_SESSION['id_user'];
	
	//$trajetsR = User::showTrajet($_SESSION['id_user']);


?>

<section class="content-section" id="portfolio">

	<h2 class="section-heading text-uppercase">Trajets recherchés</h2>
		<table>
			<caption>Trajets recherchés</caption>

			<tr>
				<th>Départ</th>
				<th>Arrivée</th>
				<th>Heure de départ</th>
				<th>Participants</th>
				<th>Places disponibles</th>
				<th></th>
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
