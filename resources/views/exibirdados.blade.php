@extends('layouts.admin.body')

@section('titulo', 'Dashboard')

@section('conteudo')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    @if (isset($mensagem))
        <div style="background-color:rgb(110, 62, 0);" class="alert alert-info" role="alert">
            {{ $mensagem }}
        </div>
    @else
        <div class="table-responsive">
            <div id="progressBarContainer" style="width: 100%; height: 20px; margin-bottom: 20px;">
                <div id="progressBar" style="width: 0%; height: 100%; background-color: green;"></div>
            </div>
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
                <tbody id="dataBody">
                    <!-- Aqui vamos exibir os dados -->
                </tbody>
            </table>
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var dados = @json($dados ?? []);
        var index = 0;
        var progressBar = $('#progressBar');

        function exibirProximoDado() {
            if (index < dados.length) {
                var dado = dados[index++];
                var newRow = `
                    <tr>
                        <td>${dado.soilHumidity}</td>
                        <td>${dado.soilTemperature}</td>
                        <td>${dado.airHumidity}</td>
                        <td>${dado.airTemperature}</td>
                        <td>${dado.soilConductivity}</td>
                        <td>${dado.soilPH}</td>
                        <td>${dado.nitrogen}</td>
                        <td>${dado.phosphorus}</td>
                        <td>${dado.potassium}</td>
                    </tr>
                `;
                $('#dataBody').append(newRow);
                progressBar.stop().css({ width: '0%' });
                progressBar.animate({ width: '100%' }, 20000, 'linear');
                setTimeout(exibirProximoDado, 20000);
            } else {
                index = 0;
                $('#dataBody').empty();
                exibirProximoDado();
            }
        }
        exibirProximoDado();
    });
</script>

<br>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tbody>
        @if(isset($dadosComuns))
            @foreach ($dadosComuns as $cultura)
                <div class="card ml-1">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $cultura->cultureTittle }}
                        </h5>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
    </tbody>
</table>
@endsection
