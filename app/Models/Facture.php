<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = array('id_client','type_paiement','date_facture');
    public static $rules = array('id_client'=>'required|integer',
                                 'type_paiement'=>'required|min:4',
                                 'date_facture'=>'required|min:3'
                                );
        public function ligneDeFacture()
            {
                return $this->hasMany(related,'\App\LigneDeFacture');
            }
}
