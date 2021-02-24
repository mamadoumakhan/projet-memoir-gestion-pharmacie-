<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = array('prix_session', 'prix_public','tva','code_barre','posologie',
    'effet_indesirable','interdiction_medicamenteuse','grossesse','allaitement');
    public static $rules = array('prix_session'=>'required|integer',
                                 'prix_public'=>'required|integer',
                                 'tva'=>'required|decimal',
                                 'code_barre'=>'required|min:13',
                                 'posologie'=>'required|min:4',
                                 'effet_indesirable'=>'required|min:4',
                                 'interdiction_medicamenteuse'=>'required|min:4',
                                 'grossesse'=>'required|min:4',
                                 'allaitement'=>'required|min:4');
    protected $primaryKey = 'id_notice';
}
