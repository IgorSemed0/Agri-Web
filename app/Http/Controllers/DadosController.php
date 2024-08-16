<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoSensor;
use App\Models\Cultura;

class DadosController extends Controller
{
    public function receberDados(Request $request)
    {
        try {
            $dadosValidados = $request->validate([
                'soilHumidity' => 'nullable|numeric',
                'soilTemperature' => 'nullable|numeric',
                'airHumidity' => 'nullable|numeric',
                'airTemperature' => 'nullable|numeric',
                'soilConductivity' => 'nullable|numeric',
                'soilPH' => 'nullable|numeric',
                'nitrogen' => 'nullable|numeric',
                'phosphorus' => 'nullable|numeric',
                'potassium' => 'nullable|numeric',
            ]);

            DadoSensor::create($dadosValidados);

            return response()->json(['status' => 'success', 'message' => 'Dados recebidos e salvos com sucesso.']);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }


    public function exibirDados()
    {
        $dados = DadoSensor::all();
        $culturas = Cultura::all();
        if ($dados->isEmpty()) {
            return view('exibirdados', ['mensagem' => 'Nenhum dado disponível.']);
        }

        $dadosComuns = $culturas->intersect($dados);

        return view('exibirdados', ['dadosComuns' => $dadosComuns, 'dados' => $dados]);
    }
}
