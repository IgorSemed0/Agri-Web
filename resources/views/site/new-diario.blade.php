
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')


<form action="{{route('diario_create')}}" method="POST" style="width: 100%;">
@csrf
<div class="cabecalho" style="display: flex;">
<input type="text" name="title" class="d-inline-block ml-auto mr-1" style=" border: 1px solid #000000;
  border-radius:8px;width:400px; color:black; padding-left:10px;" placeholder="Title">
<button type="submit" class="d-inline-block ml-auto mr-3" style=" background-color:#7B3F00;
        height:40px;color:#ffff; width:150px; border-radius:12px ; ;border:1px solid #ffff">  
        <strong>Guardar</strong>
</button>
</div>
<br>
<textarea name="text" id="text" class=" mx-5" cols="0" rows="40" style="width: 95%; padding-left:12px; padding-right:12px; font-size:20px; " >

   </textarea>
</form>



@endsection
