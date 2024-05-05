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
        <p style="font-size: 18px;">Descubra o potencial do seu solo para uma colheita exuberante com a nossa plataforma. Explore os segredos da terra que nutre suas culturas, guiado pela ciência e pela inovação. Deixe-nos ser seu parceiro na jornada para uma agricultura mais inteligente e sustentável</p>

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
<div class="fixed-element d-inline-block" style="position: fixed; bottom: 20px; right: 20px;">

    <div class="modal max-vh-100  " id="myModal" aria-labelledby="exampleModalLabel" data-bs-backdrop="false" style="top: 40%; left: 30%; ">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chat-Suport</h5>

                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="Close" width="18" height="18" data-bs-dismiss="modal" fill="currentColor" class="bi bi-x-lg btn-close" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <form action="{{route('chat_create')}}" method="POST" class="d-flex">
                        @csrf
                        <textarea name="text" id="chat" class="px-3" style="width: 400px;"></textarea>
                        <button type="submit" class="btn btn-primary ml-1 "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                            </svg></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-element d-inline-block" style="position: fixed; bottom: 20px; right: 20px;">
    <button type="button" class="btn btn-primary" id="openModalBtn" style="margin-top: 38%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
        </svg>
    </button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById('openModalBtn');
        const modal = document.getElementById('myModal');
        const modalInput = document.getElementById('modalInput');
        const otherInput = document.getElementById('otherInput');
        const saveChangesBtn = document.getElementById('saveChangesBtn');

        openModalBtn.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        });

        saveChangesBtn.addEventListener('click', function() {
            otherInput.value = modalInput.value;
            modal.classList.add('position-fixed');
            var myModal = new bootstrap.Modal(modal);
            myModal.hide();
        });

        modal.addEventListener('hidden.bs.modal', function() {
            modal.classList.remove('position-fixed');
        });
    });
</script>
<br><br>
<div>
<h3 class="text-center">Perguntas Frequêntes</h3>

<div class="dropdown text-white ">
        <div class="select">
          <span class="selected">Hosting</span>
          <div class="caret"></div>
        </div>
        <ul class="menu">
          <li class=" align-items-center">
            <a href="#" class="text-decoration-none text-white ">
              Cloud Hosting
            </a>
          </li>

          <li> <a href="#" class="text-decoration-none text-white ">
              Web Hosting
            </a>
          </li>
          <li><a href="# " class="text-decoration-none text-white">Free Hosting</a></li>

          <li><a href="#" class="text-decoration-none text-white ">Shared Hosting</a></li>
          <li><a href="#" class="text-decoration-none text-white ">Dedicated Hosting</a></li>
          <li><a href="#" class="text-decoration-none text-white ">WordPress Hosting</a></li>
          <li><a href="#"  class="text-decoration-none text-white ">VTP</a></li>

        </ul>
      </div>



</div>
<script>
const dropdowns = document.querySelectorAll('.dropdown');

document.addEventListener('click', (event) => {
    if (!event.target.closest('.dropdown')) {
        dropdowns.forEach(dropdown => {
            const menu = dropdown.querySelector('.menu');
            menu.classList.remove('menu-open');
        });
    }
});

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });

    options.forEach(option => {
        option.addEventListener('click', (event) => {
            event.stopPropagation();
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');
            options.forEach(opt => {
                opt.classList.remove('active');
            });
            option.classList.add('active');
        });
    });
});
</script>


@endsection
