<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Lista;
use App\Vacuna;

class ListaController extends Controller
{
    public function create(Request $request)
    {
        $Lista = Lista::all();
        $nuevo = new Lista;
        $nuevo->Nombre = $request->Nombre;
        $nuevo->Vacuna = $request->Vacuna;
        $nuevo->FechaAplicacion = $request->FechaAplicacion;
        
        $nuevo->save();

        return redirect('/muestraVacunados');
    }

    public function vistaRegistro()
    {
        $Usuario = Usuarios::all();
        $Vacuna = Vacuna::all();
        return view('/asignaVacunas')->with('Usuario',$Usuario)->with('Vacuna',$Vacuna);
    }

    public function agregaVacunado()
    {
        $Vacunado = Lista::all();
        return view('/welcome')->with('Vacunado',$Vacunado);
    }

    public function muestraVacunados()
    {
        $Vacunado = Lista::all();
        return view('/muestraVacunados')->with('Vacunado', $Vacunado);
    }
}
