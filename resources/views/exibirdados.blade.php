@extends('layouts.admin.body')

@section('titulo', 'Exibir Dados')

@section('conteudo')
  <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" >Exibir Dados</h1>

    @if (isset($mensagem))
      <div style="background-color:rgb(92, 63, 31);" class="alert alert-info" role="alert">
        {{ $mensagem }}
      </div>
    @else
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Umidade do Solo</th>
              <th>Temperatura do Solo</th>
              <th>Condutividade do Solo</th>
              <th>pH do Solo</th>
              <th>Nitrogênio</th>
              <th>Fósforo</th>
              <th>Potássio</th>
              <!-- Adicione mais colunas conforme necessário -->
            </tr>
          </thead>
          <tbody>
            @foreach ($dados as $dado)
            <tr>
              <td>{{ $dado->id }}</td>
              <td>{{ $dado->soilHumidity }}</td>
              <td>{{ $dado->soilTemperature }}</td>
              <td>{{ $dado->soilConductivity }}</td>
              <td>{{ $dado->soilPH }}</td>
              <td>{{ $dado->nitrogen }}</td>
              <td>{{ $dado->phosphorus }}</td>
              <td>{{ $dado->potassium }}</td>
              <!-- Adicione mais colunas conforme necessário -->
            </tr>
            @endforeach
        

          </tbody>
<!-- Scrollable modal -->
        

        </table>

        <br>
        <p>

    <!-- Scrollable modal -->

        <!-- Scrollable modal -->
 </div>

 @endif
 
  </div>
  
@endsection
