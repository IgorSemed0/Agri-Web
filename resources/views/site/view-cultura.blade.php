@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

    @if($culturas->isEmpty())
    <p>Nenhum resultado encontrado.</p>
@else
    @foreach($culturas as $cultura)
    
    {{$cultura->cultureTittle}}
        {{$cultura->id}}
        <!-- Adicione aqui o restante das informações que deseja exibir -->
    @endforeach
@endif


    @endsection