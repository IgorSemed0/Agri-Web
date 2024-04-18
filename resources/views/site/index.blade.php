
        @extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

  <div style="text-align: center; background-color:rgb(110, 62, 0); color:white;" class="container-fluid p-5">
    <h1>Bem Vindo ao nosso site</h1>
    <p></p>
  </div>
<div style="background-image: url({{ asset('assets/img/logo/4.jpg') }});
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
    ">Com a Nossa plataforma podera examinar o estado do seu solo para cultivo!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ex laudantium magnam voluptates aspernatur. <br>
         Pariatur quod voluptatibus, delectus quae perferendis necessitatibus saepe illum quidem molestiae rerum sunt nobis, sit tenetur!</p>
         <br><br><br><br><br><br><br><br><br>
    <button style="
        background-color:rgba(40, 142, 54, 0.348);
        color:rgb(110, 62, 0);
        height:80px;
        width:200px;
        border-radius:8px;
        "><a style="color:white;" href="">Começar Inspeçao</a></button>
 </div>
</div>

@endsection
