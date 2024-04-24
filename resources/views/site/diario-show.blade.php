@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')
    <form action="{{ route('diario_update', $diarios->id)}}" method="POST" style="width: 100%;">
    @csrf
    @method('PUT')


    <div class="cabecalho" style="display: flex;">
        <input type="text" name="title" value="{{ $diarios->title }}" class="d-inline-block ml-auto mr-1" style="border: 1px solid #000000; border-radius: 8px; width: 400px; color: black; padding-left: 10px;" placeholder="Title">
        <button type="submit" class="d-inline-block ml-auto mr-3" style="background-color: rgb(107, 116, 0); height: 40px; width: 150px; border-radius: 12px; border: 1px solid">Guardar</button>
    </div>
    <br>
    <textarea name="text" id="text" class="ml-4" cols="100" rows="100" style="width: 100%; padding-left: 12px; padding-right: 12px; font-size: 20px;">
        {{ $diarios->text }}
    </textarea>


</form>

    @endsection

