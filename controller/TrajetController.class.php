<?php

class TrajetController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
    }
	
	public function defaultAction($request) {
		$view = new TrajetView($this, 'mesTrajets'); //drtfyguijoploiuhytfrdfyghujiokpiuhytfyuiho mesTrajets?????
		$view->render();
	}
	
	public function statistiques($request) {
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	
	public function historiqueTrajets($request) {
		$view = new TrajetView($this, 'historique');
		$view->render();
	}
	
	public function creationTrajet($request) {
		$date = $request->read('date');
		$heure_depart = $request->read('heure_depart');
		$heure_arrivee = $request->read('heure_arrivee');
		$lieu_depart = $request->read('lieu_depart');
		$lieu_arrivee = $request->read('lieu_arrivee');
		$nombre_places = $request->read('nombre_places');
		$commentaire = $request->read('commentaire');
		
		$dateDepartHeure = $date . ' ' . $heure_depart . ':00';
		$dateArriveeHeure = $date . ' ' . $heure_arrivee . ':00';
		
		$trajets = Trajet::createTrajet($lieu_depart, $lieu_arrivee, $date_depart_heure, $date_arrivee_heure, $nombre_places, $commentaire);
		print_r($trajets);
		$view = new TrajetView($this, 'creationTrajet');
		$view->render();
	}
	
	public function rechercheTrajet($request) {
		$date = $request->read('date');
		$heure = $request->read('heure');
		$lieu_depart = $request->read('lieu_depart');
		$lieu_arrivee = $request->read('lieu_arrivee');
		$date_heure = $date . ' ' . $heure . ':00'; // pour être au format '2018-04-07 22:30:00';
		$trajets = Trajet::showTrajet($lieu_depart, $lieu_arrivee, $date_heure);
		$nbTrajets = sizeof($trajets);
			
		
		$view = new TrajetView($this, 'rechercheTrajet');
		// print_r($trajets[0]['nom_trajet']); //marche aussi avec [0]
		// print_r($trajets[0]['lieu_depart']);	
		// print_r($trajets[0]['lieu_arrivee']);	
		// print_r($trajets[0]['nombre_places']);	
		// print_r($trajets[0]['heure_depart']);
	}
}

		






?>