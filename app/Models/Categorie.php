<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = array('nom_categorie');
    public static $rules = array(
                                 'nom_categorie'=>'required|min:4'
                                );
    public function tableau()
    {
        return $this->belongsTo(related,'App\Tableau');
    }
    public function produits()
    {
        return $this->hasMany(related,'App\Produit');
    }
    protected $primaryKey = 'id_categorie';
}
