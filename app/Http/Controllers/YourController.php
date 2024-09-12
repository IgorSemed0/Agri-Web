<?php

namespace App\Http\Controllers;

use App\Models\DadoSensor;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function getLatestData()
{
    // Pegue os dados mais recentes, por exemplo, ordenados por ID ou timestamp
    $dados = DadoSensor::orderBy('created_at', 'desc')->take(1)->get();

    return response()->json($dados);
}

}
