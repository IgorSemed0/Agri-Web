<?php

namespace App\Http\Controllers;
use App\Models\Diario;
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

    public function culturas(){
        return view('site.culturas');
    }
    public function home(){
        return view('site.index');
    }

   

public function search(Request $request):View{
   
    $termoPesquisa = $request->input('search');
    $culturas = Cultura::where('cultureTittle', 'LIKE', '%' . $termoPesquisa . '%')->get();

    return view('site.view-cultura', ['culturas' => $culturas]);


}
public function Diario_index(Diario $diario){
    
   $diario=$diario->all();
   if ($diario->isEmpty()) {
    return view('site.diario', ['mensagem' => 'Diário vazio.']);
} 
   return view('site.diario',compact('diario'));
}

    public function Diario_create() {
        
        return view('site.new-diario');
    }
    
    public function Diario_store(Request $request){
        dd($request);
        $title=$request->input('title');
        $text=$request->input('text');
 Diario::creat([
'title'=>$title,
'text'=>$text
 ]);
 return view('site.diario');
    }

    
    public function Diario_show(){
        return view();
    }

}
