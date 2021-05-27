<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Vacuna;

class UsuariosController extends Controller
{
    public function agregaUsuario()
    {
        $Usuario = Usuarios::all();
        return view('IngresarDatosU')->with('Usuario',$Usuario);
    }

    public function muestraUsuario()
    {
        $Usuario = Usuarios::all();
        return view('muestraUsuario')->with('Usuario',$Usuario);
        
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {

        $Usuario = Usuarios::all();
        $nuevoUsuario = new Usuarios;
        $nuevoUsuario->Nombre = $request->Nombre;
        $nuevoUsuario->ApellidoP = $request->ApellidoP;
        $nuevoUsuario->ApellidoM = $request->ApellidoM;
        $nuevoUsuario->Direccion = $request->Direccion;
        $nuevoUsuario->Telefono = $request->Telefono;
        
        $nuevoUsuario->save();

        return  redirect('/agregaUsuario');
    
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
        $nuevoUsuario = Usuarios::find($id);
        return view('edicionUsuario')->with('Usuario',$nuevoUsuario);
    }

    public function guardaEdicion2(Request $request)
    {
        $nuevoUsuario = Usuarios::find($request->id);
        $nuevoUsuario->Nombre = $request->Nombre;
        $nuevoUsuario->ApellidoP = $request->ApellidoP;
        $nuevoUsuario->ApellidoM = $request->ApellidoM;
        $nuevoUsuario->Direccion = $request->Direccion;
        $nuevoUsuario->Telefono = $request->Telefono;       
        $nuevoUsuario->save();
        
        return redirect('/muestraUsuario');
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
        $Usuario = Usuarios::find($id);
        $Usuario->delete();
        return redirect('muestraUsuario');
    }
}
