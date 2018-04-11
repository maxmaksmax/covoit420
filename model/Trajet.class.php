<?php

 
class Trajet extends Model {


	public static function create($id_trajet, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nombre_places){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
			

		$trajet = Model::executeRequest('CreateTrajet';, array(':id_trajet' => $id_trajet, ':id_voiture' => $id_voiture, ':lieu_depart' => $lieu_depart, 
			':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart, ':heure_arrivee' => $heure_arrivee, ':nombre_places' => $nombre_places));
			
		return $trajet;
	}
	
	
	public static function afficherTrajet($lieu_depart, $lieu_arrivee, $heure_depart){
			
		$trajet = Model::executeRequest('AfficherTrajet', array(':lieu_depart' => $lieu_depart, ':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart));
		$result = $trajet->fetchAll();
		return $result;
	}
	
   
}

?>