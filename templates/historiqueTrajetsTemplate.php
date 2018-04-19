<?php
	$mesTrajetsPasses = User::showMesTrajetsPasses($_SESSION['id_user']); 
	//id_trajet, id_user, lieu_depart, lieu_arrivee, heure_depart, heure_arrivee, commentaire
?>

<section class="content-section" id="portfolio">

	<h2 class="section-heading text-uppercase">Historique de mes trajets</h2>
		<table>

			<tr>
				<th>Lieu de départ</th>
				<th>Lieu d'arrivée</th>
				<th>Heure de départ</th>
				<th>Heure d'arrivée</th>
				<th>Conducteur</th>
				
			</tr>

			<?php
				$nbTrajets = sizeof($mesTrajetsPasses);
				for ($i=0; $i<$nbTrajets; $i++){ ?>


			<tr>
				<td><?php print_r($mesTrajetsPasses[$i]['lieu_depart']);?></td>
				<td><?php print_r($mesTrajetsPasses[$i]['lieu_arrivee']);?></td>
				<td><?php print_r($mesTrajetsPasses[$i]['heure_depart']);?></td>
				<td><?php print_r($mesTrajetsPasses[$i]['heure_arrivee']);?></td>
				<td><?php print_r($mesTrajetsPasses[$i]['id_user']);?></td>
			</tr>
			<?php } ?>
		</table>


</section>

