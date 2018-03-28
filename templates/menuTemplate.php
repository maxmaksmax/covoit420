<!--- top-nav ----->
<div class="top-nav">
  <div class="logo">
    <a href="index.php"><span>IMT</span> Express</a>
  </div>
  <span class="menu"> </span>
  <ul>
    <li <?php
	  	    if($controller->getActionName()=='defaultAction')
			    echo 'class="active"';
	      ?>
	  ><a href="index.php">Accueil</a></li>

    <li <?php
    	  	if($controller->getActionName()=='inscription')
    			echo 'class="active"';
    	   ?>
    ><a href="index.php?c=anonymous&amp;a=inscription">Inscription</a></li>

<!--afficher seulement si on est connecté
    <li><a href="about.html">Rechercher</a></li>
    <li><a href="services.html">Soumettre un trajet</a></li>
    <li><a href="blog.html">Mon compte</a></li>
    <li><a href="contact.html">Contact</a></li>-->
  </ul>
</div>

<div class="clearfix"> </div>
<!-- à afficher seulement si on n'est pas connecté -->
<div class="formulaire">
  <form method="post" action="traitement.php">
     <label for="pseudo">Pseudo :</label>
     <input type="text" name="pseudo" id="pseudo" required />
     <label for="pass">  Mot de passe :</label>
     <input type="password" name="pass" id="pass" required />
     <input type="submit" value="Valider" />
<!-- il faut du php au cas ou erreur de connexion -->
  </form>
</div>
<!--- top-nav ----->
  <!--- script-for-nav ---->
<script>
  $( "span.menu" ).click(function() {
    $( ".top-nav ul" ).slideToggle( "slow", function() {
      // Animation complete.
    });
  });
</script>
<!--- script-for-nav ---->
