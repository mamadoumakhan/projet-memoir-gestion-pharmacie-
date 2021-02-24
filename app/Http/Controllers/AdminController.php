<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Utilisateur;

class AdminController extends Controller
{
      
    public function listeadmin()
    {

        $admins=Admin::All();
        return view('/admin')->with('admins', $admins);   

    }
    public function store(request $request)
    {
       // echo $request->nom;
       $admin = new Admin();
       $admin->nom_admin=$request->nom_admin;
      
      // $admin->save();
      // return $this->add();
      $result = $admin->save();
      return redirect()->route("afficher_admin");
      // return view('admin.add',['confirmation'=>$result]);
    }
    // public function delete($id)
    // {
    //     $categorie = Categorie::find($id);
    //     if($categorie != null)
    //     {
    //         $categorie->delete();
    //     }
    //     // return $this->getAll();
    //     return redirect()->route("afficher_categorie");
    // }
    //  public function edit($id){
    //     $categorie = Categorie::where('id', $id)->firstOrFail();
    //     return view('/categorie', compact('categorie'));
    //  }
    //  //fin nouvelle teste
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

}
