@extends('layouts.admin.body')
@section('titulo','Home')

@section('conteudo')
<style>
  .fade-in {
  opacity: 0;  
  transform: translateY(20px);  
  transition: opacity 0.9s ease-out, transform 0.9s ease-out; 
}

.fade-in.visible {
  opacity: 1;  
  transform: translateY(0);  
}

.content-section {
  max-width: 500px;  
  margin: 0 auto;  
  text-align: left;
}

</style>


<div class="ml-2 mr-4 parallax" style="
  background-image: url({{ asset('assets/img/logo/1.jpg') }});
  height: 90vh; 
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 13px;
  display: flex; 
  align-items: center; 
  justify-content: center;
"> <h1 class="text-center pt-" style="color:#556B2F; "><strong>Criando Plantações saudável</strong></h1></div>
 </div><br>
 <div class="">
   <h1 class="text-center text-md " style="color:#7B3F00; font-size:28px;"><strong>O que é o Agri-Web?</strong></h1>  
   <p class="text-center" style="font-size:20px; color:black"> Melhora a forma como  plantas, crias e gerencias o teu cultivo com o
     <strong style="color:#556B2F">Agri-Web </strong>.</p>  
    <p class="text-center" style="font-size:19px; color:black">
    Com o Agri-Web, você tem em mãos as melhores ferramentas para cuidar da sua terra e cultivar com qualidade.
     <br>Garanta uma produção sustentável, colheitas saudáveis e um futuro mais próspero para o seu negócio agrícola!
    </p>
</div><br>

    <div class="mx-4 px-3 pt-1" style="   width:33%;height:50vh; border:2px solid #7B3F00;border-radius:12px;">
      <p class="text-center" style="color:#556B2F; font-size:20px"><strong >Benefício do uso do Agri-Web</strong></p>
      <ul  style="color:#7B3F00 ; font-size:18px">
        <li>Planejamento: Otimização</li>
        <li class="pt-1">Acompanhamento Histórico: Análise</li>
        <li class="pt-1">Redução de Riscos: Segurança</li>
        <li class="pt-1">Gestão Personalizada: Customização</li>
        <li class="pt-1">Melhor Uso dos Recursos: Eficiência</li>
<li class="pt-1">Diário Agrícola: Registro</li>
<li class="pt-1">Apoio à Decisão: Suporte</li>
      </ul>
    </div>
    
    <div  class=" px-3 pt-1" style="   width:33%;height:50vh; border:2px solid #7B3F00;border-radius:12px;margin-left: 45rem;">
    <p class="text-center" style="color:#556B2F; font-size:20px"><strong > Integração com Dados Climáticos</strong></p>
  
    </div>
<br><br><br>
  <div><h3 class="text-center text-md " style="color:#7B3F00; font-size:28px;"> <strong>Integração com Dados Climáticos</strong></h3>

  <div class="d-flex fluid pt-5" >
 
<img src="assets/img/logo/ph.jpg" alt="Integração com Dados Climáticos" class=" col-7" style="width:65%; height:85vh">

<div class=" col-5 content-section" style="color:black">
    <p  style="font-size:17px" class="text-center fade-in">
    No <strong style="color:#556B2F;">Agri-Web</strong>, usamos tecnologia avançada para garantir colheitas melhores e mais eficientes.</p>
    <ul style="font-size:17px" class="fade-in">
      <li><strong style="color:#7B3F00">Monitoramento Preciso:</strong> Com os sensores NPK 7-em-1 e DHT11, monitoramos os níveis de nutrientes (N, P, K), pH, umidade do solo, temperatura e umidade do ar em tempo real, permitindo decisões precisas.</li>
      <li  class="pt-2"><strong style="color:#7B3F00">Dados em Tempo Real:</strong>Informações climáticas atualizadas para prever mudanças e ajustar o manejo da irrigação, fertilização e outros fatores de cultivo.</li>
      <li  class="pt-2"><strong style="color:#7B3F00">Ajuste Proativo:</strong>  Use dados precisos para ajustar rapidamente estratégias de cultivo, garantindo um melhor uso dos recursos e aumentando a produtividade.</li>
      <li  class="pt-2"><strong style="color:#7B3F00">Eficiência Agrícola:</strong> Minimize riscos de safras com informações detalhadas sobre o ambiente de cultivo e receba alertas para prevenir problemas como falta de nutrientes ou excesso de umidade.</li>
      
    </ul>
  </div>
</div>
  
</div>
<br><br>
<br>
<h3 class="text-center" style="color: #7B3F00">Confira as opiniões dos agricultores sobre nossa plataforma</h3>
<div class="mx-5 pt-5 d-flex fluid">
<img src="assets/img/logo/criativo.jpg"  class="col-6" alt="documentário" style="width:40%; height:85vh">
<p class="text-center col-6 pt-3" style="font-size:19px; color:black;"> "Como agricultor, encontrei no
   seu site uma ferramenta indispensável para otimizar meu trabalho. O uso dos sensores NPK 7-em-1 e 
   DHT11 proporciona uma visão clara das condições do solo e do clima, permitindo que eu tome decisões 
   mais precisas sobre quando e como plantar. A funcionalidade de analisar dados históricos junto 
   com os dados atuais é fantástica, pois me ajuda a identificar tendências e ajustar minhas práticas 
   conforme necessário. A pesquisa sobre a preparação do solo para diferentes culturas é um recurso
    valioso que me economiza tempo e esforço. O diário agrícola me ajuda a manter um registro
     detalhado das minhas atividades, e o suporte oferecido é sempre rápido e eficiente. Recomendo 
     este site 
   a qualquer agricultor que queira melhorar a gestão de suas culturas e obter melhores resultados."
<br>
<strong style="color:#556B2F" class="text-center">Agricultor Rafael Alberto</strong>
</p>
</div>

<div class="mx-5 pt-5 d-flex fluid">
<p class="text-center col-7 pt-3" style="font-size:19px; color:black;"> "Eu realmente gostei do site. 
  Ele é muito fácil de usar e me ajudou bastante na agricultura. Eu consigo ver como o solo e o clima 
  estão, o que me ajuda a saber quando plantar. A parte de comparar os dados antigos com os novos 
  é útil porque posso ver como as coisas mudaram e fazer melhorias. A seção de como preparar a terra
   para diferentes plantas é muito prática e me deu boas dicas. O diário para anotar o que faço e o
    suporte que oferecem também são muito bons. 
  Estou satisfeita com o site e acho que ele pode ajudar muito quem trabalha com plantação."
<br>
<strong style="color:#556B2F" class="text-center">Agricultora Joana Miguel</strong>
</p>


<img src="assets/img/logo/criativa.jpg"  class="col-5" alt="documentário" style="width:40%; height:85vh">
</div>
<br><br>
<h3 style="color:#556B2F" class="text-center">Perguntas Frequentes </h3>
<br><br>
<div class="mx-5">
<details>
  <summary style="color:#7B3F00">1. Como posso conectar e calibrar os sensores NPK 7-em-1 e DHT11?</summary>
  <p style="color:black">Os sensores NPK 7-em-1 e DHT11 já vêm calibrados de fábrica. Se você encontrar algum problema com eles, por favor, entre em contato com o representante autorizado para assistência.</p>
</details>

<details class="pt-2">
  <summary style="color:#7B3F00">2. Como interpretar os dados fornecidos pelos sensores?</summary>
  <p style="color:black">Explicações sobre como ler e utilizar os dados dos sensores para tomar decisões agrícolas informadas.</p>
</details>

<details class="pt-2" >
  <summary style="color:#7B3F00">3. Como comparar dados históricos com dados atuais?</summary>
  <p style="color:black">Instruções sobre como usar as funcionalidades do site para comparar e analisar dados ao longo do tempo.</p>
</details>

<details class="pt-2">
  <summary style="color:#7B3F00" >4. Qual é a melhor maneira de preparar o solo para diferentes tipos de culturas?</summary>
  <p style="color:black">.
  A melhor maneira de preparar o solo para diferentes tipos de culturas é:
  </p>
  <ul style="color:black">
    <li>Teste do Solo: Verifique a acidez e os nutrientes.</li>
    <li>Melhore a Estrutura: Adicione matéria orgânica para enriquecer o solo.</li>
  <li>Faça a Aração: Revolva o solo para melhorar a drenagem e aeração.
  </li>
<li>  Adapte a Fertilização: Use fertilizantes específicos conforme a necessidade de cada cultura</li>
  </ul>
</details>

<details class="pt-2">
  <summary style="color:#7B3F00">5. Como usar o diário agrícola para registrar minhas atividades?</summary>
  <p style="color:black">Orientações sobre como utilizar o diário agrícola para manter um registro detalhado das práticas e observações.</p>
</details>

<details  class="pt-2">
  <summary style="color:#7B3F00">6. Como posso entrar em contato com o suporte se tiver problemas?</summary>
  <p style="color:black">Informações sobre como acessar o suporte técnico e resolver quaisquer problemas ou dúvidas.</p>
</details>

<details class="pt-2">
  <summary style="color:#7B3F00">7. O site pode ajudar a diagnosticar problemas com as culturas?</summary>
  <p style="color:black">Perguntas sobre se o site oferece ferramentas ou informações para identificar e resolver problemas relacionados às plantas e ao cultivo.</p>
</details>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
<script>
  
function handleIntersection(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {  
      entry.target.classList.add('visible');  
      observer.unobserve(entry.target);  
    }
  });
}

// Configuração do Intersection Observer
const observer = new IntersectionObserver(handleIntersection, {
  threshold: 0.1  
});

// Seleciona todos os elementos que terão a animação
document.querySelectorAll('.fade-in').forEach(element => {
  observer.observe(element); 
});

</script>


@endsection

