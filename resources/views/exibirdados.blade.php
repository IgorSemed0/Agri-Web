@extends('layouts.admin.body')

@section('titulo', 'Dashboard')

@section('conteudo')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    @if(isset($mensagem))
    <p>{{ $mensagem }}</p>
@else
    <h2>Correspondências Encontradas</h2>
    @foreach($resultados as $dado)
                <tr>
                    <td>{{ $dado['cultura'] }}</td>
                    <td>{{ $dado['dados_sensor']['soilPH'] }}</td>
                    <td>{{ $dado['dados_sensor']['soilTemperature'] }}</td>
                    <td>{{ $dado['dados_sensor']['airTemperature'] }}</td>
                    <td>{{ $dado['dados_sensor']['airHumidity'] }}</td>
                    <td>{{ $dado['dados_sensor']['nitrogen'] }}</td>
                    <td>{{ $dado['dados_sensor']['phosphorus'] }}</td>
                    <td>{{ $dado['dados_sensor']['potassium'] }}</td>
                    <td>{{ $dado['dados_sensor']['soilConductivity'] }}</td>
                    <td>{{ $dado['dados_sensor']['soilHumidity'] }}</td>
                </tr>
            @endforeach

        <!-- Start Analysis Button and Initial Message -->

        <!--Comentando -->
        <div id="startContainer" class="text-center">
            <p id="startMessage">Click the button to start data analysis.</p>
            <button id="startButton" class="btn btn-primary">Start Analysis</button>
        </div>

        <!-- Chart Container -->
        <div id="barChartContainer" class="chart-container" style="position: relative; height:400px; width:100%; margin-top: 20px;">
            <canvas id="dataChart"></canvas>
        </div>

        <!-- Donut Chart Container (Initially Hidden) -->
        <div id="donutChartContainer" class="chart-container" style="position: relative; height:400px; width:100%; margin-top: 20px; display:none;">
            <canvas id="donutChart"></canvas>
        </div>

        <!-- Average Values Display -->
        <div id="averageValuesContainer" class="text-center" style="margin-top: 20px; display:none;">
            <!-- Will be filled dynamically with average values -->
        </div>

        <!-- Loading Spinner -->
        <div id="loadingSpinner" class="text-center" style="display:none;">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(document).ready(function() {
        var ctx = document.getElementById('dataChart').getContext('2d');
        var donutCtx = document.getElementById('donutChart').getContext('2d');
        var dados = @json($dados ?? []);
        var index = 0;
        var interval = 6; // Number of data points to average
        var chartData = [];
        var averages = [];
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

        var donutChart = new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Average Values',
                    data: [], // Will be filled later
                    backgroundColor: colors,
                    borderColor: colors.map(color => color.replace('0.6', '1')),
                    borderWidth: 1
                }]
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

                    if (chartData.length >= interval) {
                        var sum = Array(chartData[0].length).fill(0);
                        chartData.forEach(row => {
                            row.forEach((value, i) => {
                                sum[i] += value;
                            });
                        });
                        averages = sum.map(s => s / chartData.length);

                        // Update donut chart with averages
                        donutChart.data.datasets[0].data = averages;
                        donutChart.update();

                        // Display the average values
                        $('#averageValuesContainer').empty(); // Clear previous values
                        labels.forEach((label, i) => {
                            $('#averageValuesContainer').append(`<p style="color: ${colors[i].replace('0.6', '1')}">${label}: ${averages[i].toFixed(2)}</p>`);
                        });

                        // Hide the bar chart and show the donut chart
                        $('#barChartContainer').hide();
                        $('#averageValuesContainer').show();
                        $('#donutChartContainer').show();
                    } else {
                        setTimeout(updateChart, 1000); // Update every 1 seconds
                    }
                } else {
                    index = 0;
                    setTimeout(updateChart, 10000); // Restart cycle
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
        $('#donutChartContainer').hide(); // Hide the donut chart initially
        $('#averageValuesContainer').hide(); // Hide the average values container initially
    });
</script>
@endsection
