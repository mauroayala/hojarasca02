<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        Productos::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Se creo el nuevo producto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        return view('productos.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        return view('productos.edit', compact('productos'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $productos->update($request->all());

        return redirect()->route('productos.index')->with('success', 'el producto se ha actualizado de forma correcta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
