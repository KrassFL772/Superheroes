<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Super_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Super_Controller::all(); 

        return view('Superheroes.index', compact('superheroes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Superheroes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'Nombre_Real' => 'required|max:50', 
            'Nombre_Super' => 'required|max:50', 
            'Fotografía' => 'required|max:100',
            'Información_Adnal' => 'required|max:200',
          ]); 
          Super_Controller::create($validatedData); 
        
          return redirect('/Superheores')->with('success', 'El héroe ha sido registrado exitosamente.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroe = Super_Controller::findOrFail($Super_ID); 

        return view('Superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superheroe = Super_Controller::findOrFail($Super_ID); 

        return view('Superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([ 
            'Nombre_Real' => 'required|max:50', 
            'Nombre_Super' => 'required|max:50', 
            'Fotografía' => 'required|max:100',
            'Información_Adnal' => 'required|max:200',
          ]); 
          Super_Controller::create($validatedData); 
        
          return redirect('/Superheroes')->with('success', 'El héroe ha sido actualizado exitosamente.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Super_ID)
    {
        $superheroe = Super_Controller::findOrFail($Super_ID); 
        $superheroe->delete(); 

        return redirect('/Superheroes')->with('success', 'El superhéroe ha sido eliminado de manera exitosa.');
    }
}
