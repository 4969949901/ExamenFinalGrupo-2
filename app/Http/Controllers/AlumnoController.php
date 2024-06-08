<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Mostrar una lista de alumnos
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    // Mostrar el formulario para crear un nuevo alumno
    public function create()
    {
        return view('alumnos.create');
    }

    // Guardar un nuevo alumno en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'CARNE' => 'required|unique:alumno',
            'NOMBRE_ALUMNO' => 'required',
            'CORREO_INSTITUCIONAL' => 'required|email',
            'TELEFONO' => 'required'
        ]);

        Alumno::create($request->all());
        return redirect()->route('alumnos.index')->with('success', 'Alumno creado exitosamente.');
    }

    // Mostrar los detalles de un alumno específico
    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.show', compact('alumno'));
    }

    // Mostrar el formulario para editar un alumno existente
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.edit', compact('alumno'));
    }

    // Actualizar un alumno existente en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'NOMBRE_ALUMNO' => 'required',
            'CORREO_INSTITUCIONAL' => 'required|email',
            'TELEFONO' => 'required'
        ]);

        $alumno = Alumno::find($id);
        $alumno->update($request->all());
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado exitosamente.');
    }

    // Eliminar un alumno específico de la base de datos
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado exitosamente.');
    }
}
