@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liste des comptes</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                        <th>ID</th>
                        <th>type</th>
                        <th>Agence</th>
                        <th>Rib</th>
                        <th>Num compte</th>
                        <th>Montant</th>
                        <th>Salaire</th>
                        <th>Profession</th>
                        <th>frais</th>
                        <th>Agios</th>
                        <th>Action</th>
                        <th>Action</th>
                        </tr>
                        @foreach($liste_comptes as $compte)
                        <tr>
                        <td>{{ $compte->id_compte }}</td>
                        <td>{{ $compte->tyco }}</td>
                        <td>{{ $compte->agence }}</td>
                        <td>{{ $compte->rib }}</td>
                        <td>{{ $compte->numcompte }}</td>
                        <td>{{ $compte->montant }}</td>
                        <td>{{ $compte->salaire }}</td>
                        <td>{{ $compte->profession }}</td>
                        <td>{{ $compte->frais }}</td>
                        <td>{{ $compte->agios }}</td>
                        <td><a href="{{ route('editcompte', ['id'=>$compte->id])}}">Editer</a></td>
                        <td><a href="{{ route('deletecompte', ['id'=>$compte->id])}}">Supprimer</a> </td> 
                        {{-- <td><a href="/compte/delete/{{$compte->id_compte}}">Supprimer</a> </td>--}}
                        </tr>
                        @endforeach
                    </table>
                    {{ $liste_comptes->links() }}
    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
