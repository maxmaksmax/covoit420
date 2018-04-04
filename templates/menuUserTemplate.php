<div class="top-nav">
  <div class="logo">
    <a href="index.php"><span>IMT</span> Express</a>
  </div>
  
<ul>
   <li <?php
	  	if($controller->getActionName()=='defaultAction')
			echo 'class="active"';
	   ?>
	 ><a href="index.php?c=user&amp;a=index">Accueil</a></li>

   <li <?php
	  	if($controller->getActionName()=='monCompte')
			echo 'class="active"';
	   ?>><a href="index.php?c=user&amp;a=monCompte">Mon Compte</a></li>

	<li <?php
	  	if($controller->getActionName()=='mesTrajets')
			echo 'class="active"';
	   ?>><a href="index.php?c=user&amp;a=mesTrajets">Mes Trajets</a></li>
</ul>

<form class="navbar-form navbar-right" id="login_form" action="index.php" method="post">
	<button type="submit" class="btn btn-primary">Se déconnecter</button>
</form>
