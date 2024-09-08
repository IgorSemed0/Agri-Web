@extends('layouts.admin.body')

@section('titulo', 'Home')

@section('conteudo')




@if(empty($dados))
    <div class="d-flex justify-content-center position-relative">
    <form action="{{ route('search') }}" method="get" class="col-6 position-relative">
            <div class="input-group">
                <input type="search" name="search" value="{{ $termoPesquisa }}" id="search" class="form-control pl-5 position-absolute top-0 start-0 pt-2" style="color:black; height:50px; width: 120%; max-width: 650px; border-radius: 20px;" placeholder="Faça a sua pesquisa na Agri-Web">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="23" fill="currentColor" class="bi bi-search ml-4 mt-3 position-relative top-60 end-0 translate-middle-y" type="submit" style="color:black" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </div>
        </form>
    </div>
    <img src="assets/sorry-new.jpg" alt="" style="height:92vh; width:100%; background-size:cover; background-repeat:no-repeat;">
@else


    <div class="d-flex justify-content-center position-relative">
        <form action="{{ route('search') }}" method="get" class="col-6 position-relative">
            <div class="input-group">
                <input type="search" name="search" value="{{ $termoPesquisa }}" id="search" class="form-control pl-5 position-absolute top-0 start-0 pt-2" style="color:black; height:50px; width: 120%; max-width: 650px; border-radius: 20px;" placeholder="Faça a sua pesquisa na Agri-Web">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="23" fill="currentColor" class="bi bi-search ml-4 mt-3 position-relative top-60 end-0 translate-middle-y" type="submit" style="color:black" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </div>
        </form>
    </div>
    <br>
    
    @foreach($dados as $item)
        <div class="card mx-2">
            <div class="card-body">
                <h5 class="card-title text-center" style="color:black">{{ $item['cultura']->cultureTittle }}</h5>
                <p style="color:black">
                    No Agri-Web, estamos aqui para ajudá-lo a determinar o momento ideal
                    para plantar sua cultura de interesse como: {{ $item['cultura']->cultureTittle }}. Para garantir o melhor crescimento,
                    precisamos coletar e analisar alguns dados essenciais sobre o ambiente de cultivo:
                </p>
               
                <ul style="color:black">
    <li>Humidade do solo: {{ $item['cultura']->soilHumidity }}%</li>
    <li>Temperatura do solo: [{{ $item['cultura']->soilTemperature }}/{{ $item['valormax']->soilTemperature }}]°C</li>
    <li>Condutividade do solo: {{ $item['cultura']->soilConductivity }} dS/m</li>
    <li>Temperatura do ar: [{{ $item['cultura']->airTemperature }}/{{ $item['valormax']->airTemperature }}]°C</li>
    <li>Humidade do ar: [{{ $item['cultura']->airlHumidity }}/{{ $item['valormax']->airlHumidity }}]%</li>
    <li>PH do solo: [{{ $item['cultura']->soilPH }}/{{ $item['valormax']->soilPH }}]</li>
    <li>Nitrogénio: [{{ $item['cultura']->nitrogen }}/{{ $item['valormax']->nitrogen }}] mg/kg</li>
    <li>Fósforo: [{{ $item['cultura']->phosphorus }}/{{ $item['valormax']->phosphorus }}] mg/kg</li>
    <li>Potássio: [{{ $item['cultura']->potassium }}/{{ $item['valormax']->potassium }}] mg/kg</li>
</ul>
            
            </div>
        </div>
    @endforeach
@endif

@endsection
