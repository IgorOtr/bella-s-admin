<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = DB::table('categorias')->get();
        return view('categoria/index', compact('categorias'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Categoria $category)
    {

        $category->nome_categoria = $request->nome_categoria;
        
        if ($category->save()) {
            // Simulate a delay to simulate the process of creating a record in the database.
            sleep(2);

            return redirect()->route('categoria-index')->with('success', 'Categoria criada com sucesso!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria, string $id)
    {
        $categoria_to_edit = Categoria::find($id);
        return view('categoria/edit', compact('categoria_to_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $category = Categoria::find($request->id);
        $category->nome_categoria = $request->nome_categoria;

        if ($category->save()) {
            sleep(2);
            return redirect()->route('categoria-index')->with('success', 'Categoria alterada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Categoria $categoria)
    {
        Categoria::destroy($id);
        sleep(2);
        return redirect()->route('categoria-index');
    }
}
