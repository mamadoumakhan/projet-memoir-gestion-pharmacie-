<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = array('id_utilisateur','etat_agent');
    public static $rules = array(
                                 'id_utilisateur'=>'required|integer',
                                 'etat_agent'=>'required|min:1',
);
    public function produit()
        {
            return $this->belongsToMany(Produit::class);
        }
    public function depot()
        {
            return $this->belongsToMany(Client::class);
        }
        public $incrementing = false;
        protected $primaryKey = 'id_utilisateur';
}


