<?php
session_start();
require_once 'includes/csrf.php';
$page_title       = 'João Saveia';
$active_nav       = 'home';
$wrapper_class    = 'home-page';
$show_loading_screen = true;
$extra_css = [
    'css/pages/home.css',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
];
include 'includes/head.php';
include 'includes/header.php';
?>
		
		<section id="banner">
			<div id="main-slider" class="flexslider">
				<ul class="slides">
					<li><img src="img/slides/book-slides.jpg" alt=""></li>
					<li><img src="img/slides/book-slides-one.jpg" alt=""></li>
					<li><img src="img/slides/3.jpg" alt=""></li>
					<li><img src="img/slides/livros-novos.jpg" alt=""></li>
					<li><img src="img/slides/compra-livro.jpg" alt=""></li>
				</ul>
			</div>
		</section>
		
		<section id="call-to-action-2">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-9">
						<h3>Bem-vindo ao Site.</h3>
						<p style="text-align: justify;">Desejamos que se sinta bem entre nós e que encontre oportunidades e condições para aprender e desenvolver-se, como estudante ou profissional.</p>
						<p style="text-align: justify;">Seu acesso ao site é muito importante para nós e acreditamos, sinceramente, que a sua experiência connosco será excelente e duradoura. Vamos caminhar juntos pelos caminhos do conhecimento.</p>
						<p style="text-align: justify;">Esta página eletrónica lhe vai proporcionar informações sobre os serviços prestados pelo Psicólogo João Saveia e seus Colaboradores, e conhecimento sobre a Psicologia Organizacional e do Trabalho. Almejamos que o site lhe possa ser útil, e que desperte em si um grande interesse pela área.</p>
						<p style="text-align: justify;">Agradecemos pela confiança em nós depositada e desejamos uma boa navegação.</p>
						<br>
						<p><strong>João Saveia</strong></p>
					</div>
				</div>
			</div>
		</section>

		<!-- Seção de Cards -->
		<section class="section-padding gray-bg">
			<div class="container">
				<div class="row card-container">
					<div class="col-md-4 col-sm-4 card-item">
						<div class="card-content">
							<h5>PPR</h5>
							<div class="card-image">
								<img src="img/ppr/1.JPG" alt="PPR">
							</div>
							<p style="text-align: justify;">O mundo está a envelhecer. Em Angola, a velocidade é menor se comparada com os países mais desenvolvidos. No entanto, desde o término do conflito armado, tem-se verificado um aumento...</p>
							<div class="btn-container">
								<a href="./index-ppr.html" class="btn btn-primary">Saiba Mais</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 card-item">
						<div class="card-content">
							<h5>Livros</h5>
							<div class="card-image">
								<img src="img/ppr/livro3.jpg" alt="Livros">
							</div>
							<p style="text-align: justify;">O trabalho de pesquisa transformado no presente livro fornece, certamente, a mais ampla descrição já feita sobre o exercício profissional da Psicologia em Angola, o que destaca o seu caráter pioneiro...</p>
							<div class="btn-container">
								<a href="./publicacao-livro.html" class="btn btn-primary">Saiba Mais</a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 card-item">
						<div class="card-content">
							<h5>SOP Trabalho</h5>
							<div class="card-image">
								<img src="./img/soplogo.jpg" alt="SOP Trabalho">
							</div>
							<p style="text-align: justify;">O S.O.P. Trabalho é um serviço especializado de ajuda e orientação psicológica de um profissional para profissionais que estejam inseridos ou pretendam ingressar no mercado de trabalho.</p>
							<div class="btn-container">
								<a href="./img/Flyer_SOP.pdf" class="btn" download>Descarregar</a>
								<a href="./img/Flyer_SOP.pdf" class="btn btn-primary" target="_blank">Saiba Mais</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Outras seções (mantidas iguais) -->
		<!-- ... -->

		<!-- Seção de Destaques com Slider -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slider-header">
							<div class="section-title text-center">
								<h2>Destaques</h2>
							</div>
							<div class="slider-indicator">
								<span class="current-slide">1</span> / <span class="total-slides">3</span>
							</div>
						</div>
						
						<div class="destaques-slider-container">
							<div class="destaques-slider">
								<!-- Slide 1 -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Notícias</span>
											<img src="./img/not-new.jpg" alt="Notícia">
										</div>
										<div class="destaque-content">
											<h4>Livros a Venda - Edição Especial</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 2020-07-31
											</span>
											<p style="text-align: justify;">Nova edição de livros sobre Psicologia Organizacional disponível para aquisição. Obras atualizadas com as mais recentes pesquisas na área.</p>
											<a href="publicacao-livro.html" class="btn btn-primary destaque-btn">Saiba Mais</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 2 -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Eventos</span>
											<img src="img/event.jpeg" alt="Evento">
										</div>
										<div class="destaque-content">
											<h4>VII Congresso Iberoamericano de Psicologia das Organizações e do Trabalho</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> Próximo Evento
											</span>
											<p style="text-align: justify;">Participe do importante congresso internacional que reúne os maiores especialistas em Psicologia Organizacional e do Trabalho da América Latina e Europa.</p>
											<a target="_blank" href="https://7ciapot.com/principal" class="btn btn-primary destaque-btn">Visite o site oficial</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 3 -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Leitura</span>
											<img src="./img/dia-idoso.jpeg" alt="Sugestão de Leitura">
										</div>
										<div class="destaque-content">
											<h4>Dia Nacional do Idoso - Reflexões Contemporâneas</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 2020-11-30
											</span>
											<p style="text-align: justify;">Artigo especial sobre o envelhecimento ativo e a importância da preparação psicológica para a reforma na sociedade angolana.</p>
											<a href="destaque-s_leitura.html" class="btn btn-primary destaque-btn">Leia Mais</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 4 (adicional) -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Notícias</span>
											<img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Workshop">
										</div>
										<div class="destaque-content">
											<h4>Workshop de Gestão de Equipas - Edição Especial</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 2023-10-15
											</span>
											<p style="text-align: justify;">Workshop prático sobre técnicas modernas de gestão de equipas com foco em resultados e bem-estar no ambiente de trabalho.</p>
											<a href="destaque-eventos.html" class="btn btn-primary destaque-btn">Inscreva-se</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 5 (adicional) -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Publicação</span>
											<img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Nova Publicação">
										</div>
										<div class="destaque-content">
											<h4>Novo Artigo Científico Publicado</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 2023-09-20
											</span>
											<p style="text-align: justify;">"Impacto das Políticas de Recursos Humanos no Bem-estar dos Trabalhadores Angolanos" - artigo publicado em revista internacional.</p>
											<a href="publicacao-artigo.html" class="btn btn-primary destaque-btn">Ler Artigo</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 6 (adicional) -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Serviço</span>
											<img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Consultoria">
										</div>
										<div class="destaque-content">
											<h4>Consultoria em Gestão de Mudança Organizacional</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> Disponível
											</span>
											<p style="text-align: justify;">Nova modalidade de consultoria especializada em processos de mudança organizacional com suporte psicológico às equipas.</p>
											<a href="services.html" class="btn btn-primary destaque-btn">Saber Mais</a>
										</div>
									</div>
								</div>
								
								<!-- Slide 7 (adicional) -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Eventos</span>
											<img src="./img/lancamento-novo.jpeg" alt="Lançamento de Obra">
										</div>
										<div class="destaque-content">
											<h4>Lançamento da Obra: A Arte de se Reformar</h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 23/02/2026
											</span>
											<p style="text-align: justify;">João Saveia, Riquita da Silva e a Editora Whereangola têm a honra de convidá-lo(a) a participar na cerimónia de lançamento das obras 📚.</p>
												<a href="destaque-eventos.html" class="btn btn-primary destaque-btn">Saber Mais</a>
										</div>
									</div>
								</div>
								<!-- Slide 8 (adicional) -->
								<div class="destaque-slide">
									<div class="destaque-item">
										<div class="destaque-image">
											<span class="destaque-category">Eventos</span>
											<img src="./img/lancamento-novo-1.jpeg" alt="Lançamento de Obra">
										</div>
										<div class="destaque-content">
											<h4>Lançamento da Obra: Suporte Organizacional para a Reforma </h4>
											<span class="date-type">
												<i class="fa fa-calendar"></i> 23/02/2026
											</span>
											<p style="text-align: justify;">João Saveia, Riquita da Silva e a Editora Whereangola têm a honra de convidá-lo(a) a participar na cerimónia de lançamento das obras 📚</p>
											<a href="destaque-eventos.html" class="btn btn-primary destaque-btn">Saber Mais</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Seção de Clientes e Parceiros com Slider -->
		<section id="content" class="section-padding gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Clientes e Parceiros</h2>
						</div>
						
						<div class="clientes-slider">
							<div class="cliente-slide">
								<img src="img/clientes/cfm.png" alt="CFM">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/angop.png" alt="ANGOP">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/clinicaeden.png" alt="Clínica Eden">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/mpla.png" alt="MPLA">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/crisav.png" alt="Crisav">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/sonangol.png" alt="Sonangol">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/tpa.png" alt="TPA">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/bda.jfif" alt="BDA">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/rna.png" alt="RNA">
							</div>
							<div class="cliente-slide">
								<img src="img/clientes/isep.png" alt="ISEP">
							</div>
							<div class="cliente-slide">
								<img src="./img/clientes/faa.JPG" alt="FAA">
							</div>
							<div class="cliente-slide">
								<img src="./img/governo.JPG" alt="Governo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php
$extra_scripts = <<<'SCRIPTS'
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		$(document).ready(function(){
			// Simular progresso do loading
			var progress = 0;
			var progressInterval = setInterval(function() {
				progress += Math.random() * 15;
				if (progress >= 100) {
					progress = 100;
					clearInterval(progressInterval);
				}
				$('#loading-progress-bar').css('width', progress + '%');
			}, 200);
			
			// Inicializar o slider de destaques
			var destaqueSlider = $('.destaques-slider').slick({
				dots: true,
				infinite: true,
				speed: 500,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				pauseOnHover: true,
				arrows: true,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			
			// Atualizar indicador de slide atual
			destaqueSlider.on('afterChange', function(event, slick, currentSlide){
				$('.current-slide').text(currentSlide + 1);
			});
			
			// Inicializar contador total de slides
			var totalSlides = $('.destaques-slider .destaque-slide').length;
			$('.total-slides').text(totalSlides);
			
			// Inicializar o slider de clientes
			$('.clientes-slider').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 6,
				slidesToScroll: 3,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					}
				]
			});
			
			// Atualizar ano do copyright
			var date = new Date();
			document.getElementById("date").innerHTML = date.getFullYear().toString();
			
			// Controles personalizados (opcional)
			$('.prev-destaque').click(function(){
				destaqueSlider.slick('slickPrev');
			});
			
			$('.next-destaque').click(function(){
				destaqueSlider.slick('slickNext');
			});
			
			// Esconder loading screen quando a página estiver totalmente carregada
			$(window).on('load', function() {
				// Garantir que a barra de progresso chegue a 100%
				clearInterval(progressInterval);
				$('#loading-progress-bar').css('width', '100%');
				
				// Pequeno delay para mostrar o loading completo
				setTimeout(function() {
					$('#loading-screen').addClass('fade-out');
					$('#wrapper').addClass('loaded');
					
					// Remover o loading screen do DOM após a transição
					setTimeout(function() {
						$('#loading-screen').remove();
					}, 500);
				}, 500);
			});
		});
	</script>
SCRIPTS;
include 'includes/footer.php';
?>
