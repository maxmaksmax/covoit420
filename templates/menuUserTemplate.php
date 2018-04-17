<!--- top-nav ----->
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
  	  	if($controller->getActionName()=='creationTrajet')
  			echo 'class="active"';
  	   ?>><a href="index.php?c=user&a=creationTrajet">Propose un covoiturage</a></li>

     <li <?php
  	  	if($controller->getActionName()=='rechercheTrajet')
  			echo 'class="active"';
  	   ?>><a href="index.php?c=user&a=rechercheTrajet">Recherche un covoiturage</a></li>

     <li <?php
  	  	if($controller->getActionName()=='compte')
  			echo 'class="active"';
  	   ?>><a href="index.php?c=user&a=compte">Mon Compte</a></li>

  </ul>

  <div class="connection">
    <form class="navbar-form navbar-right" id="login_form" action="index.php?c=user&a=deconnection" method="post">
    	<button type="submit" class="btn btn-primary">Se déconnecter</button>
    </form>
  </div>
</div>
<!-- top-nav -->

</div>
<!-- menu -->
