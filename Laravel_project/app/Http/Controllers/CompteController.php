<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    public function add()
    {
        return view('compte.add');
    }
    public function getAll()
    {
        $liste_comptes = Compte:: paginate(2);
        //$liste_comptes = Compte::All();
        return view('compte.list', ['liste_comptes'=>$liste_comptes]);
    }
    public function edit($id)
    {
        return view('compte.edit');
    }
    public function update()
    {
        return $this->getAll();
    }

    public function delete($id)
    {
        $compte = Compte::find($id);
        //$comptes = DB::select("SELECT * FROM comptes where id_compte=?",[$id]);
        //var_dump($comptes);
        //die;
        if($compte != null)
        {
            $compte->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
       
        $compte = new Compte(); 
        $compte->clients_id = 1;
        $compte->user_id = 1;
        $compte->tyco = $request->tyco;
        $compte->agence = $request->agence;
        $compte->rib = $request->rib;
        $compte->numcompte = $request->numcompte;
        $compte->montant = $request->montant;
        $compte->salaire = $request->salaire;
        $compte->profession = $request->profession;
        $compte->frais = $request->frais;
        $compte->agios = $request->agios;

        $result = $compte->save();// 1 ou 0

        return view('compte.add', ['confirmation'=>$result]);
    }
}
