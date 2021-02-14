<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    protected $fillable = array('id_depot','id_agent','id_client','date_depot');
    public static $rules = array('id_depot'=>'required|min:3',
                                 'id_agent'=>'required|min:3',
                                 'id_client'=>'required|integer',
                                 'date_depot'=>'required|integer'
                                );
}
