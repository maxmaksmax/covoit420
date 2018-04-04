<?php

	User::addSqlRequest('CreateUser', "INSERT INTO `utilisateur`(`login`, `nom_user`, `prenom_user`, `est_admin`, `telephone`, `email`, `password`) 
	VALUES (:login, :nom_user, :prenom_user, :est_admin, :telephone, :email, :password);");
			
	User::addSqlRequest('CountUsersWithLogin', 'select count(*) from utilisateur where utilisateur.email = :email');
	
	
	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintNom', "SELECT nom FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintPrenom', "SELECT prenom FROM utilisateur WHERE utilisateur.email = :email");
   


?>