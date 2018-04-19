<section>

<section class="creation">
      <div >
        <div>
          <div >
            <h2>Rechercher un trajet</h2>
          </div>
        </div>
        <div>
          <div>
            <form action="index.php?c=user&a=validateRechercheTrajet" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="date" name="date" type="date" placeholder="Date" required data-validation-required-message="Sélectionner une date">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="lieuDepart" name="lieuDepart" type="text" placeholder="Lieu Départ" required data-validation-required-message="Sélectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                    <input class="form-control" id="heure" name="heure" type="time" placeholder="Heure" required data-validation-required-message="Sélectionner une heure">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="lieuArrivee" name="lieuArrivee" type="text" placeholder="Lieu d'arrivée" required data-validation-required-message="Sélectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input type="submit" value="Rechercher" name="boutonRechercher" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</section>
