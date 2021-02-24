<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = array('nom', 'prenom', 'email', 'telephone','etat');
    public static $rules = array(
                                 'nom'=>'required|min:2',
                                 'prenom'=>'required|min:3',
                                 'email'=>'required|min:10',
                                 'telephone'=>'required|min:9',
                                 'etat'=>'required|min:1',
);
    public function produit()
        {
            return $this->belongsToMany(Produit::class);
        }
    public function depot()
        {
            return $this->belongsToMany(Client::class);
        }
        protected $primaryKey = 'id_agent';
}


