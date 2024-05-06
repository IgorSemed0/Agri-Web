@extends('layouts.admin.body')
@section('titulo', 'Home')

@section('conteudo')
    <div style="display: flex;" class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Diário Agrícola</h1>
        <a href="{{ route('diario_store') }}" class="d-inline-block ml-auto mr-3" style="text-decoration: none; ">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                class="bi bi-plus-circle  " viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
        </a>

    </div>

    @if (isset($mensagem))

        <div style="background-color:rgb(110, 62, 0);" class="alert alert-info" role="alert">
            <p style="margin-left: 50%; font-size:20px">{{ $mensagem }}</p>
        </div>
        <div
            style="background-image: url({{ asset('assets/img/diario') }});

align-contents:center;
height:800px; width:100%;

background-repeat:no-repeat;">
            <div style="
    color:white;
    text-align:center;">

            </div>
        @else
            @foreach ($diario as $diario)
                <div class="card ml-1">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $diario->title }}</h3>

                        {{ $diario->created_at }}
                        <br>
                        <br>
                        <div style=" display:flex; align-items:justify; ">
                        <a href="{{ route('diario_show', $diario->id) }}" class="btn btn-black bg-black">Visualizar</a>
                        <form action="{{ route('diario_delete',$diario->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn  ml-3 ">Apagar</button>
                        </form>
                        </div>



                    </div>

                </div>

                <br>
            @endforeach
    @endif
@endsection
