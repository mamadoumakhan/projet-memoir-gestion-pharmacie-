<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = array('id_utilisateur');
    public static $rules = array('id_utilisateur'=>'required|integer',
                                
);
public $incrementing = false;
protected $primaryKey = 'id_utilisateur';

}
