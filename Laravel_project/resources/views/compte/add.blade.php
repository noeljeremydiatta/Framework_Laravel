@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des comptes</div>
                <div class="card-body">
                @if(isset($confirmation))
                @if($confirmation == 1)
                <div class="alert alert-success">Compte ajouté </div>
                @else
                <div class="alert alert-danger">Compte non ajouté</div>
                @endif
                @endif
                <form method="POST" action="/compte/persist"> 
                    @csrf
                    <div class ="form-group">
                        <label for="epargne">Compte Epargne</label>
                        <input type="radio" name="tyco" id="epargne"  value="epargne">
                        <label for="courant">Compte Courant</label>
                        <input type="radio" name="tyco" id="courant"  value="courant">
                        <label for="bloque">Compte Bloqué</label>
                        <input type="radio" name="tyco" id="bloque"  value="bloque">
                   
            </div>
                
            <div class="form-group">
                <label class="label-control" for="numag">Num agence :</label>
                <input class="form-control" type="number" name="agence" id="numag"/><br/>
             
                <label class="label-control" for="rib">RIB :</label>
                <input class="form-control" type="number" name="rib" id="rib"/><br/>
              
                <label class="label-control" for="numco">Num compte :</label>
                <input class="form-control" type="number" name="numcompte" id="numco"/><br/>
              
                <label class="label-control" for="montant">Montant :</label>
                <input class="form-control" type="number" name="montant" id="montant"/><br/>
              
                <label class="label-control" for="sal">Salaire :</label>
                <input class="form-control" type="number" name="salaire" id="sal"/><br/>
              
                <label class="label-control" for="prof">Profession :</label>
                <input class="form-control" type="text" name="profession" id="prof"/><br/>
              
              <div class="form-group">
                <label for="frais">Frais d'ouveture </label>
                <input type="radio" name="paie" id="frais"/>
              </div>
              <div class="form-group">
                <label for="agios">Agios trimestriel </label>
                <input type="radio" name="paie" id="agios"/>
              </div>
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
