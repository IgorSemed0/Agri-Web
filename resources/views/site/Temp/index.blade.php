@extends('layouts.temp.body')

@section('conteudo')

        <!-- Navbar & Hero End -->
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Pesquisar por palavra-chave</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Palavras-chave" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Nossas Funcionalidades</h4>
                <h1 class="display-3 text-capitalize mb-3">Inovação em Agricultura com Tecnologias FinTech</h1>
                <p>A Agri-Web revoluciona o setor agrícola ao trazer uma abordagem tecnológica de coleta de dados do solo, utilizando a engenhoca Escanor, e transformando esses dados em informações financeiras úteis para agricultores.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-seedling text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Monitoramento de Fertilidade</a>
                        <p class="mb-3">A Escanor analisa a fertilidade do solo em tempo real, permitindo que os agricultores façam escolhas precisas para melhorar suas produções e otimizar custos.</p>
                        <a href="#" class="btn text-secondary">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-chart-line text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Análise de Dados Financeiros</a>
                        <p class="mb-3">Os dados coletados são comparados com benchmarks financeiros, permitindo que os agricultores visualizem o impacto econômico e tomem decisões embasadas em dados.</p>
                        <a href="#" class="btn text-secondary">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-globe text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Compatibilidade Global</a>
                        <p class="mb-3">A Agri-Web suporta diversos tipos de solos e regiões, oferecendo informações personalizadas com base nos dados de cada localidade.</p>
                        <a href="#" class="btn text-secondary">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-user-shield text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Segurança e Privacidade</a>
                        <p class="mb-3">Todos os dados são processados com os mais altos padrões de segurança, garantindo a privacidade dos agricultores e a proteção das informações sensíveis.</p>
                        <a href="#" class="btn text-secondary">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature End -->

    <!-- About Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="img/agriculture.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="Agriculture Technology">
                        <div class="about-exp"><span>5 Anos de Experiência</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Sobre Nós</h4>
                        <h1 class="display-3 mb-3">Inovação em Agricultura com Monitoramento Inteligente do Solo</h1>
                        <p class="mb-4">A Agri-Web combina tecnologia e agricultura para oferecer dados precisos sobre a fertilidade do solo. A engenhoca Escanor, equipada com sensores modernos, coleta dados em tempo real, ajudando agricultores a otimizar suas culturas e reduzir custos.</p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-leaf text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Soluções Inteligentes</a>
                                            <p class="mb-0">Usamos a mais avançada tecnologia para fornecer análises detalhadas do solo, adaptadas às necessidades de cada região.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-seedling text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Agricultura Sustentável</a>
                                            <p class="mb-0">Promovemos práticas agrícolas sustentáveis, aumentando a eficiência da produção sem prejudicar o meio ambiente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Counter -->
    <div class="container-fluid counter py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-smile fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Agricultores Beneficiados</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">800</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-leaf fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Áreas Monitoradas (hectares)</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1500</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Equipe Especializada</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">20</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-award fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Anos de Inovação</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">5</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter End -->
    <!-- Service Start -->
    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Nossos Serviços</h4>
                <h1 class="display-3 text-capitalize mb-3">Proteja sua Família com a Melhor Água</h1>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Água Residencial</a>
                                        <p class="mb-0">Fornecemos soluções personalizadas para garantir que sua casa receba água tratada, segura e de alta qualidade.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-hand-holding-water text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Água Comercial</a>
                                        <p class="mb-0">Nossas soluções de água tratada para empresas garantem segurança, conformidade e eficiência em grandes volumes.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-dumpster-fire text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Plantas de Filtragem</a>
                                        <p class="mb-0">Projetamos e implementamos plantas de filtragem que atendem aos mais altos padrões de qualidade, adaptadas às suas necessidades.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="img/water.png" class="img-fluid w-100" alt="Imagem de água">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-assistive-listening-systems text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Amaciamento de Água</a>
                                        <p class="mb-0">Reduza a dureza da água e prolongue a vida útil dos seus eletrodomésticos com nosso serviço de amaciamento de água de alta eficiência.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Pesquisa de Mercado</a>
                                        <p class="mb-0">Oferecemos análises detalhadas do mercado de água tratada para identificar oportunidades de expansão e inovação para seu negócio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Planejamento de Projetos</a>
                                        <p class="mb-0">Nosso serviço de planejamento estratégico ajuda você a executar projetos de água tratada, da concepção à implementação.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Nossa Equipe</h4>
                <h1 class="display-3 text-capitalize mb-3">Conheça os Especialistas por Trás do Sucesso</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="Imagem de equipe 1">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Ana Silva</h4>
                                <p class="mb-0">CEO & Fundadora</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Imagem de equipe 2">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Carlos Pereira</h4>
                                <p class="mb-0">CTO & Co-Fundador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Imagem de equipe 3">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Mariana Costa</h4>
                                <p class="mb-0">Gerente de Projetos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Imagem de equipe 4">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Pedro Almeida</h4>
                                <p class="mb-0">Diretor de Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
