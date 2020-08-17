@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des clients</div>
                <table class="table table-bordered table-striped">
                    <tr>
                    <th>ID</th>
                    <th>Statut</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Tel:</th>
                    <th>Employeur</th>
                    <th>Raison</th>
                    <th>Adresse employeur</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                    @foreach($liste_clients as $client)
                    <tr>
                    <td>{{ $client->id_client }}</td>
                    <td>{{ $client->stacli }}</td>
                    <td>{{ $client->typecli }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->nomem }}</td>
                    <td>{{ $client->raison }}</td>
                    <td>{{ $client->adem }}</td>
                    <td><a href="{{ route('editclient', ['id'=>$client->id])}}">Editer</a></td>
                    <td><a href="{{ route('deleteclient', ['id'=>$client->id])}}">Supprimer</a> </td>
                    </tr>
                    @endforeach
                </table>

                <div class="card-body">
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
