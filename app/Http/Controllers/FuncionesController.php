<?php

namespace App\Http\Controllers;

use App\Models\funciones;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    /**S
     * Display a listing of the resource.
     */
    public function index()
    {
       //consultar la base de datos con todos los parametros 
      
       $funciones = funciones::all();
       return view('funciones.index', compact('funciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        //
    }
}
