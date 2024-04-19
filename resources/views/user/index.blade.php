@extends('layouts.admin.body')
@section('titulo','Listar Usuarios')

@section('conteudo')


<div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nome de Usuario</th>
                <th>Imagem</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
          </thead>
          <tfoot>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->userName}}</td>
                <td>{{ $user->vc_image }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>


                <td>
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('user.edit.index',['id'=>$user->id]) }}">Editar</a>
                            <a class="dropdown-item" href="{{ route('user.destroy',['id'=>$user->id])}}">Eliminar</a>
                            <a class="dropdown-item" href="{{ route('user.purge',['id'=>$user->id]) }}">Purgar</a>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>




<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
@if (session('user.destroy.success'))
    <script>
        Swal.fire(
            'user Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('user.destroy.error'))
    <script>
        Swal.fire(
            'Erro ao Eliminar user!',
            '',
            'error'
        )
    </script>
@endif
@if (session('user.purge.success'))
    <script>
        Swal.fire(
            'user Purgada com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('user.purge.error'))
    <script>
        Swal.fire(
            'Erro ao Purgar user!',
            '',
            'error'
        )
    </script>
@endif

@endsection

