<?php

namespace App\Http\Controllers;

use App\Models\Tolva;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class crudAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tolvas = Tolva::all();

        return view('admin.crudadmin',compact('tolvas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.create-tolva');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_admin = Auth::user();
        
        
        $request->validate([
            'direccion'=>'required|string|max:255',
            'hora_inicio'=>'required',
            'hora_fin'=>'required',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
        ]);
            $estado = 0;
            if($request['estado'] == 'on'){
                $estado = 1;
            }else{
                $estado = 0;
            }
           
            $tolvaCreada = Tolva::create([

                "id_admin"=>$id_admin->id,
                "direccion"=>$request->direccion,
                "hora_inicio"=>$request->hora_inicio,
                "hora_fin"=>$request->hora_fin,
                "fecha_inicio"=>$request->fecha_inicio,
                "fecha_fin"=>$request->fecha_fin,
                "estado"=>$estado,
            ]);
                return redirect("/crudadmin");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tolva = Tolva::findOrfail($id);
        return view("admin.edit-tolvas", with(["tolva"=>$tolva]));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'direccion'=>'required|string|max:255',
            'hora_inicio'=>'required',
            'hora_fin'=>'required',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
        ]);
        
        if($request['estado'] == 'on'){
            $estado = 1;
        }else{
            $estado = 0;
        }

        $tolva = Tolva::findOrfail($id);
        $tolva->direccion = $request['direccion'];
        $tolva->hora_inicio = $request['hora_inicio'];
        $tolva->hora_fin = $request['hora_fin'];
        $tolva->fecha_inicio = $request['fecha_inicio'];
        $tolva->fecha_fin = $request['fecha_fin'];
        $tolva->estado = $estado;

        $tolva->save();
        return redirect('/crudadmin');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function eliminar(Request $request ){
        $tolva = Tolva::destroy($request['modalid']);
        return redirect ('/crudadmin');

    }
}
