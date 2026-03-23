<?php
$page_title = 'João Saveia - Notícias';
$active_nav = 'destaques-noticias';
$extra_css = ['css/pages/destaque-noticias.css'];
include 'includes/head.php';
include 'includes/header.php';
?>

<!-- end header -->
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Notícias</h2>
            </div>
        </div>
    </div>
    </section>
    
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row row-equal-height">
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/dn.jpg" alt="About Images">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2020-07-01
                                </span>
                                <p>Brevemente lançamento de mais dois livros da autoria de João Saveia.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal1">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/breve.jpg" alt="About Images">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2020-07-02
                                </span>
                                <p>Brevemente</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal2">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/livro-re.jpg" alt="About Images">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2020-07-04
                                </span>
                                <p>Reimpressão</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal3">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/noticias-new.jpg" alt="About Images">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2020-07-04
                                </span>
                                <p>OLIMPÍADAS CIENTÍFICAS</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal4">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/brevemente.jpg" alt="About Images">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2020-07-10
                                </span>
                                <p>Reimpressão</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal5">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/brevemente-livro-1.jpeg" alt="brevemente-livro-1">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2026-02-05
                                </span>
                                <p>Brevemente.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal6">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="news-card">
                        <div class="card-inner">
                            <div class="card-image">
                                <img src="img/books/brevemente-livro-2.jpeg" alt="brevemente-livro-2">
                            </div>
                            <div class="card-content">
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i> 2026-02-02
                                </span>
                                <p>Brevemente.</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal7">
                                    Saiba Mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modais para cada notícia -->
    <!-- Modal 1 -->
    <div class="modal fade" id="newsModal1" tabindex="-1" role="dialog" aria-labelledby="newsModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal1Label">Lançamento de Novos Livros</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/dn.jpg" alt="Lançamento de Livros">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2020-07-01</span>
                    <div class="modal-description">
                        <p>Brevemente lançamento de mais dois livros da autoria de João Saveia. O autor prepara duas novas obras que prometem contribuir significativamente para a literatura e conhecimento em sua área de atuação.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Detalhes do Lançamento</h5>
                        <p><strong>Título dos Livros:</strong> A ser anunciado em breve</p>
                        <p><strong>Data do Lançamento:</strong> A ser confirmada</p>
                        <p><strong>Local:</strong> Luanda, Angola</p>
                        <p><strong>Sinopse:</strong> As novas obras abordarão temas relevantes para o desenvolvimento pessoal e profissional, baseadas na vasta experiência do autor.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="newsModal2" tabindex="-1" role="dialog" aria-labelledby="newsModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal2Label">Brevemente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/breve.jpg" alt="Brevemente">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2020-07-02</span>
                    <div class="modal-description">
                        <p>Em breve, novas publicações e novidades sobre o trabalho de João Saveia. Fique atento para mais informações.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Informações</h5>
                        <p>Estamos preparando conteúdos exclusivos e novidades que serão anunciadas em breve. Acompanhe nossas redes sociais e site para ficar por dentro de todas as atualizações.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="newsModal3" tabindex="-1" role="dialog" aria-labelledby="newsModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal3Label">Reimpressão</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/livro-re.jpg" alt="Reimpressão">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2020-07-04</span>
                    <div class="modal-description">
                        <p>Reimpressão de livros do autor João Saveia. As obras estarão novamente disponíveis para aquisição.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Detalhes da Reimpressão</h5>
                        <p><strong>Livros disponíveis:</strong> Obras selecionadas do autor</p>
                        <p><strong>Previsão de disponibilidade:</strong> Próximas semanas</p>
                        <p><strong>Onde encontrar:</strong> Livrarias parceiras e site oficial</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="newsModal4" tabindex="-1" role="dialog" aria-labelledby="newsModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal4Label">OLIMPÍADAS CIENTÍFICAS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/noticias-new.jpg" alt="Olimpíadas Científicas">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2020-07-04</span>
                    <div class="modal-description">
                        <p>Participação e contribuições de João Saveia nas Olimpíadas Científicas.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Sobre o Evento</h5>
                        <p>João Saveia tem participado ativamente em olimpíadas científicas, contribuindo com seu conhecimento e experiência para incentivar jovens talentos na área da pesquisa e ciência.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="newsModal5" tabindex="-1" role="dialog" aria-labelledby="newsModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal5Label">Reimpressão</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/brevemente.jpg" alt="Reimpressão">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2020-07-10</span>
                    <div class="modal-description">
                        <p>Nova reimpressão de obras de João Saveia. Mais exemplares disponíveis para atender à demanda.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Informações da Reimpressão</h5>
                        <p><strong>Tiragem:</strong> Ampliada para atender à demanda</p>
                        <p><strong>Disponibilidade:</strong> Em todas as livrarias parceiras</p>
                        <p><strong>Edição:</strong> Revista e atualizada</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="newsModal6" tabindex="-1" role="dialog" aria-labelledby="newsModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal6Label">Brevemente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/brevemente-livro-1.jpeg" alt="brevemente-livro-1">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2026-02-05</span>
                    <div class="modal-description">
                        <p>Brevemente. Novidades emocionantes estão por vir no trabalho de João Saveia.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Em breve</h5>
                        <p>Estamos preparando grandes novidades para 2026. Fique ligado para mais atualizações sobre novos projetos e publicações.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade" id="newsModal7" tabindex="-1" role="dialog" aria-labelledby="newsModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="newsModal7Label">Brevemente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <img src="img/books/brevemente-livro-2.jpeg" alt="brevemente-livro-2">
                    </div>
                    <span class="modal-date"><i class="fa fa-calendar"></i> 2026-02-02</span>
                    <div class="modal-description">
                        <p>Brevemente. Preparando novos conteúdos e publicações para 2026.</p>
                    </div>
                    <div class="modal-details">
                        <h5>Próximos lançamentos</h5>
                        <p>O ano de 2026 trará novas oportunidades e conhecimentos através das obras e participações de João Saveia. Aguarde!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>
