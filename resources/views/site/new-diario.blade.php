
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')


<form action="{{route('diario_store')}}" method="POST" style="width: 100%;">
@csrf
<div class="cabecalho" style="display: flex;">
<input type="text" name="title" style=" border: 1px solid #000000;       
 margin-left:15px; border-radius:8px;width:400px; color:black; padding-left:10px;" placeholder="Title">
<button type="submit" style=" background-color:rgb(107, 116, 0);
        height:40px; width:150px; border-radius:12px;  margin-left:45%;border:1px solid">Guardar</button>
</div>
<br>
<textarea name="text" id="text" cols="100" rows="100" style="width: 100%; padding-left:12px; padding-right:12px; font-size:20px; " >
   
   </textarea>
</form>

 

@endsection
