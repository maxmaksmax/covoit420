<?php

	User::addSqlRequest('CreateUser', "INSERT INTO `utilisateur`(`email`, `nom_user`, `prenom_user`, `est_admin`, `telephone`,  `password`) 
	VALUES (:email, :nom_user, :prenom_user, :est_admin, :telephone, :password);");
			
	User::addSqlRequest('CountUsersWithLogin', 'select count(*) from utilisateur where utilisateur.email = :email');
	
	
	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintNom', "SELECT nom FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintPrenom', "SELECT prenom FROM utilisateur WHERE utilisateur.email = :email");
   


?>