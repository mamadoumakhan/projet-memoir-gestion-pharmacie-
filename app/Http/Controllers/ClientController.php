<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
   
    public function store(Request $request){
        Client::create($request->All());
     }
 }