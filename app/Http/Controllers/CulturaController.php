<?php

namespace App\Http\Controllers;
use App\Models\Cultura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\MaxValorController;
class CulturaController extends Controller
{
    public function culturas(){
        return view('site.culturas');
    }
    public function home(){
        return view('site.Temp.index');
    }

   public function suporte(){
    return view ("site.suporte");
   }
   public function search(Request $request): View
   {
       $termoPesquisa = $request->input('search');

       $culturas = Cultura::where('cultureTittle', 'LIKE', '%' . $termoPesquisa . '%')->get();

       $valores = MaxValorController::all();

       $dados = [];


       foreach ($culturas as $index => $cultura) {
           $dados[] = [

               'cultura' => $cultura,
               'valormax' => $valores->get($index) ?? null
           ];

       }


       return view('site.view-cultura', [
           'dados' => $dados,
           'termoPesquisa' => $termoPesquisa,
       ]);
   }


}
