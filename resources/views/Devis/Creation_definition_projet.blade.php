@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/devis1.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{ asset('js/devis.js') }}"></script>
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

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <div style="background-color: rgb(218, 235, 249);" class="m-3">
        <div class="p-4">
            <form method="GET" action="{{ route('devis_etape_1') }}" >
                <div class="form-group">
                    <label for="choixClient">Référence client : </label>
                    <input id="refClient" name="refClient" type="hidden" value="valeur de la ref client">
                    @isset($selectedClient)
                        <input type="hidden" name="selectedClient" value="{{$selectedClient->id}}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $selectedClient->nom }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $selectedClient->mail }}</h6>
                                <p class="card-text">{{ $selectedClient->adresse }}</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalClientExistant">Chercher un autre client existant</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNouveauClient">Nouveau client</button>
                            </div>
                        </div>
                    @else
                        <div id="choixClient" style="display : flex; justify-content : center; align-items : center; flex-direction : column;">

                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                    data-target="#modalClientExistant">Client existant</button>

                            <button type="button" class="btn btn-outline-secondary btn-lg btn-block" data-toggle="modal"
                                    data-target="#modalNouveauClient">Nouveau client</button>
                        </div>
                    @endisset
                </div>

                <div class="form-group">
                    <label for="nomProjet">Nom du projet</label>
                    <input type="text" name="nomProjet" id="nomProjet" class="form-control" value="{{ old('nomProjet') }}" @if(!isset($selectedClient)) disabled @endif>
                </div>

                <div class="ref_date_devis">
                    <div class="form-group">
                        <label for="refProjet">Référence du projet</label>
                        <input type="text" name="refProjet" id="refProjet" class="form-control input2" value="{{ old('refProjet') }}" @if(!isset($selectedClient)) disabled @endif>
                    </div>

                    <div class="form-group div_date">
                        <label for="dateProjet">Date</label>
                        <input type="date" name="dateProjet" id="dateProjet" class="form-control input2" value="{{ old('dateProjet') }}" @if(!isset($selectedClient)) disabled @endif>
                    </div>
                </div>

                <input type="hidden" name="goToNextStep" value="true">
                <a role="button" class="btn btn-outline-danger" href="/home">Annuler</a>
                <button type="submit" class="btn btn-primary float-right" @if(!isset($selectedClient)) disabled @endif>Suivant</button>
            </form>
        </div>
    </div>

    <!-- ModalClientExistant -->
    <div class="modal fade" id="modalClientExistant" tabindex="-1" aria-labelledby="modalClientExistantTitre" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalClientExistantTitre">Sélection du client</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">🔎</span>
                    <input oninput="filterClients(this)" type="text" class="form-control" placeholder="Rechercher un client" aria-label="search_client" aria-describedby="basic-addon1">
                </div>
                <div class="list-group">
                    @foreach ($clients as $client)
                        <a id="client_{{ $client->id }}" onclick="selectClient({{ $client->id }})" class="list-group-item list-group-item-action">{{$client->nom}}</a>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <form method="GET" action="{{ route('devis_etape_1') }}">
                    <input type="hidden" value="" name="selectedClient" id="selected_client_input">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Selectionner</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <!-- ModalClientExistant -->
      <div class="modal fade" id="modalNouveauClient" tabindex="-1" aria-labelledby="modalNouveauClientTitre" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
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
