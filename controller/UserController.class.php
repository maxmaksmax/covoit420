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

	public function index($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}

	public function deconnection($request) {
		session_unset();
		if (isset($_SESSION)) { session_destroy();}

		$view = new View($this, 'index');
		$view->render();
	}

	public function updateAllProfil($request) {
		$email = $request->read('email');
		$nom = $request->read('nom');
		$prenom = $request->read('prenom');
		$site = $request->read('site');
		$fonction = $request->read('fonction');
		$telephone = $request->read('telephone');


		$newProfil = User::updateAllProfil($email);
		print_r($newProfil);
		$view = new UserView($this, 'compte');
		$view->render();
	}

	//FONCTIONS TRAJETS

	public function creationVoiture($request) {
		$view = new UserView($this, 'creationVoiture');
		$view->render();
	}

	public function validateCreationVoiture($request) {
		$modele = $request->read('modele');
		$couleur = $request->read('couleur');
		$taille_bagage = $request->read('taille_bagage');
		$nombre_places = $request->read('nombre_places');


		$voiture = User::createVoiture($modele, $couleur, $taille_bagage, $nombre_places);
		print_r($voiture);
		$view = new UserView($this, 'compte');
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

		$date_depart_heure = $date . ' ' . $heure_depart . ':00';
		$date_arrivee_heure = $date . ' ' . $heure_arrivee . ':00';

		$id_voiture = User::getVoitureID($_SESSION['id_user']);
		$trajets = User::createTrajet($_SESSION['id_user'], $id_voiture, $lieu_depart, $lieu_arrivee, $date_depart_heure, $date_arrivee_heure, $nombre_places);
		$view = new UserView($this, 'validateRechercheTrajet');
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
		$view -> setArg('trajets', $trajets);
		$view->render();

	}

	public function validateInscriptionATrajet($request) {
		$id_trajet = $request->read('id_trajet');
		if (!isset($_SESSION)) { session_start(); }
		$trajet = User::inscriptionTrajet($_SESSION['id_user'], $id_trajet);
		$view = new UserView($this, 'historiqueTrajets');
		$view->render();
	}


	//FONCTIONS COMPTE

	public function compte($request) {
		$view = new UserView($this, 'compte');
		$view->render();
	}
	public function statistiques($request) {
	$view = new UserView($this, 'statistiques');
	$view->render();
	}
	public function historiqueTrajets($request) {
		if (!isset($_SESSION)) { session_start(); }
		$trajets = User::showMesTrajets($_SESSION['id_user']);
		$view = new UserView($this, 'historiqueTrajets');
		$view -> setArg('mesTrajets', $trajets);
		$view->render();
	}
	public function futurTrajets($request){
		if (!isset($_SESSION)) { session_start(); }
		$trajets = User::showMesFuturTrajets($_SESSION['id_user']);
		$view = new UserView($this, 'futurTrajets');
		$view -> setArg('mesFuturTrajets', $trajets);
		$view -> render();
	}
}

?>
