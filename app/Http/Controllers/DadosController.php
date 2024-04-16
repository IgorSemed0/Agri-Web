<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoSensor;

class DadosController extends Controller
{
    public function receberDados(Request $request)
    {
        try {
            $dadosValidados = $request->validate([
                'soilHumidity' => 'required|numeric',
                'soilTemperature' => 'required|numeric',
                'soilConductivity' => 'required|numeric',
                'soilPH' => 'required|numeric',
                'nitrogen' => 'required|numeric',
                'phosphorus' => 'required|numeric',
                'potassium' => 'required|numeric',
            ]);
            DadoSensor::create($dadosValidados);


            return response()->json(['status' => 'success', 'message' => 'Dados recebidos e salvos com sucesso.']);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['status' => 'success', 'message' =>$th]);

        }
    }

    public function exibirDados()
    {
        $dados = DadoSensor::all();

        if ($dados->isEmpty()) {
            return view('exibirdados', ['mensagem' => 'Nenhum dado disponível.']);
        }

        return view('exibirdados', ['dados' => $dados]);
    }

}
