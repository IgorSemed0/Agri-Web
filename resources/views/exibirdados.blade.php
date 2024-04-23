@extends('layouts.admin.body')

@section('titulo', 'Dashboard')

@section('conteudo')
  <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800" >Dashboard</h1>

    @if (isset($mensagem))
      <div style="background-color:rgb(110, 62, 0);" class="alert alert-info" role="alert">
        {{ $mensagem }}
      </div>
    @else
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              
              <th>Umidade do Solo</th>
              <th>Temperatura do Solo</th>
              <th>Umidade do Ar</th>
              <th>Temperatura do Ar</th>
              <th>Condutividade do Solo</th>
              <th>pH do Solo</th>
              <th>Nitrogênio</th>
              <th>Fósforo</th>
              <th>Potássio</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($dados as $dado)
            
            <tr>
              <td>{{ $dado->soilHumidity }}</td>
              <td>{{ $dado->soilTemperature }}</td>
              <td>{{ $dado->airlHumidity }}</td>
              <td>{{ $dado->airTemperature }}</td>
              <td>{{ $dado->soilConductivity }}</td>
              <td>{{ $dado->soilPH }}</td>
              <td>{{ $dado->nitrogen }}</td>
              <td>{{ $dado->phosphorus }}</td>
              <td>{{ $dado->potassium }}</td>
              <br>
            </tr>
            
            
            @endforeach
          
<!-- Scrollable modal -->
   

          </tbody>
        </table>

        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <tbody>
       @foreach($dadosComuns as $cultura)
       <div class="card ml-1">
  <div class="card-body">
    <h5 class="card-title"> 
       {{$cultura->cultureTittle}}
    </h5>
    </div>
</div>
<br>
       @endforeach
      </tbody>  
      </table>
         
      </div>
    @endif

    <!-- Scrollable modal -->

 

  </div>

@endsection
