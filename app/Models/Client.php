<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('nom_client', 'prenom_client', 'email_client', 'telephone_client','cni_client', 'adresse_client','montant_bon_client');
    public static $rules = array(
                                 'nom_client'=>'required|min:2',
                                 'prenom_client'=>'required|min:3',
                                 'email_client'=>'required|min:10',
                                 'telephone_client'=>'required|min:9',
                                 'cni_client'=>'required|min:13',
                                 'adresse_client'=>'required|min:2',
                                 'montant_bon_client'=>'decimal',
);
    public function facture()
      {
         return $this->hasMany(related,'App\Facture');
      }
    public function depot()
      {
        return $this->belongsToMany(Agent::class);
      }
      protected $primaryKey = 'id_client';
}