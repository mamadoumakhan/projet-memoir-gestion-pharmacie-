<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory; protected $fillable = array('nom_utilisateur', 'prenom_utilisateur','email_utilisateur', 'telephone_utilisateur');
    public static $rules = array('nom_utilisateur'=>'required|min:2',
                                 'prenom_utilisateur'=>'required|min:3',
                                 'email_utilisateur'=>'required|min:10',
                                 'telephone_utilisateur'=>'required|min:9',
);  
  public function compte()
  {
      return $this->hasMany(related,'App\Compte');
  }
  protected $primaryKey = 'id_utilisateur';
}
