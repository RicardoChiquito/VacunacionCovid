<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacuna;

class VacunaController extends Controller
{
    public function agregaVacuna()
    {
        $Vacuna = Vacuna::all();
        return view('IngresaDatosV')->with('Vacuna',$Vacuna);
    } 

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Vacuna = Vacuna::all();
        $nuevoVacuna = new Vacuna;
        $nuevoVacuna->Nombre = $request->Nombre;
        $nuevoVacuna->Fecha_Llegada = $request->Fecha_Llegada;
        
        $nuevoVacuna->save();

        return  redirect('/agregaVacuna');
    }

    public function muestraVacuna()
    {
        $Vacuna = vacuna::all();
        return view('muestraVacuna')->with('Vacuna',$Vacuna);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $nuevaVacuna = Vacuna::find($id);
        return view('edicionVacuna')->with('Vacuna',$nuevaVacuna);
    }

    public function guardaEdicion(Request $request)
    {
        $nuevaVacuna = Vacuna::find($request->id);
        $nuevaVacuna->Nombre = $request->Nombre;
        $nuevaVacuna->Fecha_Llegada = $request->Fecha_Llegada;
        
               
        $nuevaVacuna->save();
        
        return redirect('/muestraVacuna');
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
        $Vacuna = Vacuna::find($id);
        $Vacuna->delete();
        return redirect('muestraVacuna');
    }

    public function grafica()
    {
        return view('/ejemplo1');
    }
}
