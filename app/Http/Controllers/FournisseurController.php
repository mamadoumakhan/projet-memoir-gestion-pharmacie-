<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Models\Produit;

class FournisseurController extends Controller
{
    public function getAll()
    {
        $fournisseur = Fournisseur::paginate(2);
        $fournisseur = Fournisseur::All();
        return view('fournisseur',['fournisseurs'=>$fournisseur]);
    }
    public function update(request $request,fournisseur $fournisseur)
    {
        $fournisseur->update( $request->All());
        return redirect()->route('getAllfournisseur');
    }
    
    public function delete($id_fournisseur)
    { 
        $fournisseur = Fournisseur::find($id_fournisseur);
        if($fournisseur != null)
        {
            $fournisseur->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAllfournisseur");
    }
    public function store(request $request)
    {
       $fournisseur = new fournisseur();
       $fournisseur->nom_fournisseur=$request->nom_fournisseur;
       $fournisseur->email_fournisseur=$request->email_fournisseur;
       $fournisseur->telephone_fournisseur=$request->telephone_fournisseur; 
      $result = $fournisseur->save();  
      return redirect()->route("creer_fournisseur");
    }
    public function listefournisseur()
    {
        $fournisseurs=Fournisseur::All();
        return view('/fournisseur')->with('fournisseurs', $fournisseurs);   
    }
}



//     public function add()
//     {
//         return view('fournisseur.add');
//     }
//     public function getAll()
//     {
//         $fournisseurs = Fournisseur::paginate(2);

//        $fournisseurs = Fournisseur::All();
//         return view('fournisseur.list',['fournisseurs'=>$fournisseurs]);
//     }
//     public function edit($id)
//     {
//         $fournisseur = Fournisseur::find($id);
//         return view('fournisseur.edit',['fournisseurs'=>$fournisseur]);
//     }
//     public function update(request $request)
//     {
//         $fournisseur = Fournisseur::find($request->id);
//         $fournisseur->nom_fournisseur=$request->nom_fournisseur;
//         $fournisseur->email_fournisseur=$request->email_fournisseur;
//         $fournisseur->telephone_fournisseur=$request->telephone_fournisseur;
//         $result = $fournisseur->save();
//        // return $this->getAll();
//         return redirect()->route('getAllfournisseur');
//     }
//     public function delete($id)
//     {
//         $fournisseur = Fournisseur::find($id);
//         if($fournisseur != null)
//         {
//             $fournisseur->delete();
//         }
//         return $this->getAll();
//     }
//     public function persiste(request $request)
//     {
//        // echo $request->nom;
//        $fournisseur = new Fournisseur();
//        $fournisseur->nom_fournisseur=$request->nom_fournisseur;
//        $fournisseur->email_fournisseur=$request->email_fournisseur;
//        $fournisseur->telephone_fournisseur=$request->telephone_fournisseur;
//       // $fournisseur->save();
//       // return $this->add();
//       $result = $fournisseur->save();
//       return redirect()->route('getAllfournisseur');
//       // return view('fournisseur.add',['confirmation'=>$result]);
//     }

//     // public function listefournisseur()
//     // {

//     //     $fournisseur=fournisseur::All();
//     //     return view('/fournisseur');   

//     // }
    
//     // public function store(request $request)
//     // {
//     //    $fournisseur = new fournisseur();
//     //    $fournisseur->nom_fournisseur=$request->nom_fournisseur;
      
//     //   // $fournisseur->save();
//     //   // return $this->add();
//     //   $result = $fournisseur->save();
//     //   return redirect()->route("afficher_fournisseur");
//     //   // return view('fournisseur.add',['confirmation'=>$result]);
//     // }
// }
