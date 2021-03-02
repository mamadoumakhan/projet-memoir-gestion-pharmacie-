<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneDeFacture extends Model
{
    protected $fillable = array('id_facture','id_article');
    public static $rules = array(
                                 'id_article'=>'required|integer',
                                 'id_facture'=>'required|integer',
                                 
                                );
        // public function ligneDeFacture()
        //    {
        //        return $this->belongsTo(related,'\App\Facture');
        //    }
           protected $primaryKey = 'id_ligne_de_facture';
}