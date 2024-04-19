@extends('layouts.leyouts.body')
@section('titulo', 'Editar Usuarios')

@section('conteudo')

    <h3 class="p-4 pb-0" style="color:#312f2f">Editar Usuarios</h3>

    <form action="{{ route('user.update',['id'=>$user->id]) }}" method="post" enctype="multipart/form-data" class="mt-3 mb-5" style="background:#fff !important;">
        @csrf
        <div class="card-body">
            @include('_forms.userForm.index')
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    @if (session('user.update.success'))
            <script>
                Swal.fire(
                    'Usuario Editado Com Sucesso!',
                    '',
                    'success'
                )
            </script>
    @endif

    @if (session('user.update.error'))
            <script>
                Swal.fire(
                    'Erro ao Editar Usuario',
                    '',
                    'error'
                )
            </script>

        @endif

    @endsection
