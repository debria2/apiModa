<?php

namespace App\Http\Controllers;

use App\Models\Tendencia;
use Illuminate\Http\Request;

class TendenciaController extends Controller
{
    public function index()
    {
        return Tendencia::with('produtos')->get();
    }

    public function store(Request $request)
    {
        $tendencia = Tendencia::create($request->all());
        return response()->json($tendencia, 201);
    }

    public function show(Tendencia $tendencia)
    {
        return $tendencia->load('produtos');
    }

    public function update(Request $request, Tendencia $tendencia)
    {
        $tendencia->update($request->all());
        return response()->json($tendencia);
    }

    public function destroy(Tendencia $tendencia)
    {
        $tendencia->delete();
        return response()->json(null, 204);
    }
}
