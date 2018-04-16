<?php

class Trajet extends Model {


	public static function createTrajet($id_trajet, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nombre_places){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
			

		$trajet = Model::executeRequest('CreateTrajet';, array(':id_trajet' => $id_trajet, ':id_voiture' => $id_voiture, ':lieu_depart' => $lieu_depart, 
			':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart, ':heure_arrivee' => $heure_arrivee, ':nombre_places' => $nombre_places));
			
		return $trajet;
	}
	
	
	public static function showTrajet($lieu_depart, $lieu_arrivee, $heure_depart){
			
		$trajet = Model::executeRequest('ShowTrajet', array(':lieu_depart' => $lieu_depart, ':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart));
		$result = $trajet->fetchAll();
		return $result;
	}
	
	public static function enrollUserATrajet($id_user, $id_trajet){
		
	$trajet = Model::executeRequest('EnrollUserATrajet', array(':id_user' => $id_user, ':id_trajet' => $id_trajet));
	$result = $trajet->fetchAll();
	return $result;
	}
   
}

?>