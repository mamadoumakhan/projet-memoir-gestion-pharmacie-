<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = array('id_utilisateur','nom_agent', 'prenom_agent', 'email_agent', 'telephone_agent','etat_agent');
    public static $rules = array('id_utilisateur'=>'required|integer',
                                 'nom_agent'=>'required|min:2',
                                 'prenom_agent'=>'required|min:3',
                                 'email_agent'=>'required|min:10',
                                 'telephone_agent'=>'required|min:9',
                                 'etat_agent'=>'required|min:1',
);
    public function produit_agent()
        {
            return $this->belongsToMany(Produit::class);
        }
    public function depot()
        {
            return $this->belongsToMany(Client::class);
        }
}
