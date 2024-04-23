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
    
            public function Diario_store() {
    
                return view('site.new-diario');
            }
    
            public function Diario_create(Request $request){
                dd($request);
                $request->validate([ 'title'=>'required',
                     'text'=>'required']);
               
        Diario::creat([
        'title'=> $request->title,
        'text'=> $request->text
        ]);
        return redirect()->route('site.diario')->with('success', 'Registro criado com sucesso!');
            }
    
    
            public function Diario_show( $id){
            $diarios=Diario::find($id)->all();
            return view('site.diario-show', ['diarios' => $diarios]);
            }

            public function Diario_update(Request $request, $id){
                $request->validate([
                    'title'=>'required',
                    'text'=>'required'
                ]);
                $diario=Diario::find($id);
                $diario->update([
                    'title'=>$request->title,
                    'text'=>$request->text
                ]);
                return redirect()->route('site.diario')->with('success', 'Registro atualizado com sucesso!');

            }

            public function delete($id){
                $diario=Diario::find($id);
                $diario->delete();
                return redirect()->route('site.diario')->with('success', 'Registro excluído com sucesso!');
            }
}
