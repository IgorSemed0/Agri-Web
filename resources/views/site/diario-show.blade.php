@extends('layouts.admin.body')

@section('titulo', 'Home')

@section('conteudo')
    <form action="{{ route('diario_update', ['id' => $diario->id]) }}" method="POST" style="width: 100%;">
        @csrf
        @method('PUT')

        <div class="cabecalho" style="display: flex;">
            <input type="text" name="title" value="{{ $diario->title }}" class="d-inline-block ml-auto mr-1"
                style="border: 1px solid #000000; border-radius: 8px; width: 400px; color: black; padding-left: 10px;"
                placeholder="Title">

            <button type="submit" class="d-inline-block ml-auto mr-3"
                style="background-color:#7B3F00; color:#ffff; height: 40px; width: 150px; border-radius: 12px; border: 1px solid #ffff">
                <strong>Guardar</strong>
            </button>
        </div>

        <br>

        <textarea name="text" id="text" class=" mx-5" cols="0" rows="40" 
            style="width: 95%; ; padding-left: 8px; padding-right: 10px; font-size: 20px; ">
            {{ $diario->text }}
        </textarea>
    </form>
@endsection
