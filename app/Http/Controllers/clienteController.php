<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * Método para abrir la vista de lista de todos los clientes que estén con el status activo
     */
    public function index(){
        $cliente = cliente::where("status","=",true)->get();
        return view("lista")->with("cliente",$cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * Método para mostrar el formulario de alta de nuevo cliente
     */
    public function create() {
        return view("alta");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * Método para guardar nuevo cliente
     */
    public function store(Request $request) {
        $cliente = new cliente();
        $cliente->name = $request->name;
        $cliente->age = $request->age;
        $cliente->country = $request->country;
        $cliente->save();

        return redirect()->route("index")->with("success","El cliente ".$cliente->name." ha sido guardado con éxito");
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
     * 
     * 
     * Método para abrir la vista Editar y pasar los datos encontrados vía ID del cliente
     */
    public function edit($id){
        $cliente = cliente::findOrFail($id);
        return view("editar")->with("cliente",$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     * Método para actualizar el cliente
     */
    public function update(Request $request, $id) {
        $cliente = cliente::findOrFail($id);
        $cliente->name = $request->name;
        $cliente->age = $request->age;
        $cliente->country = $request->country;
        $cliente->save();

        return redirect()->route("index")->with("success","El cliente ".$cliente->name." ha sido modificado con éxito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $cliente = cliente::findOrFail($id);
        $cliente->status = false;
        $cliente->save();

        return redirect()->route("index")->with("success","El cliente ".$cliente->name." ha sido eliminado con éxito");

    }
}
