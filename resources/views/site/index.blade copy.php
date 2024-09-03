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
 
<img src="assets/img/logo/ph.jpg" alt="" class=" col-7" style="width:65%; height:85vh">

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


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
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

