<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Vacuna;
use App\Lista;
use Amenadiel\JpGraph\Graph; 
use Amenadiel\JpGraph\Plot;

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

    public function graph(){
        require_once '../vendor/autoload.php';

        $Listas = \App\Lista::all();
        //inicializo variables
        $Vacunados = 0;
        $NoVacunados = 0;
        $total=0;
        foreach ($Listas as $L) {
            if ($L->Decision == 1) {
                $Vacunados++;
            } elseif ($L->Decision == 2) {
                $NoVacunados++;
            }
            $total++;
        }
        $porcentaje_Vacunados = $Vacunados * $total / 100;
        $porcentaje_NoVacunados = $NoVacunados* $total / 100;
         // Create the Pie Graph.
        $graph = new Graph\PieGraph(350, 250);
        $graph->SetBox(true);
        $data = array($porcentaje_Vacunados, $porcentaje_NoVacunados);
        $p1   = new Plot\PiePlot($data);
        $graph->title->Set("Personas Vacunadas: " . $total . "");
        $p1->ShowBorder();
        $p1->SetColor('black');
        $p1->SetSliceColors(array('#1E90FF', '#2E8B57'));

        $graph->Add($p1);
        //dd($graph->Stroke());
        $graph->Stroke();
        /*
        $graph = new Graph\PieGraph(350, 250);
        $graph->title->Set("A Simple Pie Plot");
        $graph->SetBox(true);

        $data = array(40, 21, 17, 14, 23);
        $p1   = new Plot\PiePlot($data);
        $p1->ShowBorder();
        $p1->SetColor('black');
        $p1->SetSliceColors(array('#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3'));

        $graph->Add($p1);
        $graph->Stroke();
        return back()->with($graph->Stroke());*/
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
