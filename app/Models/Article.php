<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = array('id_produit','id_fournisseur','quantite','date_peremption','etat');
    public static $rules = array(
                                 'id_produit'=>'required|integer',
                                 'id_fournisseur'=>'required|integer',
                                 'quantite'=>'required|min:1',
                                 'date_peremption'=>'required|min:4',
                                 'etat'=>'string',
);
    protected $primaryKey = 'id_article';
}
