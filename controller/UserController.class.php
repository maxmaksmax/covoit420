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
		$email = $_SESSION['email'];
		// $nom = $request->read('nom_user');
		// $prenom = $request->read('prenom_user');
		$site = $request->read('site');
		$fonction = $request->read('fonction');
		//$password = $request->read('password');
		$telephone = $request->read('telephone');
		$modele =  $request->read('modele');
		$couleur =  $request->read('couleur');
		$nb_places =  $request->read('nb_places');
		$taille_bagages =  $request->read('taille_bagages');


		$newSite = User::updateSite($email, $site);
		$newFonction = User::updateFonction($email, $fonction);
		$newTelephone = User::updateTelephone($email, $telephone );
		$newModele = User::updateModele($email, $modele );
		$newCouleur = User::updateCouleur($email, $couleur );
		$newNbPlaces = User::updateNbPlaces($email, $nb_places );
		$newTailleBagages = User::updateTailleBagages($email, $taille_bagages);

		$view = new UserView($this, 'compte');
		$view->render();
	}

	//FONCTIONS VOITURE

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

	//FONCTIONS TRAJETS

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
		$trajetsRecherches = User::showTrajet($lieu_depart, $lieu_arrivee, $date_heure);
		$nbTrajets = sizeof($trajetsRecherches);

		$view = new UserView($this, 'validateRechercheTrajet');
		$view -> setArg('trajetsRecherches', $trajetsRecherches);
		$view->render();

	}

	public function validateInscriptionATrajet($request) {
		$id_trajet = $request->read('id_trajet_recherche');
		// $liste_trajets = $request->read('liste_trajets_recherches');

		if (!isset($_SESSION)) { session_start(); }
		$trajet = User::inscriptionTrajet($_SESSION['id_user'], $id_trajet);
		$liste_trajets = User::showTrajetWithParticipant($id_trajet);
		$view = new UserView($this, 'validateRechercheTrajet');
		$view -> setArg('trajetsRecherches', $liste_trajets);
		$view->render();
	}

	public function validateDesinscriptionATrajet($request) {
		$id_trajet = $request->read('id_trajet_recherche');
		$liste_trajets = $request->read('liste_trajets_recherches');

		if (!isset($_SESSION)) { session_start(); }
		$trajet = User::desinscriptionTrajet($_SESSION['id_user'], $id_trajet);

		$view = new UserView($this, 'validateRechercheTrajet');
		$view -> setArg('trajetsRecherches', $liste_trajets);
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
	public function futursTrajets($request){
		if (!isset($_SESSION)) { session_start(); }
		$trajets = User::showMesFutursTrajets($_SESSION['id_user']);
		$view = new UserView($this, 'futursTrajets');
		$view -> setArg('mesFutursTrajets', $trajets);
		$view -> render();
	}
}

?>
