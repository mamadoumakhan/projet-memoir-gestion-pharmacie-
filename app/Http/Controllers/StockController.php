<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Models\Tableau;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getAll()
    {
        $stock = stock::paginate(2);
        $stock = stock::All();
        return view('stock',['stocks'=>$stock]);
    }
    public function update(request $request,stock $stock)
    {
        $stock->update( $request->All());
        return redirect()->route('getAllstock');
    }
    
    public function delete($id_stock)
    { 
        $stock = stock::find($id_stock);
        if($stock != null)
        {
            $stock->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAllstock");
    }
    public function store(request $request)
    {
       $stock = new stock();
       $stock->nom_stock=$request->nom_stock;
      $result = $stock->save();  
      return redirect()->route("creer_stock");
    }
    public function listestock()
    {
        $stocks=stock::All();
        return view('/stock')->with('stocks', $stocks);   
    }
}
