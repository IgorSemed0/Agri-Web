<?php

// app/Http/Controllers/CulturaController.php
namespace App\Http\Controllers;

use App\Models\Cultura;
use App\Models\MaxValor;
use Illuminate\Http\Request;

class CulturaControllers extends Controller
{
    public function inserirCultura(Request $request)
    {
        // Validação simples para os dados
        $validated = $request->validate([
            'cultureTittle' => 'required|string|max:255',
            'soilHumidity' => 'required|numeric',
            'soilTemperature' => 'required|numeric',
            'soilConductivity' => 'required|numeric',
            'airTemperature' => 'required|numeric',
            'airHumidity' => 'required|numeric',
            'soilPH' => 'required|numeric',
            'nitrogen' => 'required|numeric',
            'phosphorus' => 'required|numeric',
            'potassium' => 'required|numeric',
        ]);

        // Cria a cultura
        $cultura = Cultura::create(['cultureTittle' => $validated['cultureTittle']]);

        // Associa os valores máximos à cultura
        $cultura->maxvalor()->create([
            'soilHumidity' => $validated['soilHumidity'],
            'soilTemperature' => $validated['soilTemperature'],
            'soilConductivity' => $validated['soilConductivity'],
            'airTemperature' => $validated['airTemperature'],
            'airHumidity' => $validated['airHumidity'],
            'soilPH' => $validated['soilPH'],
            'nitrogen' => $validated['nitrogen'],
            'phosphorus' => $validated['phosphorus'],
            'potassium' => $validated['potassium'],
        ]);

        return response()->json(['message' => 'Cultura e valores adicionados com sucesso!'], 201);
    }
}

