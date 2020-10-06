@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item">Création d'un nouveau devis (Définition d'un nouveau projet)</li>
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
            <form>
                <div class="form-group">
                    <h3 for="choixClient">Référence client : </h3>
                    <input id="refClient" name="refClient" type="hidden" value="valeur de la ref client">
                    <div id="choixClient">
                        <a href="#" class="btn btn-outline-primary btn-lg" role="button"
                            style="background-color: white;">Client
                            existant</a>
                        <a href="#" class="btn btn-outline-primary btn-lg" role="button"
                            style="background-color: white;">Nouveau
                            client</a>
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

                <button type="submit" class="btn btn-primary">Suivant</button>
                <button class="btn btn-outline-danger">Annuler</button>
            </form>
        </div>
    </div>

@endsection
