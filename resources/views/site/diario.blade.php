
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')
    <div style="display: flex;" class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" style="margin-left: 10px;" >Diário Agrícola</h1>
    <a href="{{route('diario_create')}}" style="text-decoration: none; margin-left:78%;display:flex; ">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" style="margin-left: 3px;" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
    </a>
   
    </div>
    
    @if (isset($mensagem))

      <div style="background-color:rgb(110, 62, 0);" class="alert alert-info" role="alert">
        <p style="margin-left: 50%; font-size:20px">{{ $mensagem }}</p>
      </div>
@else
@foreach($diario as $diario)
<div style="">{{$diario->title}}
{{$diario->created_at}}</div>

@endforeach
@endif
@endsection
