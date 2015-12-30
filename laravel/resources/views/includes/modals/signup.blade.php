<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="panel-title">Pré-inscription administrative</div>
      </div>
      <div class="panel-body">
          <p>Cette pré-inscription de constitue en rien une inscription officielle à la formation STP. Elle est purement administrative.</p>
          <p>Veuillez fournir les fichiers suivents au format PDF : Dernier diplome, Lettre de motivation, Relevé de note de l'année précédente</p>
          <br>
        <form id="signupform" class="form-horizontal dropzone" role="form">
          <div class="form-group">
            <label for="email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="email" placeholder="Adresse Mail">
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-md-3 control-label">Nom</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="firstname" placeholder="Nom">
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-md-3 control-label">Prénom</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="lastname" placeholder="Prénom">
            </div>
          </div>
          <div class="form-group">
            <label for="lastname" class="col-md-3 control-label">Fichiers d'inscription</label>
            <div class="col-md-9">
              <input name="file" class="form-control" type="file" multiple />
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button id="btn-signup" type="button" class="btn btn-primary"><i class="icon-hand-right"></i>Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
