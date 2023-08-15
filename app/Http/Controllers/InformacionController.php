<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informacions = Informacion::all();
        $informacions = Informacion::orderBy('id', 'desc')->get();
        return view('informacion.index', compact('informacions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required',
            'link' => 'required',
            'estado' => 'required',
            'lenguaje' => 'required',
            'db' => 'required',
            'servidor' => 'required',
            'version' => 'required',
            'fecha_instalacion' => 'required|date',
        ]);

        // Crear un nuevo objeto Informacion con los datos del formulario
        $informacion = new Informacion();
        $informacion->nombre = $request->input('nombre');
        $informacion->link = $request->input('link');
        $informacion->estado = $request->input('estado');
        $informacion->lenguaje = $request->input('lenguaje');
        $informacion->db = $request->input('db');
        $informacion->servidor = $request->input('servidor');
        $informacion->version = $request->input('version');
        $informacion->fecha_instalacion = $request->input('fecha_instalacion');
        $informacion->save();

        // Redirigir al índice de información con un mensaje de éxito
        return redirect()->route('informacion.index')->with('mensaje', 'Registro guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion $informacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informacion $informacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informacion $informacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informacion $informacion)
    {
        //
    }
}
