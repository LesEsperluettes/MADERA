@extends('layouts.app')

@section('css')
<link href="{{ asset('css/devis4.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item">Création d'un nouveau devis (Résumé)</li>
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
            <div class="row">
                <div class="col-sm">
                    <div class="row row-cols-1">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix unitaire</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($modules as $module)
                                    <tr>
                                        <th scope="row">Module {{ $module->nom }}</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @foreach($module->sections as $section)
                                        <tr>
                                            <th scope="row"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                 class="bi bi-arrow-return-right" fill="currentColor"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                                                </svg>{{$section->nom}}</th>
                                            <td>{{$section->pivot->quantite}}</td>
                                            <td>1000 €</td>
                                            <td>1000 €</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row justify-content-center div_prix">
                        <div class="col-sm m-2 prix" style="background-color: white;">
                            <h1>200 000 €</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center div_comment">
                        <div class="col-sm m-2" style="background-color: white;">
                            <h1>Commentaires...</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a role="button" class="btn btn-outline-danger" href="/devis3">Précédant</a>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#confirmationModal">Suivant</a>
        </div>
    </div>

    <!-- Modal confirmation-->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalLabel">Merci de confirmer la création du devis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non, revenir en arrière</button>
            <a role="button" class="btn btn-primary" href="/devis_success">Oui, je valide ce devis</a>
        </div>
      </div>
    </div>
  </div>

@endsection
