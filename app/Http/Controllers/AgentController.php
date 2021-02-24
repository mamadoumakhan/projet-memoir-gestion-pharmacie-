<?php

namespace App\Http\Controllers;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agent;

class AgentController extends Controller
{
    public function store(Request $request)
    {
        $id = Utilisateur::create($request->All());
        $agent = Agent::create(['id_utilisateur'=>$id->id_utilisateur]);
        return redirect()->route('agent.index');
    }
    public function update(Request $request,Utilisateur $utilisateur)
    {
        $utilisateur->update($request->All());
        return redirect()->route('agent.index');
    }
    public function index()
    {
        $agent = DB::table('agents');
        join('utilisateurs','utilisateur.id_utilisateur','=','agent.id_utilisateur')
        ->get();
        return view('agent')->with('agents',$agents);
    }
    public function delete($id)
    {
        $agent = Agent::find($id);
        if($agent != null)
        {
            $agent->delete();
        }
        // return $this->getAll();
        return redirect()->route('agent.index');
    }
    public function edit($id)
    {
        $agent = Agent::find($id);
        return view('agent',['agents'=>$agent]);
    }
}
