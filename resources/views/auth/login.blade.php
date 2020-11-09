@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row justify-content-center">

            <form>
                <div class="form-group">
                    <label for="Utilisateur">Utilisateur</label>
                    <input type="text" class="form-control" id="Utilisateur" aria-describedby="UtilisateurHelp"
                        placeholder="Utilisateur">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                </div>
                <button type="submit" class="btn btn-primary">Connexion</button>
                <a role="button">Mot de passe oublié ?</a>
            </form>
        </div>
    </div>
@endsection
