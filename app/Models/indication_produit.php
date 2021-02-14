<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indication_produit extends Model
{
    protected $fillable = array('id_indication','id_produit');
    public static $rules = array('id_indication'=>'required|integer',
                                 'id_produit'=>'required|integer'
                
                                );
}
