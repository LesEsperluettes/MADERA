@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href='/'>Accueil</a></li>
        <li class="breadcrumb-item active">Contacts</li>
    </ol>
@endsection


@section('body')
    <h1>Contacts</h1>

    <div class="row">
        <div class="col-sm">
            <div class="row row-cols-1">
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Client n°4 (Alain DELON)</h5>
                                    {{-- <p class="card-text"><small
                                            class="text-muted">Dernière modification il y a 2
                                            minutes</small>
                                    </p> --}}
                                    <p class="card-text">alain.delon@gmail.com</p>
                                    <a href="#" class="btn btn-outline-primary">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Client n°3 (Yanick NOAH)</h5>
                                    <p class="card-text">yanick.noah@gmail.com</p>
                                    <a href="#" class="btn btn-outline-primary">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="..." class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Client n°2 (Jacques CHIRAC)</h5>
                                    <p class="card-text">jacques.chirac@gmail.com</p>
                                    <a href="#" class="btn btn-outline-primary">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">

            <div class="nom-client">
                <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></svg>
                <h2 class="mt-2">Alain DELON</h2>
            </div>

            <form>
                <div class="form-group">
                    <label for="adresseMail">Adresse mail</label>
                    <input type="email" class="form-control" id="adresseMail" placeholder="exemple@domain.fr">
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="6 Rue du Ruisseau, 59800 Lille">
                </div>

                <div class="form-group">
                    <label for="telephone">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="telephone" placeholder="06 11 22 33 44 55">
                </div>

                <div class="form-group">
                    <label for="datecreation">Date de création</label>
                    <input type="date" class="form-control" id="datecreation" placeholder="06/10/2020">
                </div>

                <button type="submit" class="btn btn-primary">Editer les informations</button>
                <a role="button" class="btn btn-primary">Voir les devis liés</a>
            </form>

        </div>
    </div>

@endsection
