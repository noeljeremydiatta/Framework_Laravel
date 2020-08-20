@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des clients</div>
                <div class="card-body">
                @if(isset($confirmation))
                @if($confirmation == 1)
                <div class="alert alert-success">Client ajouté </div>
                @else
                <div class="alert alert-danger">Client non ajouté</div>
                @endif
                @endif
                <form method="POST" action="/client/update"> 
                    @csrf
                    <div class ="form-group">
                    <label for="newcli">Nouveau Client</label>
                    <input type="radio" name="stacli" id="newcli" value="{{ $client->stacli }}>
                    <label for="cliexi">Client Existant</label>
                    <input type="radio" name="stacli" id="cliexi" value="{{ $client->stacli }}>
            </div>
            <div class="form-group">
                    <label for="cliphy">Client physique</label>
                    <input type="radio" name="typecli" id="cliphy" value="{{ $client->typecli }}>
                    <label for="climo">Client Moral</label>
                    <input type="radio" name="typecli" id="climo" value="{{ $client->typecli }}>
            </div>
            <div class="form-group">
                <label class="control-label" for="id">identifiant du client :</label>
                <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{ $client->id }}"/><br/>
            
                
            <div class="form-group">
                    <label class="control-label" for="nom">Nom :</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="{{ $client->nom }}/><br/>
                    <label class="control-label" for="prenom">Prénom :</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" value="{{ $client->prenom }}/><br/>
                    <label class="control-label" for="adresse">Adesse :</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" value="{{ $client->adresse }}/><br/>
                    <label class="control-label" for="email">Email :</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $client->email }}/><br/>
                    <label class="control-label" for="telephone">Téléphone :</label>
                    <input class="form-control" type="tel" name="telephone" id="telephone" value="{{ $client->telephone }}/><br/>
            </div>
            <div class="form-group">
                    <label class="control-label" for="nomem">Nom employeur :</label>
                    <input class="form-control" type="text" name="nomem" id="nomem" value="{{ $client->nomem }}/><br/>
                    <label class="control-label" for="raison">Raison sociale :</label>
                    <input class="form-control" type="text" name="raison" id="raison" value="{{ $client->raison }}/><br/>
                    <label class="control-label" for="adem">Adresse employeur :</label>
                    <input class="form-control" type="text" name="adem" id="adem" value="{{ $client->adem }}/><br/>
            </div>
            <div class="form-group">
                        <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                        <input class="btn btn-danger"  type="reset" name="annuler" id="annuler" value="Annuler">
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
