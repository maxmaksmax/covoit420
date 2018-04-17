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

	public static function UpdatePassword($email){
		$stmt = Model::executeRequest('UpdatePassword', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function UpdateNom($email){
		$stmt = Model::executeRequest('UpdateNom', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function UpdatePrenom($email){
		$stmt = Model::executeRequest('UpdatePrenom', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function UpdateTelephone($email){
		$stmt = Model::executeRequest('UpdatTelephone', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function UpdateSite($email){
		$stmt = Model::executeRequest('UpdateSite', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function UpdateFonction($email){
		$stmt = Model::executeRequest('UpdateFonction', array('email'=>$email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
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
