<?php

namespace App\Http\Controllers;

use App\Models\Tolva;
use Illuminate\Http\Request;

class DetalleTolvaController extends Controller
{
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function show($id)
    {
        $tolva = Tolva::findOrFail($id);
        return view('tolva.verTolva')->with(["tolva" => $tolva]);
    }

}
