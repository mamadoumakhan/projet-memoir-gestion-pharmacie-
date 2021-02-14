<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tableau extends Model
{
    protected $fillable = array('id_stock','nom_tableau','description_tableau');
    public static $rules = array('id_stock'=>'required|integer',
                                 'nom_tableau'=>'required|min:4',
                                 'description_tableau'=>'required|min:4'
                                );
    public function tableau()
        {
            return $this->belongsTo(related,'App\Stock');
        }
    public function categorie()
        {
            return $this->hasMany(related,'App\Categorie');
        }
}