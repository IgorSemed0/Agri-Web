<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoSensor;
use App\Models\Cultura;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class DadosController extends Controller
{
    public function receberDados(Request $request)
    {
        try {
            $dadosValidados = $request->validate([
                'soilHumidity' => 'required|numeric',
                'soilTemperature' => 'required|numeric',
                'airHumidity' => 'required|numeric',
                'airTemperature' => 'required|numeric',
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
        $culturas = Cultura::all();
        if ($dados->isEmpty()) {
            return view('exibirdados', ['mensagem' => 'Nenhum dado disponível.']);
        }

        $dadosComuns = $culturas->intersect($dados);

        return view('exibirdados', ['dadosComuns' => $dadosComuns, 'dados' => $dados]);
    }






}
