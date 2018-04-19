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
	User::addSqlRequest('PrintSite', "SELECT site FROM utilisateur WHERE utilisateur.email = :email;");
	User::addSqlRequest('PrintFonction', "SELECT fonction FROM utilisateur WHERE utilisateur.email = :email;");

	User::addSqlRequest('UpdatePassword', "UPDATE `utilisateur` SET `password`= :newPassword WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateNom', "UPDATE `utilisateur` SET `nom`= :newNom WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdatePrenom', "UPDATE `utilisateur` SET `prenom`= :newPrenom WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateTelephone', "UPDATE `utilisateur` SET `telephone`= :newTelephone WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateSite', "UPDATE `utilisateur` SET `site`= :newSite WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateFonction', "UPDATE `utilisateur` SET `fonction`= :newFonction WHERE utilisateur.email = :email;");
	User::addSqlRequest('UpdateNbTrajet', "UPDATE `utilisateur` SET `nombre_trajets_realises`= :newNb WHERE utilisateur.email = :email;");




	//TRAJET

	User::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(id_user, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`)
											VALUES (:id_user, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");

	User::addSqlRequest('ShowTrajet', "SELECT lieu_depart, lieu_arrivee, heure_depart, nombre_places, id_trajet FROM trajet
											WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee AND heure_depart >= :heure_depart
											ORDER BY heure_depart;");

	User::addSqlRequest('ShowMesTrajetsPasses', "SELECT id_trajet, id_user, lieu_depart, lieu_arrivee, heure_depart, heure_arrivee, commentaire FROM TRAJET
											WHERE id_user = :id_user AND heure_arrivee < NOW();");

	User::addSqlRequest('ShowMesFutursTrajets', "SELECT id_trajet, id_user, lieu_depart, lieu_arrivee, heure_depart, heure_arrivee, commentaire FROM TRAJET
											WHERE id_user = :id_user AND heure_depart > NOW();");

	User::addSqlRequest('InscriptionTrajet', "INSERT INTO participe (id_user, id_trajet) VALUES (:id_user, :id_trajet)");

	User::addSqlRequest('DesinscriptionTrajet', "DELETE FROM participe WHERE id_user = :id_user AND id_trajet = :id_trajet");

	User::addSqlRequest('ShowParticipantsTrajet', "SELECT p.id_user, nom_user, prenom_user FROM participe p JOIN utilisateur u ON p.id_user = u.id_user WHERE p.id_trajet= :id_trajet");

	User::addSqlRequest('ShowTrajetWithParticipant', "SELECT id_trajet, id_user, lieu_depart, lieu_arrivee, heure_depart, heure_arrivee, nombre_places
											FROM trajet t JOIN participe p ON t.id_trajet = p.id_trajet
											WHERE p.id_user = :id_user AND heure_depart > NOW();");
	//VOITURE

	User::addSqlRequest('CreateVoiture', "INSERT INTO voiture (modele, couleur, nombre_places, taille_bagage)
											VALUES (:modele, :couleur, :nombre_places, :taille_bagage)
											WHERE id_user = :id_user;");
											
	User::addSqlRequest('ShowListeVoitures', "SELECT id_voiture, modele, couleur, nombre_places, taille_bagage FROM voiture WHERE id_user = :id_user;");
	
	User::addSqlRequest('GetVoitureID', "SELECT id_voiture FROM voiture WHERE id_user = :id_user;");

	User::addSqlRequest('UpdateModele', "UPDATE `voiture` SET `modele`= :newModele WHERE voiture.id_user = :id_user;");
	User::addSqlRequest('UpdateCouleur', "UPDATE `voiture` SET `couleur`= :newCouleur WHERE voiture.id_user = :email;");
	User::addSqlRequest('UpdateNbPlaces', "UPDATE `voiture` SET `nombre_places`= :newNbPlaces WHERE voiture.id_user = :id_user;");
	User::addSqlRequest('UpdateTailleBagages', "UPDATE `voiture` SET `taille_bagage`= :newTailleBagages WHERE voiture.id_user = :id_user;");
	
	User::addSqlRequest('CreateModele', "INSERT INTO voiture (modele) VALUES (:modele) WHERE id_voiture = :id_voiture;");
	User::addSqlRequest('CreateCouleur', "INSERT INTO voiture (couleur) VALUES (:couleur) WHERE id_voiture = :id_voiture;");
	User::addSqlRequest('CreateNbPlaces', "INSERT INTO voiture (nombre_places) VALUES (:nombre_places) WHERE id_voiture = :id_voiture;");
	User::addSqlRequest('CreateTailleBagages', "INTO voiture (taille_bagage) VALUES (:taille_bagages) WHERE id_voiture = :id_voiture;");	

	
	
	//STATISTIQUES GENERALES
	
	User::addSqlRequest('NbTrajetParJour', "SELECT COUNT(id_trajet), DAYOFMONTH(heure_depart) FROM trajet GROUP BY DAYOFMONTH(heure_depart) ORDER BY DAYOFMONTH(heure_depart) ;");
	User::addSqlRequest('NbTrajetParMois', "SELECT COUNT(id_trajet), MONTH(heure_depart) FROM trajet GROUP BY MONTH(heure_depart) ORDER BY MONTH(heure_depart) ;");
	User::addSqlRequest('NbTrajetParAnnee', "SELECT COUNT(id_trajet), YEAR(heure_depart) FROM trajet GROUP BY YEAR(heure_depart) ORDER BY YEAR(heure_depart) ;");
	
		

?>
