@extends('layouts.temp.body')

@section('conteudo')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    @if (isset($mensagem))
        <div style="background-color:rgb(110, 62, 0);" class="alert alert-info" role="alert">
            {{ $mensagem }}
        </div>
    @endif

    <!-- Start Analysis Button and Initial Message -->
    <div id="startContainer" class="text-center">
        <p id="startMessage">Click the button to start data analysis.</p>
        <button id="startButton" class="btn btn-primary">Start Analysis</button>
    </div>

    <!-- Chart Container -->
    <div id="barChartContainer" class="chart-container" style="position: relative; height:400px; width:100%; margin-top: 20px;">
        <canvas id="dataChart"></canvas>
    </div>

    <!-- Loading Spinner -->
    <div id="loadingSpinner" class="text-center" style="display:none;">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

<!-- Correspondências Encontradas -->
<div id="resultsContainer" style="margin-top: 20px;">
    @if (isset($resultados) && count($resultados) > 0)
        <h2>Correspondência de Cultura Encontrada</h2>
        <div class="alert alert-success">
            <strong>Cultura recomendada: </strong> {{ $resultados[0]['cultura'] }}
        </div>
    @else
        <p>Nenhuma correspondência de cultura encontrada.</p>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        var ctx = document.getElementById('dataChart').getContext('2d');
        var dados = @json($dados ?? []);
        var index = 0;
        var chartData = [];
        var labels = ['Umidade do Solo', 'Temperatura do Solo', 'Umidade do Ar', 'Temperatura do Ar', 'Condutividade do Solo', 'pH do Solo', 'Nitrogênio', 'Fósforo', 'Potássio'];
        var colors = [
            'rgba(75, 192, 192, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(153, 102, 255, 0.6)'
        ];

        var dataChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Medições',
                    data: [], // Initial empty data
                    backgroundColor: colors,
                    borderColor: colors.map(color => color.replace('0.6', '1')),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function updateChart() {
            try {
                if (index < dados.length) {
                    var dado = dados[index++];
                    chartData.push([
                        dado.soilHumidity,
                        dado.soilTemperature,
                        dado.airHumidity,
                        dado.airTemperature,
                        dado.soilConductivity,
                        dado.soilPH,
                        dado.nitrogen,
                        dado.phosphorus,
                        dado.potassium
                    ]);
                    dataChart.data.datasets[0].data = chartData[chartData.length - 1];
                    dataChart.update();

                    setTimeout(updateChart, 500); // Update every 1 second
                }
            } catch (error) {
                alert('Failed to load data. Please try again later.');
                console.error(error);
            }
        }

        $('#startButton').click(function() {
            $('#startContainer').hide(); // Hide start message and button
            $('#loadingSpinner').show(); // Show loading spinner

            setTimeout(function() {
                $('#loadingSpinner').hide(); // Hide loading spinner after delay
                $('#barChartContainer').show(); // Show the bar chart
                updateChart(); // Start the chart update process
            }, 1000); // Delay to simulate loading
        });

        $('#barChartContainer').hide(); // Hide the chart initially
    });
</script>
@endsection
