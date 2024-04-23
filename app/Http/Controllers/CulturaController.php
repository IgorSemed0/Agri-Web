<?php

namespace App\Http\Controllers;
use App\Models\Cultura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class CulturaController extends Controller
{
    public function culturas(){
        return view('site.culturas');
    }
    public function home(){
        return view('site.index');
    }

   public function suporte(){
    return view ("site.suporte");
   }

public function search(Request $request):View{
   
    $termoPesquisa = $request->input('search');
    $culturas = Cultura::where('cultureTittle', 'LIKE', '%' . $termoPesquisa . '%')->get();

    return view('site.view-cultura', ['culturas' => $culturas,'termoPesquisa'=>$termoPesquisa ]);


}
   
}
