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
        <div class="chart-container" style="position: relative; height:50vh; width:80vw">
            <canvas id="dataChart"></canvas>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var ctx = document.getElementById('dataChart').getContext('2d');
        var dados = @json($dados ?? []);
        var chartLabels = ["Umidade do Solo", "Temperatura do Solo", "Umidade do Ar", "Temperatura do Ar", "Condutividade do Solo", "pH do Solo", "Nitrogênio", "Fósforo", "Potássio"];
        var chartData = {
            labels: chartLabels,
            datasets: [{
                label: 'Sensor Data',
                data: [], // Empty at start
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(201, 203, 207, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        };

        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var index = 0;

        function updateChart() {
            if (index < dados.length) {
                var dado = dados[index++];
                dataChart.data.datasets[0].data = [
                    dado.soilHumidity,
                    dado.soilTemperature,
                    dado.airHumidity,
                    dado.airTemperature,
                    dado.soilConductivity,
                    dado.soilPH,
                    dado.nitrogen,
                    dado.phosphorus,
                    dado.potassium
                ];
                dataChart.update();
                setTimeout(updateChart, 1000);
            } else {
                index = 0;
                setTimeout(updateChart, 10000);
            }
        }

        updateChart();
    });
</script>
@endsection
