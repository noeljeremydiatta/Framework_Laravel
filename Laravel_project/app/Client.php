<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('stacli', 'typecli', 'nom', 'prenom', 'adresse', 'email', 'telephone', 'nomem', 'raison', 'adem');
    public static $rules = array('stacli'=>'required|min:10',
                                 'typecli'=>'required|min:10',
                                 'nom'=>'required|min:2',
                                 'prenom'=>'required|min:3',
                                 'adresse'=>'required|min:20',
                                 'email'=>'required|min:30',
                                 'telephone'=>'required|min:9',
                                 'nomem'=>'required|min:10',
                                 'raison'=>'required|min:10',
                                 'adem'=>'required|min:10'
                                    );
    
    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
