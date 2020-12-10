@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb" style="border : 2px solid black; background-color : rgb(50, 85, 115); color:rgb(181, 215, 244)">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item" style="color:rgb(181, 215, 244)">Création d'un nouveau devis (Définition d'un nouveau
            projet)</li>
    </ol>
@endsection

@section('body')

    <div style="text-align: center;">
        <div class="d-inline">1</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">2</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">3</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">4</div>
    </div>

    <div style="background-color: rgb(218, 235, 249);" class="m-3">
        <div class="p-3">
            <form action="/devis2">
                <div class="form-group">
                    <label for="choixClient">Référence client : </label>
                    <input id="refClient" name="refClient" type="hidden" value="valeur de la ref client">
                    <div id="choixClient"
                        style="display : flex; justify-content : center; align-items : center; flex-direction : column;">

                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                            data-target="#modalClientExistant">Client existant</button>
                            
                            <button type="button" class="btn btn-outline-secondary btn-lg btn-block" data-toggle="modal"
                            data-target="#modalNouveauClient">Nouveau client</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nomProjet">Nom du projet</label>
                    <input type="text" class="form-control" id="nomProjet">
                </div>

                <div class="form-group">
                    <label for="refProjet">Référence du projet</label>
                    <input type="text" class="form-control" id="refProjet">
                </div>

                <div class="form-group">
                    <label for="dateProjet">Date</label>
                    <input type="date" class="form-control" id="dateProjet">
                </div>

                <a role="button" class="btn btn-outline-danger" href="/home">Annuler</a>
                <button type="submit" class="btn btn-primary float-right">Suivant</button>
            </form>
        </div>
    </div>

    <!-- ModalClientExistant -->
    <div class="modal fade" id="modalClientExistant" tabindex="-1" aria-labelledby="modalClientExistantTitre" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalClientExistantTitre">Sélection du client</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group">
                    <li class="list-group-item active">Antoine CORGNIARD</li>
                    <li class="list-group-item">Alexis Poupelin</li>
                    <li class="list-group-item">Theo DAVID</li>
                    <li class="list-group-item">Arthur CHERAMY</li>
                  </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="button" class="btn btn-primary">Selectionner</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- ModalClientExistant -->
      <div class="modal fade" id="modalNouveauClient" tabindex="-1" aria-labelledby="modalNouveauClientTitre" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalNouveauClientTitre">Création d'un nouveau client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nomPrenomInput">NOM et prenom du client</label>
                        <input type="text" class="form-control" id="nomPrenomInput" placeholder="NOM Prenom">
                      </div>
                      <div class="form-group">
                        <label for="mailInput">Adresse mail du client</label>
                        <input type="email" class="form-control" id="mailInput" placeholder="nom.prenom@gmail.com">
                      </div>
                      <div class="form-group">
                        <label for="adresseInput">Adresse du client</label>
                        <input type="text" class="form-control" id="adresseInput" placeholder="78 rue du bois jolie, Le Mans, France...">
                      </div>
                      <div class="form-group">
                        <label for="telephoneInput">Téléphone du client</label>
                        <input type="text" class="form-control" id="telephoneInput" placeholder="06 11 22 33 44">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>

@endsection
