<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoSensor;
use App\Models\Cultura;
use App\Models\MaxValorController;

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
        $maxvalores = MaxValorController::all();
        if ($dados->isEmpty()) {
            return view('exibirdados', ['mensagem' => 'Nenhum dado disponível.']);
        }
   
        $dadosFiltrados = $dados->filter(function ($dado) use ($culturas, $maxvalores) {
        // Encontrar o valor da cultura correspondente
        $cultura = $culturas->firstWhere('sensor_type', $dado->sensor_type);
        // Encontrar o valor máximo correspondente
        $max = $maxvalores->firstWhere('sensor_type', $dado->sensor_type);
        
        // Verifica se o valor do sensor está entre os limites definidos pela cultura e os valores máximos permitidos
        return $cultura && $max && 
               $dado->valor >= $cultura->valor_minimo && 
               $dado->valor <= $cultura->valor_maximo && 
               $dado->valor <= $max->valor_maximo;
    });

    // Retorna a view com os dados filtrados
    return view('exibirdados', [
        'dadosFiltrados' => $dadosFiltrados,'dados' => $dados // Exibe apenas os dados que atendem aos critérios
    ]);
}

  
      
}
