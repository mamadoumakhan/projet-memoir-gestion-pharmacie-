<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
class ProduitController extends Controller
{
    public function listeproduit()
    {
        $categories = Categorie::All();
        $produits = Produit::All();
        return view('/produit')->with('produits', $produits)->with('categories', $categories);   

    }
    // public function store(Request $request)
    // {
    //     Produit::create($request->All());
        
    //     return redirect()->route('getAllproduit');

    // }
    public function store(request $request)
    {
        Produit::create($request->all());
       // echo $request->nom;
    //    $produit = new Produit();
    //    $produit->nom_produit=$request->nom_produit;
    //    $produit->date_peremption=$request->date_peremption;
    //    $produit->etat=$request->etat;
    //    $produit->quantite=$request->quantite;
     //  $produit->id_categorie=$request->id_categorie;
      // $produit->user_id=$request->user_id;
      // $produit->save(); 
      // return $this->add();
      //$result = $produit->save();
    //   return redirect()->route('getAllproduit');
    return redirect()->route("creer_produit");
     // $categorie = Categorie::all();
     //  return view('produit.add',['confirmation'=>$result,'categories'=>$categories]);
    }
    public function getAll()
    {
        // $produit = Produit::paginate(5);
        $categories = Categorie::All();
        $produits = DB::table('produits')
        ->join('Cathegories', 'Produits.id_categorie', '=', 'Cathegories.id_categorie');
      
        return view('/produit')->with('produits', $produits)->with('categories', $categories);
    }
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('produit',['produits'=>$produit]);
    }
    // public function update(request $request)
    // {
    //    $produit = Produit::find($request->id);
    //    $produit->nom_produit=$request->nom_produit;
    //    $produit->date_peremption=$request->date_peremption;
    // //    $produit->etat=$request->etat;
    //    $produit->quantite=$request->quantite;
    //    $produit->id_categorie=$request->id_categorie;
    //  //  $produit->user_id=$request->user_id;
    //     $result = $produit->save();
    //    // return $this->getAll();
    //     return redirect()->route('getAllproduit');
    // }
    public function update(request $request,Produit $produit)
    {
        $produit->update( $request->All());
        return redirect()->route("creer_produit");
    }
    // public function delete(Produit $produit)
    // {
    //     $produit->delete();
    //     return redirect()->route('creer_produit');
    // }
    
    // public function add()
    // {
    //     // $categorie = Categorie::all();
    //     // return view('produit.add',['categories'=>$categorie]);
    //     return view('produit.add');
    // }
    // public function afficher()
    // {
    //     $produits=produit::All();
    //     $categories=categorie::All();
    //     return view('/produit')->with('produits', $produits)->with('categories', $categories);
    //}
    public function delete($id)
    {
        $produit = Produit::find($id);
        if($produit != null)
        {
            $produit->delete();
        }
        // return $this->getAll();
        return redirect()->route('creer_produit');
    }
  
    // public function persiste(request $request)
    // {
    //    // echo $request->nom_produit;
    //    $produit = new Produit();
    //    $produit->nom_produit=$request->nom_produit;
    //    $produit->date_peremption=$request->date_peremption;
    //    $produit->etat=$request->etat;
    //    $produit->quantite=$request->quantite;
    //    $produit->id_categorie=$request->id_categorie;
    //   // $produit->user_id=$request->user_id;
    //   // $produit->save(); 
    //   // return $this->add();
    //   $result = $produit->save();
    //   return redirect()->route('getAllproduit');
    //  // $categorie = Categorie::all();
    //  //  return view('produit.add',['confirmation'=>$result,'categories'=>$categories]);
    // }
}