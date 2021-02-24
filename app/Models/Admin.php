<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = array('nom_admin', 'prenom_admin', 'email_admin', 'telephone_admin');
    public static $rules = array(//'id_utilisateur'=>'required|integer',
                                 'nom_admin'=>'required|min:2',
                                 'prenom_admin'=>'required|min:3',
                                 'email_admin'=>'required|min:10',
                                 'telephone_admin'=>'required|min:9',
);
protected $primaryKey = 'id_admin';

}
