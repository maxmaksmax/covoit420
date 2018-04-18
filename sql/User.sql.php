<?php
	//USER

	User::addSqlRequest('CreateUser', 'INSERT INTO utilisateur (`email`, `nom_user`, `prenom_user`, `est_admin`, `telephone`,  `password`)
																			VALUES (:email, :nom_user, :prenom_user, :est_admin, :telephone, :password);');

	User::addSqlRequest('CountUsersWithEmail', "SELECT count(*) FROM utilisateur where email = :email;");

	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.email = :email;");
	User::addSqlRequest('PrintID', "SELECT id_user FROM utilisateur WHERE email = :email;");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.email = :email;");
	User::addSqlRequest('PrintNom', "SELECT nom_user FROM utilisateur WHERE utilisateur.email = :email;");
	User::addSqlRequest('PrintPrenom', "SELECT prenom_user FROM utilisateur WHERE utilisateur.email = :email;");

	User::addSqlRequest('UpdatePassword', "UPDATE `utilisateur` SET `password`= :newPassword WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateNom', "UPDATE `utilisateur` SET `nom`= :newNom WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdatePrenom', "UPDATE `utilisateur` SET `prenom`= :newPrenom WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateTelephone', "UPDATE `utilisateur` SET `telephone`= :newTelephone WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateSite', "UPDATE `utilisateur` SET `site`= :newSite WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateFonction', "UPDATE `utilisateur` SET `fonction`= :newFonction WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateNbTrajet', "UPDATE `utilisateur` SET `nombre_trajets_realises`= :newNb WHERE utilisateur.email = :email;");
	
	


	//TRAJET

	User::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(id_user, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`)
											VALUES (:id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places)
											WHERE id_user = :id_user;");

	User::addSqlRequest('ShowTrajet', "SELECT lieu_depart, lieu_arrivee, heure_depart, nombre_places FROM trajet
											WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee AND heure_depart >= :heure_depart
											ORDER BY heure_depart;");

	User::addSqlRequest('ShowMesTrajets', "SELECT lieu_depart, lieu_arrivee, heure_depart, heure_arrivee, nombre_places, commentaire FROM TRAJET
											WHERE id_user = :id_user AND heure_arrivee < NOW();");

	User::addSqlRequest('InscriptionTrajet', "INSERT INTO participe (id_user, id_trajet)
											VALUES (:id_user, :id_trajet)");
											
	//VOITURE

	User::addSqlRequest('CreateVoiture', "INSERT INTO voiture (modele, couleur, nombre_places, taille_bagage)
											VALUES (:modele, :couleur, :nombre_places, :taille_bagage)
											WHERE id_user = :id_user;");

	User::addSqlRequest('ShowListeVoitures', "SELECT modele, couleur, nombre_places, taille_bagage FROM voiture WHERE id_user = :id_user;");

	User::addSqlRequest('UpdateModele', "UPDATE `voiture` SET `modele`= :newModele WHERE voiture.email = :email;");
	User::addSqlRequest('UpdateCouleur', "UPDATE `voiture` SET `couleur`= :newCouleur WHERE voiture.email = :email;");
	User::addSqlRequest('UpdateNbPlaces', "UPDATE `voiture` SET `nombre_places`= :newNbPlaces WHERE voiture.email = :email;");
	User::addSqlRequest('UpdateTailleBagage', "UPDATE `voiture` SET `taille_bagage`= :newTailleBagage WHERE voiture.email = :email;");

?>
