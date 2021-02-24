<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class TestsController extends Controller
{
    public function create()
    {
        return view('infos');
    }
 
    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
}