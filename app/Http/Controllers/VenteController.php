<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Tableau;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    // public function listevente()
    // {
    //     $categories = Categorie::All();
    //     $produits = Produit::All();
    //     return view('/vente')->with('produits', $produits)->with('categories', $categories);   

    // }
    public function store(request $request)
    {
        $categories = Categorie::All();
        Produit::create($request->all());
        return redirect()->route("creer_produit");
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
}
