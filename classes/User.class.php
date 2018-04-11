<?php
class User extends Model {

	public static function isEmailUsed($email){
		$user = Model::executeRequest('SELECT count(*) FROM utilisateur u WHERE u.email = :email', array(':email' => $email));
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
		$requete = "INSERT INTO utilisateur(id_user, password, email, prenom_user, nom_user, est_admin, telephone) VALUES (:id, :password, :email,  :prenom_user, :nom_user,
				:est_admin, :telephone);";
		if (self::isEmailUsed($email)){
			echo 'Email déjà utilisé !';
			exit();
		}
		else{ // ATTENTION ici id est un random mais il faut vérifier si l'auto-incrémentation fonctionne
			$user = Model::executeRequest($requete, array('id' => rand(10000,10100), 'password' => $password, 'email' => $email, 'nom_user' => $nom, 'prenom_user' => $prenom, 'est_admin' => $admin, 'telephone' => $telephone));
		}
		return $user;
	}

  public static function getPassword($email){
		$requete = "SELECT password FROM utilisateur WHERE utilisateur.email = :email";
		$stmt = Model::executeRequest($requete, array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getNom($email){
		$requete = "SELECT nom FROM utilisateur WHERE utilisateur.email = :email";
		$stmt = Model::executeRequest($requete, array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getPrenom($email){
		$requete = "SELECT prenom FROM utilisateur WHERE utilisateur.email = :email";
		$stmt = Model::executeRequest($requete, array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

	public static function getTelephone($email){
		$requete = "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email";
		$stmt = Model::executeRequest($requete, array('email' => $email)) -> fetch()[0];
		if($stmt == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $stmt;
		}
	}

}
 ?>
