@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

    @if($culturas->isEmpty())
    <p>Nenhum resultado encontrado.</p>
@else
    @foreach($culturas as $cultura)
    
    
        {{$cultura->id}}
        <div class="card">
  <div class="card-body">
    <h5 class="card-title"> {{$cultura->cultureTittle}}</h5>
    <p class="card-text">Texto do cartão. Você pode adicionar todo tipo de conteúdo aqui.</p>
    <a href="#" class="btn btn-primary">Botão</a>
  </div>
</div>

    @endforeach
@endif


    @endsection