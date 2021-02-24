<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('id_utilisateur', 'role_compte', 'date_creation_compte');
    public static $rules = array('id_utilisateur'=>'required|integer',
                                  'role_compte'=>'required|min:4',
                                  'date_creation_compte'=>'required|min:3',
);
  public function compte()
  {
      return $this->belongsTo(related,'App\Utilisateur');
  }
  protected $primaryKey = 'id_compte';
}