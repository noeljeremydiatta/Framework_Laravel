<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model 
{
    protected $fillable = array('clients_id','user_id', 'tyco', 'agence', 'rib', 'numcompte', 'montant', 'salaire', 'profession,', 'frais', 'agios');
    public static $rules = array('clients_id'=>'required|integer',
                                 'user_id'=>'required|bigInteger',
                                 'tyco'=>'required|min:10',
                                 'agence'=>'required|min:10',
                                 'rib'=>'required|min:5',
                                 'numcompte'=>'required|min:10',
                                 'montant'=>'required|min:4',
                                 'salaire'=>'required|min:5',
                                 'profession'=>'required|min:10',
                                 'frais'=>'required|min:4',
                                 'agios'=>'required|min:4'
                                    );
    
    public function clients()
    {
        return $this->belongsTo('App\Client');
    }
}
