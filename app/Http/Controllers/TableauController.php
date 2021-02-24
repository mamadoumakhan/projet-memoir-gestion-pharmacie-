<?php

namespace App\Http\Controllers;
use App\Models\Tableau;
use App\Models\Categorie;
use App\Models\Stock;
use Illuminate\Http\Request;

class TableauController extends Controller
{
    public function getAll()
    {
       // $tableau = Tableau::paginate(2);
        $tableau = Tableau::All();
        return view('tableau',['tableaus'=>$tableau]);
    }
    public function update(request $request,tableau $tableau)
    {
        $tableau->update( $request->All());
        return redirect()->route('getAlltableau');
    }
    
    public function delete($id_tableau)
    { 
        $tableau = Tableau::find($id_tableau);
        if($tableau != null)
        {
            $tableau->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAlltableau");
    }
    public function store(request $request)
    {
       $tableau = new Tableau();
       $tableau->nom_tableau=$request->nom_tableau;
       $tableau->description_tableau=$request->description_tableau;
      $result = $tableau->save();  
      return redirect()->route("creer_tableau");
    }
    public function listetableau()
    {
        $tableaus=Tableau::All();
        return view('/tableau')->with('tableaus', $tableaus);   
    }
}
