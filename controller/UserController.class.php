<?php

class UserController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
		
    }
	
	//FONCTIONS USER
	
	public function defaultAction($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}
	
	public function inscription($request) {
		$view = new View($this, 'inscription');
		$view->render();
	}
	
	public function index($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}	
	
	public function deconnection($request) {
		session_destroy();
		$view = new AnonymousView($this, 'index');
		$view->render();
	}
	
	//FONCTIONS TRAJETS 
	
	public function compte($request) {
		$view = new UserView($this, 'compte');
		$view->render();
	}
	
	public function creationVoiture($request) {
		$view = new UserView($this, 'creationVoiture');
		$view->render();
	}
	
	public function statistiques($request) {
	$view = new UserView($this, 'statistiques');
	$view->render();
	}
	
	public function historiqueTrajets($request) {
		$trajets = User::voirMesTrajets($_SESSION['id']);
		$view = new UserView($this, 'historiqueTrajets');
		$view -> setArg('mesTrajets', $trajets);
		$view->render();
	}
	
	
	public function creationTrajet($request) {
		$view = new UserView($this, 'creationTrajet');
		$view->render();
	}
	
	public function validateCreationTrajet($request) {
		$date = $request->read('date');
		$heure_depart = $request->read('heure_depart');
		$heure_arrivee = $request->read('heure_arrivee');
		$lieu_depart = $request->read('lieu_depart');
		$lieu_arrivee = $request->read('lieu_arrivee');
		$nombre_places = $request->read('nombre_places');
		$commentaire = $request->read('commentaire');
		
		$dateDepartHeure = $date . ' ' . $heure_depart . ':00';
		$dateArriveeHeure = $date . ' ' . $heure_arrivee . ':00';
		
		$trajets = User::createTrajet($lieu_depart, $lieu_arrivee, $date_depart_heure, $date_arrivee_heure, $nombre_places, $commentaire);
		print_r($trajets);
		$view = new UserView($this, 'validateCreationTrajet');
		$view->render();
	}
	
	public function rechercheTrajet($request) {
		$view = new UserView($this, 'rechercheTrajet');
		$view->render();
	}

	public function validateRechercheTrajet($request) {
		$date = $request->read('date');
		$heure = $request->read('heure');
		$lieu_depart = $request->read('lieu_depart');
		$lieu_arrivee = $request->read('lieu_arrivee');
		$date_heure = $date . ' ' . $heure . ':00';
		$trajets = User::showTrajet($lieu_depart, $lieu_arrivee, $date_heure);
		$nbTrajets = sizeof($trajets);
			
		
		$view = new UserView($this, 'validateRechercheTrajet');
		// print_r($trajets[0]['nom_trajet']); //marche aussi avec [0]
		// print_r($trajets[0]['lieu_depart']);	
		// print_r($trajets[0]['lieu_arrivee']);	
		// print_r($trajets[0]['nombre_places']);	
		// print_r($trajets[0]['heure_depart']);
	}
	
}

?>