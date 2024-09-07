<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::with('tendencia')->get();
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    public function show(Produto $produto)
    {
        return $produto->load('tendencia');
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json($produto);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(null, 204);
    }
}
