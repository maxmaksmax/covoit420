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
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Se connecter</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connexion</h4>
        </div>
        <div class="modal-body">
          <div class="formulaire">
          	<form method="post" action="index.php?a=validateConnection">
          		 <p>
          			 <label for="inputEmail"></label>
          			 <input type="email" name="inputEmail" placeholder="Email"required />

                 <label for="inputPassword"></label>
          			 <input type="password" name="inputPassword" placeholder="Mot de passe" required />

                 <input type="submit" value="Valider" name="boutonConnexion"/>
          		 </p>
          	</form>
        	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>
</div>
<!--- top-nav ----->
</div>
