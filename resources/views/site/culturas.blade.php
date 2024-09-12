@extends('layouts.admin.body')
@section('titulo','Home')

@section('conteudo')
<style>
    .card-custom {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        overflow: hidden;
        position: relative;
        height: 400px; /* Tamanho fixo para os cards */
    }
    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card-custom.expand {
        transform: scale(1.05);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    .card-body {
        max-height: 125px; /* Altura máxima do corpo do card */
        overflow: hidden;
        position: absolute;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9); /* Fundo branco com opacidade para o texto */
        width: 100%;
    }
    .card-body.expand {
        max-height: 500px; /* Altura expandida do corpo do card */
    }
</style>

<div class="d-flex justify-content-center position-relative">
    <form action="{{ route('search') }}" method="get" class="col-6 position-relative">
        <div class="input-group">
            <input type="search" name="search" id="search" class="form-control pl-5 position-absolute top-0 start-0 pt-2" style="height:50px; width: 120%; max-width: 650px; border-radius: 20px;" placeholder="Faça a sua pesquisa na Agri-Web">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="23" fill="currentColor" class="bi bi-search ml-4 mt-3 position-relative top-60 end-0 translate-middle-y" type="submit" style="color:black" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </div>
    </form>
</div>
<br><br><br>
<div class="container my-4">
    <div class="row d-flex justify-content-center">
      
    <div class="col-md-4 mb-4">
    <div class="card card-custom">
        <img src="assets/img/logo/arroz1.jpeg" class="card-img-top w-70" alt="Imagem do Arroz">
        <div class="card-body">
            <h5 class="card-title">Arroz</h5>
            <p class="card-text">
                O arroz é uma cultura que se desenvolve melhor em solo com uma umidade controlada e temperatura adequada. 
                Para uma boa colheita, o <strong>pH do solo</strong> deve estar entre 5.5 e 6.5. A <strong>umidade do solo</strong> 
                deve ser mantida entre 70% e 80% para garantir a absorção ideal de nutrientes. 
                A <strong>temperatura do solo</strong> ideal varia entre 25°C e 30°C, enquanto a <strong>temperatura do ar</strong> 
                deve estar entre 20°C e 35°C. A <strong>condutividade do solo</strong> deve ser monitorada para evitar a salinidade excessiva. 
                A <strong>presença de nitrogênio</strong>, <strong>fósforo</strong> e <strong>potássio</strong> são essenciais para o crescimento vigoroso do arroz.
            </p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
    </div>
</div>


<!---->
<div class="col-md-4 mb-4">
    <div class="card card-custom">
        <img src="assets/img/banana.jpeg" class="card-img-" alt="Imagem da Banana">
        <div class="card-body">
            <h5 class="card-title">Banana</h5>
            <p class="card-text">
                A banana prospera em solo bem drenado e rico em nutrientes. Para garantir uma boa colheita, o <strong>pH do solo</strong> 
                deve estar entre 5.5 e 7.0. A <strong>umidade do solo</strong> deve ser alta, variando entre 60% e 80%, e a <strong>temperatura do solo</strong> 
                ideal está entre 24°C e 30°C. A <strong>temperatura do ar</strong> deve estar entre 20°C e 30°C para favorecer o crescimento. 
                É importante monitorar a <strong>condutividade do solo</strong> para garantir que não haja excesso de salinidade. 
                Níveis adequados de <strong>nitrogênio</strong>, <strong>fósforo</strong> e <strong>potássio</strong> são cruciais para o desenvolvimento das bananas.
            </p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
    </div>
</div>

<!--3card-->
<div class="col-md-4 mb-4">
    <div class="card card-custom">
        <img src="assets/img/mandioca.jpeg" class=" mt-3 rounded mx-auto d-block " alt="Imagem da Mandioca">
        <div class="card-body">
            <h5 class="card-title">Mandioca</h5>
            <p class="card-text">
                A mandioca é uma planta resistente que cresce melhor em solo com boa drenagem e rica em matéria orgânica. O <strong>pH do solo</strong> 
                ideal é entre 5.5 e 6.5. A <strong>umidade do solo</strong> deve ser moderada, entre 60% e 70%, para evitar o apodrecimento das raízes. 
                A <strong>temperatura do solo</strong> deve estar entre 25°C e 30°C, e a <strong>temperatura do ar</strong> deve estar entre 20°C e 35°C. 
                O <strong>nível de condutividade do solo</strong> deve ser monitorado para garantir uma nutrição equilibrada. Níveis adequados de 
                <strong>nitrogênio</strong>, <strong>fósforo</strong> e <strong>potássio</strong> são essenciais para um crescimento saudável e uma boa colheita.
            </p>
            <a href="#" class="btn btn-primary">Saiba mais</a>
             <form action="{{ route('search') }}" method="get" class="col-6 position-relative">
        </div>
    </div>
</div>
<div>
</div>

</div>

<script>
    document.querySelectorAll('.card-custom').forEach(card => {
        card.addEventListener('click', () => {
            document.querySelectorAll('.card-custom').forEach(c => c.classList.remove('expand'));
            card.classList.toggle('expand');
            const cardBody = card.querySelector('.card-body');
            cardBody.classList.toggle('expand');
        });
    });
</script>

@endsection
