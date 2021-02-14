<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = array('id_tableau','nom_categorie');
    public static $rules = array('id_tableau'=>'required|integer',
                                 'nom_categorie'=>'required|min:4'
                                );
    public function tableau()
    {
        return $this->belongsTo(related,'App\Tableau');
    }
    public function produit_categorie()
    {
        return $this->hasMany(related,'App\Produit');
    }
}
