<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;

use App\Http\Requests\DatabseUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databases = Database::all();
        $databases = Database::orderBy('id', 'desc')->get();
        return view('database.index', compact('databases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('database.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([

            'nombre' => 'required',
            'servidor' => 'required',
            'estado' => 'required',
            'gestor' => 'required',
        ]);
            //echo $request->input('estado');
            //exit;
        // Crear un nuevo objeto Database con los datos del formulario
        $estado =($request->input('estado') ==1)?true:false;
        $database = Database::create([
            'nombre' => $request->input('nombre'),
            'servidor' => $request->input('servidor'),
            'estado' =>$estado,
            'gestor' => $request->input('gestor'),
        ]);
        // Guardar el nuevo registro en la base de datos
        $database->save();

        // Redirigir al índice de la base de datos con un mensaje de éxito
        return redirect()->route('database.index')->with('mensaje', 'Registro guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Database $database)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Database $database)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Database $database)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Database $database)
    {
        $database->delete(); // Eliminar el elemento de la base de datos
        return redirect()->back()->with('mensaje', 'Elemento eliminado correctamente');

    }
}
