<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $fillable = array('nom_indication');
    public static $rules = array('nom_indication'=>'required|min:3'
                                );
        public function produit_indication()
            {
                return $this->belongsToMany(Produit::class);
            }
            protected $primaryKey = 'id_indication';
}