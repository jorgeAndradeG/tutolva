<?php

namespace App\Http\Controllers;

use App\Models\Tolva;
use Illuminate\Http\Request;

class VerTolvaController extends Controller
{
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verTolvas = Tolva::Where('estado',1)->get();
        return view('tolva.listaTolva', array('tolvas' => $verTolvas));
        
    }

    public function show($id)
    {
        
    }

}
