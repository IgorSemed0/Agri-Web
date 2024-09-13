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
        <div id="barChartContainer" class="chart-container"
            style="position: relative; height:400px; width:100%; margin-top: 20px;">
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
                var labels = ['Umidade do Solo', 'Temperatura do Solo', 'Umidade do Ar', 'Temperatura do Ar',
                    'Condutividade do Solo', 'pH do Solo', 'Nitrogênio', 'Fósforo', 'Potássio'
                ];
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
                            data: [], // Dados iniciais vazios
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

                // Função para buscar os dados mais recentes
                function fetchLatestData() {
                    $.ajax({
                        url: '/api/dados-atuais', // URL da API Laravel
                        method: 'GET',
                        success: function(data) {
                            // Atualiza os dados no gráfico
                            var newData = [
                                data.soilHumidity,
                                data.soilTemperature,
                                data.airHumidity,
                                data.airTemperature,
                                data.soilConductivity,
                                data.soilPH,
                                data.nitrogen,
                                data.phosphorus,
                                data.potassium
                            ];

                            dataChart.data.datasets[0].data = newData;
                            dataChart.update();
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro ao buscar dados: ', error);
                        }
                    });
                }

                // Intervalo para buscar dados a cada 1 segundo
                setInterval(fetchLatestData, 1000);

                // Evento de clique no botão de análise
                $('#startButton').click(function() {
                    $('#startContainer').hide(); // Esconde a mensagem inicial e o botão
                    $('#loadingSpinner').show(); // Exibe o spinner de carregamento

                    setTimeout(function() {
                        $('#loadingSpinner').hide(); // Esconde o spinner
                        $('#barChartContainer').show(); // Mostra o gráfico
                        fetchLatestData(); // Busca inicial de dados
                    }, 1000); // Simula carregamento com um atraso de 1 segundo
                });

                $('#barChartContainer').hide(); // Esconde o gráfico inicialmente
            });
        </script>
    @endsection
