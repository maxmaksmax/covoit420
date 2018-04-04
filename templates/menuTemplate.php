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


<!-- à afficher seulement si on n'est pas connecté -->
<div class="connection">
  <div class="formulaire">
					<form method="post" action="index.php?a=validateConnection">
						 <p>
							 <label for="inputEmail"></label>
							 <input type="email" name="inputEmail" placeholder="Email"required />
							 <label for="inputPassword"></label>
							 <input type="password" name="inputPassword" placeholder="Mot de passe" required />
							 <input type="submit" value="Valider" />
						 </p>
					</form>
				</div>
</div>
<!--- top-nav ----->
  <!--- script-for-nav ---->
<!-- <script>
  $( "span.menu" ).click(function() {
    $( ".top-nav ul" ).slideToggle( "slow", function() {
      // Animation complete.
    });
  });
</script> -->
<!--- script-for-nav ---->
</div>
