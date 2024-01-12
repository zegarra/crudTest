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
    }
    public function show(Personas $personas)
    {
        //obtener
    }
    public function edit(Personas $personas)
    {
        //
        return "aqui se actualiza";
    }
    public function update(Request $request, Personas $personas)
    {
        //
    }
    public function destroy(Personas $personas)
    {
        //
    }
}
