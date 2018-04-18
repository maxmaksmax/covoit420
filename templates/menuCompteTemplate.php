<div class="blog-menu">
  <div class="blog-right-head">
  	<span> </span>
  	<h3>Mon compte</h3>
    <h4><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></h4>
  </div>
  <!----start-accordinatio-files--->

  <link rel="stylesheet" href="css/vallenato.css" type="text/css" media="screen" charset="utf-8">
  <!----start-accordinatio-files--->
  <div class="blog-right-accordinations">
    <ul>
  	  <a href="index.php?c=user&a=compte"><h2 class="accordion-header inactive-header">Mon profil</h2></a>

  	  <a href="index.php?c=user&a=futurTrajets"><h2 class="accordion-header inactive-header">Mes trajets en cours</h2></a>

      <a href="index.php?c=user&a=historiqueTrajets"><h2 class="accordion-header inactive-header">Mes trajets effectués</h2></a>

  	  <a href="index.php?c=user&a=statistiques"><h2 class="accordion-header inactive-header">Statistiques</h2></a>
    </ul>

  </div>
</div>
