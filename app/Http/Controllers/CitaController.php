<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importamos el modelo
use App\Cita;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listamos los registros de la tabla cita
        //declaramos array llamado cita donde se almacenara todo lo del metodo all de la clase cita
        //$array = tabla::all();
        $citas = cita::all();
        return $citas;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }
    public function desactivar(Request $request)
    {
        //
    }
    public function activar(Request $request)
    {
        //
    }

    
}
