<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //pag inicip
        $datos = Personas::all();
        return view('welcome', compact('datos'));
    }
    public function create()
    {
        //agregar
        return view('agregar');
    }
    public function store(Request $request)
    {
        //guardar
        // print_r($_POST);
        $personas=new Personas();
        $personas->apellido_paterno=$request->post('apellido_paterno');
        $personas->apellido_materno=$request->post('apellido_materno');
        $personas->nombre=$request->post('nombre');
        $personas->fecha_nacimiento=$request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with("success", "Agregado con exito¡");
    }
    public function show(Personas $personas)
    {
        //obtener
        return view("eliminar");
    }
    public function edit($id)
    {
        //
        //return view("actualizar");
        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));
    }
    public function update(Request $request, $id)
    {
        $personas = Personas::find($id);
        $personas->apellido_paterno=$request->post('apellido_paterno');
        $personas->apellido_materno=$request->post('apellido_materno');
        $personas->nombre=$request->post('nombre');
        $personas->fecha_nacimiento=$request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route('personas.index')->with("success", "Actualizado con exito¡");
    }
    public function destroy(Personas $personas)
    {
        //
    }
}
