<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;

class CategorieController extends Controller
{
    
    public function listeCategorie()
    {

        $categories=categorie::All();
        return view('/categorie')->with('categories', $categories);   

    }
    // public function store(Request $request)
    // {
    //     Categorie::create($request->All());
        
    //     return redirect()->route('afficher_categorie');
    //     //return redirect()->route('categorie');
    // }
    public function store(request $request)
    {
       // echo $request->nom;
       $categorie = new Categorie();
       $categorie->nom_categorie=$request->nom_categorie;
      
      // $categorie->save();
      // return $this->add();
      $result = $categorie->save();
      //return view('/categorie');   
      return redirect()->route("creer_categorie");
      // return view('categorie.add',['confirmation'=>$result]);
    }
    // public function edit(Categorie $categorie)
    // {
      
    //     $categorie = Categorie::find($id_categorie);
    //     return view('/categorie')->with('categories', $categories);   
    // }
    // public function delete($id_categorie)
    // {
        
    //     $categorie = Categorie::find($id_categorie);
    //     if($categorie != null)
    //     {
    //         $categorie->delete();
    //     }
    //     return $this->getAll();
    // }
    //nouvelle teste
    // public function delete($id){
    //     Categorie::destroy($id);
    //     //return redirect()->action('CategorieController@index');
    //     return view('/categorie');
    //  }
     //nouveau essaie
    // public function delete($id)
    // {
    //     Categorie::find($id)->delete();
 
    //     return redirect()->route("afficher_categorie");
    // }
    //fin nouveau essaie
    //la methode delete de ngor 
   
    //fin de la methode delete de ngor 
    public function delete($id_categorie)
    {
        
        $categorie = Categorie::find($id_categorie);
        if($categorie != null)
        {
            $categorie->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAllcategorie");
    }
    //  public function edit($id){
    //     $categorie = Categorie::where('id_categorie', $id_categorie);
    //     return view('/categorie', compact('categorie'));
    //  }
     //fin nouvelle teste
    // public function editcategorie($id_categorie)
    // {
    //     $categorie = Categorie::find($id_categorie);
    //     return view('/categorie', ['categorie'=>$categorie]);   
    // }
    // public function update(Request $request)
    // {
    //      //$categorie = Categorie ::where('id',$id_categorie);
    //     $categorie = Categorie::find($request->id_categorie);
    //     $categorie->nom_categorie=$request->nom_categorie;
    //     $result = $categorie->save();
    //     return $this->getAll();
    // }

    // // 
    // public function update(request $request,Categorie $categorie)
    // {
    //    // $categorie = Categorie::find($request->id_categorie);
    //    // $categorie->nom_categorie=$request->nom_categorie;
       
    //    // $result = $categorie->save();
    //    // return $this->getAll();
    // return redirect()->route('getAllcategorie');
    
    // }
    public function update(request $request,Categorie $categorie)
    {
        $categorie->update( $request->All());
        return redirect()->route('getAllcategorie');
    }
    // public function modifier(request $request,Categorie $categorie)
    // {
    //     $categorie = Categorie::find($request->id_categorie);
    //     $categorie->nom_categorie=$request->nom_categorie;
        
    //     $result = $categorie->save();
    //     // return $this->getAll();
    //     return redirect()->route('getAllcategorie');
    // }
    public function getAll()
    {
        $categories = Categorie::paginate(2);

       $categories = Categorie::All();
       return view('categorie',['categories'=>$categories]);
    }

    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return view('/categorie'); 
    // }

    // public function edit($id_categorie)
    // {
    //     $categorie = Categorie::find($id_categorie);
    //     return view('/categorie')->with('categories', $categories);
    // }
}