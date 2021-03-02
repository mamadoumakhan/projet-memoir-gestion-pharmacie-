<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('id_utilisateur','montant_bon_client');
    public static $rules = array(
                                'id_utilisateur'=>'required|integer',
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
      public $incrementing = false;
        protected $primaryKey = 'id_utilisateur';
     
}