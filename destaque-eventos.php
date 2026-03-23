<?php
$page_title = 'João Saveia - Eventos';
$active_nav = 'destaques-eventos';
$extra_css = ['css/pages/destaque-eventos.css'];
include 'includes/head.php';
include 'includes/header.php';
?>
<!-- end header -->
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Eventos</h2>
            </div>
        </div>
    </div>
    </section>

<section class="section-padding gray-bg">
        <div class="container">
            <div class="row row-equal-height">
                <!-- Evento 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/event.jpeg" alt="VII Congresso Iberoamericano">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 20 a 25-10-2021
                                </span>
                                <p>VII Congresso Iberoamericano de Psicologia das Organizações e do Trabalho</p>
                                <button class="btn-saiba-mais" onclick="openModal(1)">Saiba Mais</button>
                                <a target="_blank" href="https://7ciapot.com/principal" class="event-link">Visite o site oficial</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Evento 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/event-1.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-06-04 / 18:00:00
                                </span>
                                <div class="no-description"></div>
                                <button class="btn-saiba-mais" onclick="openModal(2)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/evento-2.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-06-18 / 20:00:00
                                </span>
                                <div class="no-description"></div>
                                <button class="btn-saiba-mais" onclick="openModal(3)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/evento-new.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-07-08 (Quarta-Feira)<br>
                                    16h (Brasil) - 20h (Angola)
                                </span>
                                <div class="no-description"></div>
                                <button class="btn-saiba-mais" onclick="openModal(4)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/events-new.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-07-23 (Quinta-Feira)<br>
                                    16h (Brasil) Live no Facebook
                                </span>
                                <div class="no-description"></div>
                                <button class="btn-saiba-mais" onclick="openModal(5)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/evento-08.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-08-13 (Quinta-Feira)<br>
                                    19h30 (Angola) 15h30 (Brasil)
                                </span>
                                <p>Webinar: Qualidade de Vida e Bem-Estar na Pós Carreira</p>
                                <button class="btn-saiba-mais" onclick="openModal(6)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 7 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/evento-07.jpg" alt="Evento Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-10-08 (Quinta-Feira)<br>
                                    16h00 - 17h30
                                </span>
                                <p>Webinar: A Gestão de Projectos de Transferência de Conhecimento: A desconstrução do mito</p>
                                <button class="btn-saiba-mais" onclick="openModal(7)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 8 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/palestra-destaque.jpeg" alt="Palestra Imagem">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 2020-12-03 (Quinta-Feira)<br>
                                    14h00
                                </span>
                                <p>Palestra: Qualidade de Vida e Bem-Estar no Pós-Carreira</p>
                                <button class="btn-saiba-mais" onclick="openModal(8)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!-- Evento 9 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/lancamento-novo-1.jpeg" alt="Lançamento de Obra">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 23/02/2026 (Sexta-Feira)<br>
                                    16h30
                                </span>
                                <p>Lançamento da Obra:Suporte Organizacional para a Reforma: Mensurando o Papel das Organizações na Promoção do Envelhecimento Activo</p>
                                <button class="btn-saiba-mais" onclick="openModal(9)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Evento 10 -->
                <div class="col-md-4 col-sm-6">
                    <div class="event-card">
                        <div class="event-card-inner">
                            <div class="event-image">
                                <img src="img/lancamento-novo.jpeg" alt="Lançamento de Obra">
                            </div>
                            <div class="event-content">
                                <span class="event-date">
                                    <i class="fa fa-calendar"></i> 23/02/2026 (Sexta-Feira)<br>
                                    16h30
                                </span>
                                <p>Lançamento da Obra: A Arte de se Reformar: Um Diário Reflexivo sobre Terceira Idade em Angola </p>
                                <button class="btn-saiba-mais" onclick="openModal(10)">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="eventoModal" tabindex="-1" role="dialog" aria-labelledby="eventoModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="eventoModalLabel">Detalhes do Evento</h4>
                </div>
                <div class="modal-body">
                    <img id="modal-imagem" class="modal-image" src="" alt="Evento">
                    
                    <div class="modal-detalhes">
                        <p><i class="fa fa-calendar"></i> <strong>Data:</strong> <span id="modal-data"></span></p>
                        <p><i class="fa fa-clock-o"></i> <strong>Horário:</strong> <span id="modal-horario"></span></p>
                        <p><i class="fa fa-map-marker"></i> <strong>Local:</strong> <span id="modal-local"></span></p>
                    </div>
                    
                    <div class="modal-descricao">
                        <h4>Sobre o Evento</h4>
                        <p id="modal-descricao"></p>
                    </div>
                    
                    <div id="modal-link-container" style="margin-top: 15px;">
                        <a id="modal-link" href="#" target="_blank" class="event-link">Visite o site oficial</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>
