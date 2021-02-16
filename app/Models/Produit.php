<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = array('id_categorie','id_lot','nom_produit', 'prix_session', 'prix_public', 'date_peremption','tva','code_barre','posologie',
    'effet_indesirable','interdiction_medicamenteuse','grossesse','allaitement','etat','quantite');
    public static $rules = array('id_categorie'=>'required|integer',
                                 'id_lot'=>'required|integer',
                                 'nom_produit'=>'required|min:4',
                                 'date_peremption'=>'required|min:3',
                               // 'tva'=>'required|decimal',
                                //'code_barre'=>'required|min:8',
                                //'posologie'=>'required|min:4',
                                //'effet_indesirable'=>'required|min:4',
                                //'interdiction_medicamenteuse'=>'required|min:4',
                                //'grossesse'=>'required|min:4',
                                //'allaitement'=>'required|min:4',
                                'etat'=>'required|min:1',
                                'quantite'=>'required|integer',
                                 );
    public function produit_indication()
        {
            return $this->belongsToMany(Indication::class);
        }
    public function produit_categorie()
        {
             return $this->belongsTo(related,'App\Categorie');
        }
    public function produit_lot()
        {
             return $this->belongsTo(related,'App\Lot');
        }
    public function produit_agent()
        {
            return $this->belongsToMany(Agent::class);
        }
}