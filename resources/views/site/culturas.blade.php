
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

  <div style="text-align: center; background-color:rgb(110, 62, 0); color:white;" class="container-fluid p-5">
    <h1 style="color:rgb(183, 182, 130) ;">
   Descubra o Melhor Momento para Cultivar! </h1>
    <p></p>
  </div>
<div style="background-image: url({{ asset('assets/img/logo/4.jpg') }});
 align-contents:center;
 height:800px; width:100%;
 background-size:cover;
 background-repeat:no-repeat;">
 <div style="
     color:white;
     text-align:center;
 ">
 <br><br><br>
   
    <p style="font-size: 23px;
">Explore o Mapa Agrícola do Agri-web e saiba quando plantar cada cultura.<br> Navegue pelo mapa para encontrar informações sobre o momento ideal de plantio para cada tipo de planta.<br> Tome decisões informadas e aumente sua produtividade agrícola!

<br> Agri-web O Seu Guia para o Cultivo Ideal!  </p>
<br><br><br>         <form action="{{route('search')}}" method="get" class="col-3"    >
                <input type="search" name="search" id="search" class="inp" style="width: 600px;  height:50px;  position: absolute;  border: 1px solid #000000;
 border-radius: 20px; margin-left:95%; padding-top: 2px;padding-left: 50px; color:#000000;

" placeholder="Faça a sua pesquisa na Agri-Web">
         <svg xmlns="http://www.w3.org/2000/svg" id="sear" width="16" height="23" type="submit" style="position: relative; color:#000000; margin-left:18em; margin-top: 15px;"
                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg>
            </form>    

 </div>
</div>

@endsection
