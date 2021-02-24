<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneDeFacture extends Model
{
    protected $fillable = array('id_produit','id_agent','id_facture','quantite');
    public static $rules = array('id_produit'=>'required|integer',
                                 'id_agent'=>'required|integer',
                                 'id_facture'=>'required|integer',
                                 'quantite'=>'required|integer'
                                );
        public function ligneDeFacture()
           {
               return $this->belongsTo(related,'\App\Facture');
           }
           protected $primaryKey = 'id_ligne_de_facture';
}