<?php 
	$nbTrajetParJour = User::nbTrajetsParJour();
	$nbTrajetParMois = User::nbTrajetsParMois();
	$nbTrajetParAnnee = User::nbTrajetsParAnnee();
	$distanceParJour = User::distanceParJour();
	$distanceParMois = User::distanceParMois();
	$distanceParAnnee = User::distanceParAnnee();
	
	
	print_r($nbTrajetParJour);
?>