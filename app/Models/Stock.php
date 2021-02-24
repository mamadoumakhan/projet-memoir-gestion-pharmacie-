<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{ 
    protected $fillable = array('nom_stock');
    public static $rules = array('nom_stock'=>'required|min:4');
    
    public function tableau()
    {
        return $this->hasMany(related,'App\Tableau');
    }
    protected $primaryKey = 'id_stock';
}
