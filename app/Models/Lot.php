<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = array('id_fournisseur','nom_lot', 'quantite_lot');
    public static $rules = array('id_fournisseur'=>'required|integer',
                                 'nom_lot'=>'required|min:2',
                                 'quantite_lot'=>'required|integer',
                                );
    public function lot()
     {
        return $this->belongsTo(related,'App\Fournisseur');
     }
     public function produit_lot()
     {
        return $this->hasMany(related,'App\Produit');
     }
}
