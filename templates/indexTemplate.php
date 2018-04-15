<!--- banner --->
<div class="content text-center" id='accueil'>
  <h1>Plus d'excuse pour ne pas aller en cours !</h1>
  <h2>IMT Express c'est l'assurance de se déplacer au sec !</h2>
  <img src="images/simpsons.jpg" alt="Covoiturage Simpsons/Futurama">
</div>

<ul>
   <li <?php
	  	if($controller->getActionName()=='defaultAction')
			echo 'class="active"';
	   ?>><a href="index.php?c=user&amp;a=index">Propose un covoiturage</a></li>

   <li <?php
	  	if($controller->getActionName()=='creationTrajet')
			echo 'class="active"';
	   ?>><a href="index.php?c=user&amp;a=creationTrajet">Recherche un covoiturage</a></li>

</ul>
<!--- banner --->
