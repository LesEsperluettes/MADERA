@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb" style="border : 2px solid black; background-color : rgb(50, 85, 115); color:rgb(181, 215, 244)">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item" style="color:rgb(181, 215, 244)">Création d'un nouveau devis (Définition d'un nouveau projet)</li>
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
                    <div id="choixClient" style="display : flex; justify-content : center; align-items : center; flex-direction : column;">
                        <a href="#" class="btn btn-outline-primary btn-lg btn-block" style="width : 70%; border: solid 2px" role="button">Client
                            existant</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg btn-block" style="width : 70%; border : solid 2px"   role="button">Nouveau
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

                <a role="button" class="btn btn-outline-danger" href="/home">Annuler</a>
                <button type="submit" class="btn btn-primary float-right">Suivant</button>
            </form>
        </div>
    </div>

@endsection
