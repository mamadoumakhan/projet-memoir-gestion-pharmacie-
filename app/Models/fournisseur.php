<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    protected $fillable = array('nom_fournisseur', 'email_fournisseur', 'telephone_fournisseur');
    public static $rules = array('nom_fournisseur'=>'required|min:2',
                                 'email_fournisseur'=>'required|min:10',
                                 'telephone_fournisseur'=>'required|min:9',  
);
public function lot()
{
    return $this->hasMany(related,'App\Lot');
}
protected $primaryKey = 'id_fournisseur';
}