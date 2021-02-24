<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use App\Models\Produit;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function getAll()
    {
        $notice = Notice::paginate(2);
        $notice = Notice::All();
        return view('notice',['notices'=>$notice]);
    }
    public function update(request $request,notice $notice)
    {
        $notice->update( $request->All());
        return redirect()->route('getAllnotice');
    }
    
    public function delete($id_notice)
    { 
        $notice = Notice::find($id_notice);
        if($notice != null)
        {
            $notice->delete();
        }
        // return $this->getAll();
        return redirect()->route("getAllnotice");
    }
    public function store(request $request)
    {
       $notice = new Notice();
       $notice->prix_session=$request->prix_session;
       $notice->prix_public=$request->prix_public;
       $notice->tva=$request->tva;
       $notice->code_barre=$request->code_barre;
       $notice->posologie=$request->posologie;
       $notice->effet_indesirable=$request->effet_indesirable;
       $notice->interdiction_medicamenteuse=$request->interdiction_medicamenteuse;
       $notice->grossesse=$request->grossesse;
       $notice->allaitement=$request->allaitement;
      $result = $notice->save();  
      return redirect()->route("creer_notice");
    }
    public function listenotice()
    {
        $notices=Notice::All();
        return view('/notice')->with('notices', $notices);   
    }
}