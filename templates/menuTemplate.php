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

  </ul>


<!-- à afficher seulement si on n'est pas connecté -->
<div class="connection">
  <div class="inscription">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">S'inscrire</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inscription</h4>
        </div>
        <div class="modal-body">

          <div class="formulaire">
            <form class="form-horizontal" action="index.php?a=validateInscription" method="post">
            <!-- ----------------
                 inputEmail
             ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputEmailError) && $inputEmailError) echo 'has-error'; if(isset($inputEmailFeedbackMsg)) echo ' has-feedback' ?>">
                    <label class="control-label col-sm-3" for="inputEmail">Email</label>
                <div class="col-sm-3">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
                     <?php	if(isset($inputEmailError) && $inputEmailError): ?>
                       <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                     <?php endif ?>
                     </div>
                   <?php if(isset($inputEmailFeedbackMsg)): ?>
                       <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                      <span class="feedback-error"><?php echo $inputEmailFeedbackMsg; ?></span>
                     </div>
                   <?php endif ?>
                </div>

              <!-- ----------------
                   inputPassword
                ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputPasswordFeedbackMsg)) echo 'has-feedback'; if(isset($inputPasswordError) && $inputPasswordError) echo ' has-error';  ?>">
                    <label class="control-label col-sm-3" for="inputPassword">Mot de passe</label>
                     <div class="col-sm-3">
                   <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" aria-describedby="inputPassordStatus" name="inscPassword">
                  <?php	if(isset($inputPasswordError) && $inputPasswordError): ?>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                  <?php endif ?>
                     </div>
                 <?php if(isset($inputPasswordFeedbackMsg)): ?>
                     <div id="inputPassordStatus" class="col-sm-4 help-block feedback" aria-hidden="true">
                     <span class="feedback-error"><?php echo $inputPasswordFeedbackMsg; ?></span>
                      <!-- <span class="feedback-success">Mot de passe fort</span> -->
                   </div>
                 <?php endif ?>
                </div>

              <!-- ----------------
                   confirmPassword
                ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputPasswordError2) && $inputPasswordError2) echo 'has-error'; if(isset($inputPasswordFeedbackMsg2)) echo ' has-feedback' ?>">
                    <label class="control-label col-sm-3" for="confirmPassword">Confirmer mot de passe</label>
                     <div class="col-sm-3">
                   <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" aria-describedby="inputSuccess3Status" name="inscPassword2">
                   <?php	if(isset($inputPasswordError2) && $inputPasswordError2): ?>
                     <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                   <?php endif ?>
                     </div>
                 <?php if(isset($inputPasswordFeedbackMsg2)): ?>
                     <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                    <span class="feedback-error"><?php echo $inputPasswordFeedbackMsg2; ?></span>
                   </div>
                 <?php endif ?>
                </div>

              <!-- ----------------
                   name
                ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputLastnameError) && $inputLastnameError) echo 'has-error'; if(isset($inputLastnameFeedbackMsg)) echo ' has-feedback' ?>">
                    <label class="control-label col-sm-3" for="inputLastname">Nom</label>
                <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputLastname" placeholder="Nom" name="inputLastname">
                 <?php	if(isset($inputLastnameError) && $inputLastnameError): ?>
                   <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                 <?php endif ?>
                    </div>
               <?php if(isset($inputLastnameFeedbackMsg)): ?>
                   <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                  <span class="feedback-error"><?php echo $inputLastnameFeedbackMsg; ?></span>
                 </div>
               <?php endif ?>
                </div>

              <!-- ----------------
                   firstName
                ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputFirstnameError) && $inputFirstnameError) echo 'has-error'; if(isset($inputFirstnameFeedbackMsg)) echo ' has-feedback' ?>">
                    <label class="control-label col-sm-3" for="inputFirstname">Prénom</label>
                <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom" name="inputFirstname">
                   <?php	if(isset($inputFirstnameError) && $inputFirstnameError): ?>
                     <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                   <?php endif ?>
                    </div>
                 <?php if(isset($inputFirstnameFeedbackMsg)): ?>
                     <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                    <span class="feedback-error"><?php echo $inputFirstnameFeedbackMsg; ?></span>
                   </div>
                 <?php endif ?>
                </div>

            <!-- ----------------
                   Telephone
               ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputTelephoneError) && $inputTelephoneError) echo 'has-error'; if(isset($inputTelephoneFeedbackMsg)) echo ' has-feedback' ?>">
                    <label class="control-label col-sm-3" for="inputTelephone">Téléphone</label>
                <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputTelephone" placeholder="Téléphone" name="inputTelephone">
                   <?php	if(isset($inputTelephoneError) && $inputTelephoneError): ?>
                     <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                   <?php endif ?>
                    </div>
                 <?php if(isset($inputTelephoneFeedbackMsg)): ?>
                     <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                    <span class="feedback-error"><?php echo $inputTelephoneFeedbackMsg; ?></span>
                   </div>
                 <?php endif ?>
                </div>



              <!-- ----------------
              inputAcceptConditions
                ---------------- -->
                <div class="form-group requiredField <?php if(isset($inputAcceptConditionsError) && $inputAcceptConditionsError) echo 'has-error'; if(isset($inputAcceptConditionsFeedbackMsg)) echo ' has-feedback' ?>">
                <div class="col-sm-offset-3 col-sm-3">
                        <label class="checkbox-inline">
                            <input type="checkbox" checked value="agree" id="inputAcceptConditions" name='inputAcceptConditions'>J'accepte <a href="#">les conditions</a>.
                        </label>
                    </div>
                 <?php if(isset($inputAcceptConditionsFeedbackMsg)): ?>
                     <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
                    <span class="feedback-error"><?php echo $inputAcceptConditionsFeedbackMsg; ?></span>
                   </div>
                 <?php endif ?>
                </div>

                <br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input type="submit" class="btn btn-primary" value="Créer mon compte" name="boutonCreerCompte">
                        <input type="reset" class="btn btn-default" value="Annuler" data-dismiss="modal">
                    </div>
                </div>

            </form>
        	</div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>

    </div>
  </div>






  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalco">Se connecter</button>

  <!-- Modal -->
  <div class="modal fade" id="myModalco" role="dialog">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        </div>
      </div>

    </div>
</div>
</div>
</div>
<!--- top-nav ----->
</div>
