<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoSensor;
use App\Models\Cultura;
use App\Events\NewSensorData;

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
        // Pegar todos os dados de sensores e culturas
        $dados = DadoSensor::all();
        $culturas = Cultura::all();

        if ($dados->isEmpty() || $culturas->isEmpty()) {
            return view('exibirdados', ['mensagem' => 'Nenhum dado disponível ou cultura registrada.']);
        }

        // Array que vai armazenar os resultados
        $resultados = [];

        // Iterar sobre os dados do sensor
        foreach ($dados as $dado) {
            // Iterar sobre as culturas e verificar os parâmetros
            foreach ($culturas as $cultura) {
                // Comparar os dados do sensor com os valores da cultura
                $condicoes = [
                    $dado->soilPH >= $cultura->soilPH,
                    $dado->soilTemperature >= $cultura->soilTemperature,
                    $dado->airTemperature >= $cultura->airTemperature,
                    $dado->airHumidity >= $cultura->airHumidity,
                    $dado->nitrogen >= $cultura->nitrogen,
                    $dado->phosphorus >= $cultura->phosphorus,
                    $dado->potassium >= $cultura->potassium,
                    $dado->soilConductivity >= $cultura->soilConductivity,
                    $dado->soilHumidity >= $cultura->soilHumidity,
                ];

                // Se todas as condições forem verdadeiras, adicionar à lista de resultados
                if (count(array_filter($condicoes)) === count($condicoes)) {
                    $resultados[] = [
                        'cultura' => $cultura->cultureTittle,
                        'dados_sensor' => [
                            'soilPH' => $dado->soilPH,
                            'soilTemperature' => $dado->soilTemperature,
                            'airTemperature' => $dado->airTemperature,
                            'airHumidity' => $dado->airHumidity,
                            'nitrogen' => $dado->nitrogen,
                            'phosphorus' => $dado->phosphorus,
                            'potassium' => $dado->potassium,
                            'soilConductivity' => $dado->soilConductivity,
                            'soilHumidity' => $dado->soilHumidity,
                        ],
                    ];
                }
            }
        }



        return view('exibirdados', ['resultados' => $resultados, 'dados' => $dados]);
    }


    public function store(Request $request)
    {
        // Validação e armazenamento dos dados
        $dados = DadoSensor::create($request->all());

        // Dispara o evento
        event(new NewSensorData($dados));

        return response()->json(['message' => 'Dados enviados com sucesso!'], 200);
    }
    public function obterDadosAtuais()
    {
        $dados = DadoSensor::latest()->first(); // Obtém o dado mais recente
        return response()->json($dados);
    }
    public function compararCulturas(Request $request)
    {
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

        $culturas = Cultura::all();

        // Array para armazenar os resultados
        $resultado = null;

        // Iterar sobre as culturas e verificar os parâmetros
        foreach ($culturas as $cultura) {
            $condicoes = [
                $dadosValidados['soilPH'] >= $cultura->soilPH,
                $dadosValidados['soilTemperature'] >= $cultura->soilTemperature,
                $dadosValidados['airTemperature'] >= $cultura->airTemperature,
                $dadosValidados['airHumidity'] >= $cultura->airHumidity,
                $dadosValidados['nitrogen'] >= $cultura->nitrogen,
                $dadosValidados['phosphorus'] >= $cultura->phosphorus,
                $dadosValidados['potassium'] >= $cultura->potassium,
                $dadosValidados['soilConductivity'] >= $cultura->soilConductivity,
                $dadosValidados['soilHumidity'] >= $cultura->soilHumidity,
            ];

            // Se todas as condições forem verdadeiras, definir a cultura correspondente
            if (count(array_filter($condicoes)) === count($condicoes)) {
                $resultado = $cultura->cultureTittle;
                break; // Encontrou uma correspondência, não precisa continuar verificando
            }
        }

        return response()->json(['recomendacao' => $resultado]);
    }
}
