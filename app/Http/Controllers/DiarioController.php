<?php

namespace App\Http\Controllers;
use App\Models\Diario;
use Illuminate\Http\Request;

class DiarioController extends Controller
{
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
