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
			echo "Cet utilisateur n'a pas de mot de passe !";
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
			echo "Cet utilisateur n'a pas de mail !";
		}
		else{
			return $stmt;
		}
	}

	public static function getPrenom($email){
		$stmt = Model::executeRequest('PrintPrenom', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'a pas de prénom !";
		}
		else{
			return $stmt;
		}
	}

	public static function getSite($email){
		$stmt = Model::executeRequest('PrintSite', array('email' => $email)) -> fetch()[0];
		return $stmt;

	}

	public static function getFonction($email){
		$stmt = Model::executeRequest('PrintFonction', array('email' => $email)) -> fetch()[0];
		return $stmt;

	}

	public static function getTelephone($email){
		$stmt = Model::executeRequest('PrintTelephone', array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'a pas de téléphone !";
		}
		else{
			return $stmt;
		}
	}

	public static function updatePassword($email, $newPassword){
		$stmt = Model::executeRequest('UpdatePassword', array('email'=>$email, 'password' => $newPassword)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateNom($email, $newFonction){
		$stmt = Model::executeRequest('UpdateNom', array('email'=>$email, 'nom' => $newNom)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updatePrenom($email, $newPrenom){
		$stmt = Model::executeRequest('UpdatePrenom', array('email'=>$email, 'prenom' => $newPrenom)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateTelephone($email, $newTelephone){
		$stmt = Model::executeRequest('UpdateTelephone', array('email'=>$email, 'telephone' => $newTelephone)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateSite($email, $newSite){
		$stmt = Model::executeRequest('UpdateSite', array('email'=>$email, 'site' => $newSite)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateFonction($email, $newFonction){
		$stmt = Model::executeRequest('UpdateFonction', array('email'=>$email, 'fonction' => $newFonction)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
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

	public static function getVoitureID($id_user){
		$voiture = Model::executeRequest('GetVoitureID', array('id_user' => $id_user));
		$res = $voiture->fetch()[0][0];
		return $res;
	}

	public static function updateModele($id_voiture, $newModele){
		$stmt = Model::executeRequest('UpdateModele', array('id_voiure'=>$id_voiture, 'modele' => $newModele)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateCouleur($id_voiture, $newCouleur){
		$stmt = Model::executeRequest('UpdateCouleur', array('id_voiture'=>$id_voiture, 'couleur' => $newCouleur)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateTailleBagages($id_voiture, $newTaille){
		$stmt = Model::executeRequest('UpdateTailleBagages', array('id_voiture'=>$id_voiture, 'taille_bagages' => $newTaille)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function updateNbPlaces($id_voiture, $newNbPlaces){
		$stmt = Model::executeRequest('UpdateNbPlaces', array('id_voiture'=>$id_voiture, 'nb_places' => $newNbPlaces)) -> fetch()[0];
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

	public static function updateNbTrajet($email){
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
			'lieu_arrivee' => $lieu_arrivee, 'heure_depart' => $heure_depart, 'heure_arrivee' => $heure_arrivee, 'nombre_places' => $nombre_places))->fetch()[0][0];
		return $trajet;
	}

	public static function showTrajet($lieu_depart, $lieu_arrivee, $heure_depart){
		$trajet = Model::executeRequest('ShowTrajet', array('lieu_depart' => $lieu_depart, 'lieu_arrivee' => $lieu_arrivee, 'heure_depart' => $heure_depart));
		$result = $trajet->fetchAll();
		return $result;
	}

	public static function showMesTrajetsPasses($id_user){

		$trajet = Model::executeRequest('ShowMesTrajetsPasses', array('id_user' => $id_user));
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function showMesFutursTrajets($id_user){
		$trajet = Model::executeRequest('ShowMesFutursTrajets', array('id_user' => $id_user));
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function inscriptionTrajet($id_user, $id_trajet){

	$trajet = Model::executeRequest('InscriptionTrajet', array(':id_user' => $id_user, ':id_trajet' => $id_trajet));
	$result = $trajet->fetchAll();
	return $result;
	}

	public static function desinscriptionTrajet($id_user, $id_trajet){

	$trajet = Model::executeRequest('DesinscriptionTrajet', array(':id_user' => $id_user, ':id_trajet' => $id_trajet));
	$result = $trajet->fetchAll();
	return $result;
	}

	public static function showParticipantsTrajet($id_trajet){
		$trajet = Model::executeRequest('ShowParticipantsTrajet', array('id_trajet' => $id_trajet));
		$result = $trajet->fetchAll();
		return $result;
	}

	public static function showTrajetWithParticipant($id_user){
		$trajet = Model::executeRequest('ShowTrajetWithParticipant', array('id_user' => $id_user));
		$result = $trajet->fetchAll();
		return $result;
	}
}
 ?>
