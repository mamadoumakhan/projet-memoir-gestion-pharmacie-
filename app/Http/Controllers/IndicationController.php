<?php

namespace App\Http\Controllers;
use App\Models\Indication;
use App\Models\Produit;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function getAll()
    {
        $indication = Indication::paginate(2);
        $indication = Indication::All();
        return view('indication',['indications'=>$indication]);
    }
    public function update(request $request,indication $indication)
    {
        $indication->update( $request->All());
        return redirect()->route('getAllindication');
    }
    
    public function delete($id_indication)
    { 
        $indication = Indication::find($id_indication);
        if($indication != null)
        {
            $indication->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAllindication");
    }
    public function store(request $request)
    {
       $indication = new Indication();
       $indication->nom_indication=$request->nom_indication;
      $result = $indication->save();  
      return redirect()->route("creer_indication");
    }
    public function listeindication()
    {
        $indications=Indication::All();
        return view('/indication')->with('indications', $indications);   
    }
}
