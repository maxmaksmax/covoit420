<?php

	User::addSqlRequest('CreateUser', 'INSERT INTO utilisateur (id_user, `email`, `nom_user`, `prenom_user`, `est_admin`, `telephone`,  `password`)
	VALUES (NULL, :email, :nom_user, :prenom_user, :est_admin, :telephone, :password);');

	User::addSqlRequest('CountUsersWithLogin', "SELECT count(*) from utilisateur where utilisateur.email = :email");


	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintNom', "SELECT nom FROM utilisateur WHERE utilisateur.email = :email");
	User::addSqlRequest('PrintPrenom', "SELECT prenom FROM utilisateur WHERE utilisateur.email = :email");



?>
