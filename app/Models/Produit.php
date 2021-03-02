<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = array('id_categorie','id_tableau','prix_public','prix_session','tva','code_barre','interdiction_medicamenteuse','grossesse','posologie','effet_indesirable','nom_produit','allaitement');
    public static $rules = array(
                                 'id_categorie'=>'required|integer',
                                 'id_tableau'=>'required|integer',
                                 'nom_produit'=>'required|min:4',
                                //  'date_peremption'=>'required|min:3',
                                 'tva'=>'required|decimal',
                                 'code_barre'=>'required|min:8',
                                 'posologie'=>'required|min:4',
                                 'effet_indesirable'=>'required|min:4',
                                 'interdiction_medicamenteuse'=>'required|min:4',
                                 'grossesse'=>'required|min:4',
                                 'allaitement'=>'required|min:4',
                                 'prix_public'=>'required|min:4',
                                 'prix_session'=>'required|min:4',
                               
                                 );
    // public function produit_indication()
    //     {
    //         return $this->belongsToMany(Indication::class);
    //     }
    public function categories()
        {
             return $this->belongsTo(related,'App\Categorie');
        }
    public function tableaus()
        {
             return $this->belongsTo(related,'App\Tableau');
        }
    // public function produit_lot()
    //     {
    //          return $this->belongsTo(related,'App\Lot');
    //     }
    // public function produit_agent()
    //     {
    //         return $this->belongsToMany(Agent::class);
    //     }
    protected $primaryKey = 'id_produit';
   // protected $foreignKey = 'id_categorie';
}