
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

  <div style="text-align: center; background-color:rgb(110, 62, 0); color:white;" class="container-fluid p-5">
    <h1>Descubra o Melhor Momento para Cultivar! </h1>

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


  
<br><br><br>
<div class="d-flex justify-content-center position-relative">
    <form action="{{route('search')}}" method="get" class="col-6 position-relative ">
        <div class="input-group">
            <input type="search" name="search" id="search" class="form-control pl-5 position-absolute top-0 start-0 pt-2  " style="height:50px; width: 120%; max-width: 650px ;border-radius: 20px;" placeholder="Faça a sua pesquisa na Agri-Web">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="23" fill="currentColor" class="bi bi-search ml-4 mt-3 position-relative top-60 end-0 translate-middle-y" type="submit" style="color:black" viewBox="0 0 16 16" >
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>


        </div>
    </form>
</div>
 </div>
</div>

@endsection
