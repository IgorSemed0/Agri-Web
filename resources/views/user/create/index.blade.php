@extends('layouts.admin.body')
@section('titulo', 'Cadastrar Usuario')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Cadastrar Usuario</h3>

    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5 col-mb-8" style="background-color:white !important;">
        @csrf
        <div class="card-body">
            @include('_forms.userForm.index')
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('user.create.success'))
            <script>
                Swal.fire(
                    'Usuario Cadastrado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('user.create.error'))
            <script>
                Swal.fire(
                    'Erro ao cadastrar usuario',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
