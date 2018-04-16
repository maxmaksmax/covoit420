<?php


	//USER 
	
	User::addSqlRequest('CreateUser', 'INSERT INTO utilisateur (`email`, `nom_user`, `prenom_user`, `est_admin`, `telephone`,  `password`)
	VALUES (:email, :nom_user, :prenom_user, :est_admin, :telephone, :password);');

	User::addSqlRequest('CountUsersWithEmail', "SELECT count(*) from utilisateur where utilisateur.email = :email");

	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintNom', "SELECT nom_user FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintPrenom', "SELECT prenom_user FROM utilisateur WHERE utilisateur.email = :email");

	
	//TRAJET
	
	User::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(`id_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:id_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");
			
	User::addSqlRequest('ShowTrajet', "SELECT id_trajet, lieu_depart, lieu_arrivee, nombre_places FROM trajet WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee
		AND heure_depart >= :heure_depart;");
		
	User::addSqlRequest('EnrollUserATrajet', "INSERT INTO `participe`(`id_user`, `id_trajet`) VALUES (:id_user, :id_trajet)");
	
   


?>
