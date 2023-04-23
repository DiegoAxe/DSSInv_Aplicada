<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Uso de GET
        $clientes = Cliente::all();

        echo("<!-- Regreso de Index Exitoso = Proceso de Postman Exitoso -->");

        return view('index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Uso de POST 
        $ClienteNuevo = new Cliente;
        $ClienteNuevo->Nombres = $request->input('Nombres');
        $ClienteNuevo->Apellidos = $request->input('Apellidos');
        $ClienteNuevo->Edad = $request->input('Edad');
        $ClienteNuevo->Salario = $request->input('Salario');
        $ClienteNuevo->save();

        echo("<!-- Registro Nuevo Exitoso=>
        Nombres: ". $request->input('Nombres')."
        Apellidos: ". $request->input('Apellidos')."
        Edad: ". $request->input('Edad')."
        Salario: ". $request->input('Salario')." -->");

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //Uso de GET
        return Cliente::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('modify', ['cliente' => $cliente]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //Uso de PATCH
        
        $ClienteEspecifico = Cliente::findOrFail($id);
        $ClienteEspecifico->Nombres = $request->input('Nombres');
        $ClienteEspecifico->Apellidos = $request->input('Apellidos');
        $ClienteEspecifico->Edad = $request->input('Edad');
        $ClienteEspecifico->Salario = $request->input('Salario');
        $ClienteEspecifico->save();

        echo("<!-- Registro Editado Exitoso=>
        Id Alterado: $id
        Nombres: ". $request->input('Nombres')."
        Apellidos: ". $request->input('Apellidos')."
        Edad: ". $request->input('Edad')."
        Salario: ". $request->input('Salario')." -->");

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //Uso de DELETE
        $ClienteEspecifico = Cliente::findOrFail($id);
        $ClienteEspecifico->delete();

        echo("<!-- Registro Eliminado Exitoso=>
        Id Eliminado: $id -->");

        return redirect()->route('cliente.index');
    }

}
