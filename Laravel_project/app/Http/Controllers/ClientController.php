<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add()
    {
        return view('client.add');
    }
    public function getAll()
    {
        $liste_clients = Client::All();
        return view('client.list', ['liste_clients'=>$liste_clients]);
    }
    public function edit($id)
    {
        return view('client.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
    public function delete($id)
    {
        return $this->getAll();
    }
    public function persist(Request $request)
    {
       
        $client = new Client(); 
        $client->stacli = $request->stacli;
        $client->typecli = $request->typecli;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->nomem = $request->nomem;
        $client->raison = $request->raison;
        $client->adem = $request->adem;

        $result = $client->save();// 1 ou 0

        return view('client.add', ['confirmation'=>$result]);
    }
}
