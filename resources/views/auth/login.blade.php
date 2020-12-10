@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <form>
                <div class="form-group">
                    <label for="Utilisateur">Nom utilisateur</label>
                    <input type="text" class="form-control" id="Utilisateur" aria-describedby="UtilisateurHelp"
                        placeholder="Utilisateur">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                </div>
                <div class="end_form">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                    <a role="button">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
