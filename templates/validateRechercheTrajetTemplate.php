<?php
	$trajets = User::showMesFutursTrajets($_SESSION['id_user']);
	$trajetsRecherchés = $this->getArg('trajetsRecherchés');
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
			</tr>
			
			<?php
				$nbTrajets = sizeof($trajetsRecherchés);
				for ($i=0; $i<$nbTrajets; $i++){ ?>
			
			
			<tr>
				<td><?php print_r($trajetsRecherchés[$i]['lieu_depart']);?></td>
				<td><?php print_r($trajetsRecherchés[$i]['lieu_arrivee']);?></td>
				<td><?php print_r($trajetsRecherchés[$i]['heure_depart']);?></td>
		
					<?php
					// affiche les participants
					$participants = User::showParticipantsTrajet($trajetsRecherchés[$i]['id_trajet']);
					$nbParticipants = sizeof($participants);
					for ($j=0; $j<$nbParticipants; $j++){ ?>

				<td><?php print_r($participants[$j]['nom_user'].' '.$participants[$j]['prenom_user']);?>
				

					<?php }
					?>
				<td><?php print_r($trajetsRecherchés[$i]['nombre_places']-$nbParticipants);?></td>
				
				
				<td><?php // cache le bouton "m'incrire" si l'utilisateur est déjà participant
				
					// if(User::showParticipantsTrajet($trajetsRecherchés[$i]['id_trajet'])['id_user'] == $_SESSION['id_user']){
						// echo("style=\"visibility:hidden\" ");
					// }
					// A MODIFIER AVEC UNE FONCTION QUI VERIFIE SI LE USER EST PARTICIPANT, ET NON CREATEUR
					?> </td>
				<td>
					<form action="index.php?c=user&a=validateRechercheTrajet" method="post" >
						<p><input type="submit" value="M'inscrire" name="boutonInscription" class="btn btn-primary btn-xl text-uppercase"></input></p>
					</form>
				</td>
			</tr>			
			
		</table>
					
					
					
					
					
					
	
	
</section>
