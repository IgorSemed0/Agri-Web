@extends('layouts.admin.body')
@section('titulo','Home')

@section('conteudo')

<div style="text-align: center; background-color:rgb(110, 62, 0); color:white;" class="container-fluid p-5">
    <h1>Bem Vindo ao nosso site</h1>
    <p></p>
</div>
<div style="background-image: url({{ asset('assets/img/logo/1.jpg') }});
 align-contents:center;
 height:1200px; width:100%;
 background-size:cover;
 background-repeat:no-repeat;

 ">
    <div style="
     color:white;
     text-align:center;
 ">
        <br><br><br>
        <h1 style="
        color:white;
        margin-left:4%;
        margin-right: 4px;
    ">Com a Nossa plataforma podera examinar o estado do seu solo para cultivo!</h1>

    <br>




        <button style="
        background-color:rgb(107, 116, 0);
        color:rgb(110, 62, 0);
        height:40px;
        width:200px;
        border-radius:10px;
        border: 2px solid #0000;

        "><a style="color:white; text-decoration: none;" href="{{ route('culturas') }}">Começar Inspeçao</a></button>
    </div>
</div>
<!-- Modal -->


@endsection
