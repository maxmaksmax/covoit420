<?php
class User extends Model {


	////////////////////////////////////
	//            USER                //
	////////////////////////////////////
	
	
	public static function isEmailUsed($email){
		$user = Model::executeRequest('CountUsersWithEmail', array(':email' => $email));
		foreach($user as $u){
			if($u['count(*)'] == 0){
				return false;
			}
			else{
				return true;
			}
		}
	}

  public static function createUser($email, $prenom, $nom, $admin=0, $telephone=null, $password){

		if (self::isEmailUsed($email)){
			echo 'Email déjà utilisé !';
			exit();
		}
		else{
			$user = Model::executeRequest('CreateUser', array('password' => $password, 'email' => $email, 'nom_user' => $nom, 'prenom_user' => $prenom, 'est_admin' => $admin, 'telephone' => $telephone));
		}
		return $user;
	}

  public static function getPassword($email){
		$stmt = Model::executeRequest('PrintPassword', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getID($email){
		$stmt = Model::executeRequest('PrintID', array('email' => $email)) -> fetch()[0];
		return $stmt;
	}
	
	public static function getNom($email){
		$stmt = Model::executeRequest('PrintNom', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getPrenom($email){
		$stmt = Model::executeRequest('PrintPrenom', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getTelephone($email){
		$stmt = Model::executeRequest('PrintTelephone', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updatePassword($email){
		$stmt = Model::executeRequest('UpdatePassword', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateNom($email){
		$stmt = Model::executeRequest('UpdateNom', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updatePrenom($email){
		$stmt = Model::executeRequest('UpdatePrenom', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateTelephone($email){
		$stmt = Model::executeRequest('UpdatTelephone', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateSite($email){
		$stmt = Model::executeRequest('UpdateSite', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateFonction($email){
		$stmt = Model::executeRequest('UpdateFonction', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}
	
	public static function updateAllProfil($email, $nom, $prenom, $telephone, $site, $fonction){
		$newProfil = Model::executeRequest('UpdateAllProfil', array('email'=>$email, 'nom' => $nom, 'prenom' => $prenom,'telephone' => $telephone, 'site' => $site, 'fonction' => $fonction )) -> fetch()[0];
		if($newProfil == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $newProfil;
		}
	}
	
    ////////////////////////////////////
	//            VOITURE             //
	////////////////////////////////////

	public static function createVoiture($id_user, $modele, $couleur, $taille_bagage, $nombre_places){ 

		$voiture = Model::executeRequest('CreateVoiture', array('id_user' => $id_user, 'modele' => $modele, 'taille_bagage' => $taille_bagage,
			'couleur' => $couleur, 'nombre_places' => $nombre_places));
		return $voiture;
	}

	public static function showListeVoitures($id_user){

	$voitures = Model::executeRequest('ShowListeVoitures', array('id_user' => $id_user));
	$result = $voitures->fetchAll();
	return $result;
	}
	
	////////////////////////////////////
	//            TRAJETS             //
	////////////////////////////////////
	
	public static function UpdateNbTrajet($email){
		$stmt = Model::executeRequest('UpdateNbTrajet', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}
	
	public static function createTrajet($id_user, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nombre_places){ 

		$trajet = Model::executeRequest('CreateTrajet', array('id_user' => $id_user, 'id_voiture' => $id_voiture, 'lieu_depart' => $lieu_depart,
			'lieu_arrivee' => $lieu_arrivee, 'heure_depart' => $heure_depart, 'heure_arrivee' => $heure_arrivee, 'nombre_places' => $nombre_places));
		return $trajet;
	}

	public static function showTrajet($lieu_depart, $lieu_arrivee, $heure_depart){

		$trajet = Model::executeRequest('ShowTrajet', array('lieu_depart' => $lieu_depart, 'lieu_arrivee' => $lieu_arrivee, 'heure_depart' => $heure_depart));
		$result = $trajet->fetchAll();
		return $result;
	}

	public static function showMesTrajets($id_user){

		$trajet = Model::executeRequest('ShowMesTrajets', array('id_user' => $id_user));
		$result = $trajet->fetchAll();
		return $result;
	}

	public static function inscriptionTrajet($id_user, $id_trajet){

	$trajet = Model::executeRequest('InscriptionTrajet', array(':id_user' => $id_user, ':id_trajet' => $id_trajet));
	$result = $trajet->fetchAll();
	return $result;
	}


}
 ?>
