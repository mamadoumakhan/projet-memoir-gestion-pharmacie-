<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Tableau;
use App\Models\LigneDeFacture;
use Illuminate\Http\Request;

class LigneDeFactureController extends Controller
{
    public function store(request $request)
    {
        // LigneDeFacture::create($request->All());

    }
    public function getAll()
    {
        $categories = Categorie::All();
        $produits = DB::table('produits')
        ->join('categories', 'Produits.id_categorie', '=', 'categories.id_categorie')->get();
        return view('/vente')->with('produits', $produits)->with('categories', $categories);
    }

    // public function edit($id)
    // {
    //     $produit = Produit::find($id);
    //     return view('produit',['produits'=>$produit]);
    // }
    // public function update(request $request,Produit $produit)
    // {
    //     $produit->update( $request->All());
    //     return redirect()->route("creer_produit");
    // }
    // public function delete($id)
    // {
    //     $produit = Produit::find($id);
    //     if($produit != null)
    //     {
    //         $produit->delete();
    //     }
    //     return redirect()->route('creer_produit');
    // }
    public function inserer(Request $request,$id)
    {
        $prod = Produit::find($id);
        if($prod != null)
        {
            $vente=LigneDeFacture::create([
                'id_produit'=>$prod->id_produit,
                'id_utilisateur'=>1,
                'id_facture'=>1,
                'quantite'=>4,
            ]);
            $prod->update( $request->All());
        }
        // return redirect()->route("getAllvente")->with('produi', $produi);
       // return view('/vente')->with('produits', $produits)->with('categories', $categories);
       
       $categories = Categorie::All();
       $produits = DB::table('produits')
       ->join('categories', 'Produits.id_categorie', '=', 'categories.id_categorie')->get();
       return view('/vente')->with('produits', $produits)->with('categories', $categories)->with('prod', $prod);
    }
}
