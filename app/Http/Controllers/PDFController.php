<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\lista;

class PDFController extends Controller
{
    public function PDF()
    {
        $pdf = \PDF::loadview('muestraVacunados');
        return $pdf->stream('NuevoReporte.pdf');
    }

    public function PDFVacunados()
    {
        $vacunados = lista::all();
        $pdf = \PDF::loadview('vacunados',compact('vacunados'));
        return $pdf->stream('vacunados.pdf');
    }

    public function DescargaPDFVacunados()
    {
        $vacunados = lista::all();
        $pdf = \PDF::loadview('vacunados',compact('vacunados'));
        return $pdf->download('vacunados.pdf');
    }
}
