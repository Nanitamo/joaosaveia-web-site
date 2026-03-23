<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>João Saveia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!-- favicon-->
	<link href="img/logosaveia.png" rel="icon">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	
	
	


	<!-- Vendor Styles -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Block Styles -->
	<link href="css/gallery-1.css" rel="stylesheet">
	
	<!-- Adicionando Slick Slider -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	
	<style>
		/* Estilos para o Loading Screen - Fundo branco com logo centralizada */
		#loading-screen {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: white;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 9999;
			transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
		}
		
		#loading-screen.fade-out {
			opacity: 0;
			visibility: hidden;
		}
		
		.loading-content {
			text-align: center;
			color: #333;
			max-width: 400px;
			padding: 20px;
		}
		
		.loading-logo {
			width: 180px;
			height: 180px;
			margin: 0 auto 30px;
			animation: pulse 2s infinite;
		}
		
		.loading-logo img {
			width: 100%;
			height: 100%;
			object-fit: contain;
		}
		
		.loading-name {
			font-size: 24px;
			font-weight: bold;
			color: rgb(4, 58, 73);
			margin: 10px 0 5px;
			letter-spacing: 1px;
		}
		
		.loading-title {
			font-size: 16px;
			color: #666;
			margin-bottom: 30px;
			font-weight: 300;
			line-height: 1.4;
		}
		
		.loading-spinner {
			width: 50px;
			height: 50px;
			margin: 20px auto;
			border: 4px solid rgba(4, 58, 73, 0.1);
			border-radius: 50%;
			border-top-color: rgb(4, 58, 73);
			animation: spin 1s ease-in-out infinite;
		}
		
		.loading-text {
			font-size: 14px;
			color: #888;
			letter-spacing: 1px;
			margin-top: 15px;
			animation: fadeInOut 1.5s ease-in-out infinite;
		}
		
		.loading-progress {
			width: 300px;
			height: 4px;
			background: #f0f0f0;
			border-radius: 4px;
			margin: 25px auto 0;
			overflow: hidden;
		}
		
		.loading-progress-bar {
			height: 100%;
			width: 0%;
			background: rgb(4, 58, 73);
			border-radius: 4px;
			transition: width 0.3s ease;
			box-shadow: 0 0 10px rgba(4, 58, 73, 0.3);
		}
		
		@keyframes spin {
			to { transform: rotate(360deg); }
		}
		
		@keyframes pulse {
			0%, 100% { transform: scale(1); }
			50% { transform: scale(1.05); }
		}
		
		@keyframes fadeInOut {
			0%, 100% { opacity: 0.6; }
			50% { opacity: 1; }
		}
		
		/* Garantir que o conteúdo principal só apareça após o loading */
		#wrapper {
			opacity: 0;
			transition: opacity 0.5s ease-in;
		}
		
		#wrapper.loaded {
			opacity: 1;
		}
		
		/* Estilos para alinhamento dos cards */
		.card-container {
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
			justify-content: center;
		}
		
		.card-item {
			flex: 1;
			min-width: 300px;
			max-width: 400px;
			margin-bottom: 30px;
			display: flex;
			flex-direction: column;
			height: 100%;
		}
		
		.card-content {
			flex: 1;
			display: flex;
			flex-direction: column;
		}
		
		.card-content p {
			flex: 1;
			margin-bottom: 15px;
		}
		
		.card-image {
			height: 230px;
			overflow: hidden;
			margin-bottom: 15px;
		}
		
		.card-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		
		/* Estilos para o slider de destaques */
		.destaques-slider-container {
			margin: 40px 0;
			padding: 0 15px;
		}
		
		.destaque-slide {
			padding: 10px;
			height: 100%;
		}
		
		.destaque-item {
			background: #fff;
			border-radius: 8px;
			overflow: hidden;
			box-shadow: 0 4px 6px rgba(0,0,0,0.1);
			transition: transform 0.3s ease;
			height: 100%;
			display: flex;
			flex-direction: column;
		}
		
		.destaque-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 6px 12px rgba(0,0,0,0.15);
		}
		
		.destaque-image {
			height: 200px;
			overflow: hidden;
			position: relative;
		}
		
		.destaque-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.5s ease;
		}
		
		.destaque-item:hover .destaque-image img {
			transform: scale(1.05);
		}
		
		.destaque-category {
			position: absolute;
			top: 10px;
			left: 10px;
			background: rgba(0, 123, 255, 0.9);
			color: white;
			padding: 5px 12px;
			border-radius: 20px;
			font-size: 0.8em;
			font-weight: 600;
		}
		
		.destaque-content {
			padding: 20px;
			flex: 1;
			display: flex;
			flex-direction: column;
		}
		
		.destaque-content h4 {
			margin-top: 0;
			color: #333;
			font-size: 1.2em;
			min-height: 56px;
		}
		
		.date-type {
			color: #666;
			font-size: 0.9em;
			margin: 10px 0;
			display: flex;
			align-items: center;
			gap: 8px;
		}
		
		.destaque-content p {
			color: #555;
			line-height: 1.6;
			flex: 1;
			margin-bottom: 15px;
		}
		
		.destaque-btn {
			margin-top: auto;
			align-self: flex-start;
		}
		
		/* Controles do slider de destaques */
		.destaques-slider .slick-prev,
		.destaques-slider .slick-next {
			width: 40px;
			height: 40px;
			z-index: 1;
			background: rgba(0, 123, 255, 0.8);
			border-radius: 50%;
			transition: all 0.3s ease;
		}
		
		.destaques-slider .slick-prev:hover,
		.destaques-slider .slick-next:hover {
			background: rgba(0, 123, 255, 1);
			transform: scale(1.1);
		}
		
		.destaques-slider .slick-prev:before,
		.destaques-slider .slick-next:before {
			color: white;
			font-size: 20px;
			opacity: 1;
		}
		
		.destaques-slider .slick-prev {
			left: -20px;
		}
		
		.destaques-slider .slick-next {
			right: -20px;
		}
		
		.destaques-slider .slick-dots {
			bottom: -30px;
		}
		
		.destaques-slider .slick-dots li button:before {
			font-size: 10px;
			color: #007bff;
		}
		
		.destaques-slider .slick-dots li.slick-active button:before {
			color: #007bff;
			opacity: 1;
		}
		
		/* Estilos para o slider de clientes */
		.clientes-slider {
			margin: 40px 0;
		}
		
		.cliente-slide {
			padding: 10px;
			text-align: center;
		}
		
		.cliente-slide img {
			max-width: 150px;
			max-height: 80px;
			margin: 0 auto;
			filter: grayscale(100%);
			transition: filter 0.3s ease;
			object-fit: contain;
		}
		
		.cliente-slide:hover img {
			filter: grayscale(0%);
		}
		
		/* Botões do slider de clientes */
		.clientes-slider .slick-prev,
		.clientes-slider .slick-next {
			width: 40px;
			height: 40px;
			z-index: 1;
		}
		
		.clientes-slider .slick-prev:before,
		.clientes-slider .slick-next:before {
			font-size: 40px;
			color: #333;
		}
		
		/* Responsividade */
		@media (max-width: 768px) {
			.card-item {
				min-width: 100%;
			}
			
			.destaques-slider .slick-prev {
				left: -10px;
			}
			
			.destaques-slider .slick-next {
				right: -10px;
			}
			
			.cliente-slide img {
				max-width: 120px;
				max-height: 60px;
			}
			
			.destaque-content h4 {
				min-height: auto;
			}
			
			.loading-progress {
				width: 250px;
			}
			
			.loading-logo {
				width: 150px;
				height: 150px;
			}
			
			.loading-name {
				font-size: 20px;
			}
			
			.loading-title {
				font-size: 14px;
			}
		}
		
		@media (max-width: 480px) {
			.destaques-slider .slick-prev,
			.destaques-slider .slick-next {
				display: none !important;
			}
			
			.loading-progress {
				width: 200px;
			}
			
			.loading-logo {
				width: 120px;
				height: 120px;
			}
		}
		
		/* Botões alinhados */
		.btn-container {
			display: flex;
			gap: 10px;
			margin-top: auto;
			flex-wrap: wrap;
		}
		
		.btn {
			margin-top: 10px;
		}
		
		/* Indicadores de destaque */
		.slider-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
			flex-wrap: wrap;
			gap: 15px;
		}
		
		.slider-controls {
			display: flex;
			gap: 10px;
		}
		
		.slider-controls button {
			background: #007bff;
			color: white;
			border: none;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			transition: all 0.3s ease;
		}
		
		.slider-controls button:hover {
			background: #0056b3;
			transform: scale(1.1);
		}
		
		.slider-indicator {
			display: flex;
			align-items: center;
			gap: 5px;
			font-size: 0.9em;
			color: #666;
		}
		
	</style>
</head>

<body>
	<!-- Loading Screen - Fundo branco com logo centralizada -->
	<div id="loading-screen">
		<div class="loading-content">
			<div class="loading-logo">
				<img src="img/logosaveia.png" alt="João Saveia">
			</div>
			<div class="loading-name">João Saveia</div>
			<div class="loading-title">Consultor Pesquisador<br>Psicólogo Organizacional e do Trabalho</div>
			<div class="loading-spinner"></div>
		</div>
	</div>

<div id="wrapper" class="home-page">
		<!-- Topbar e Header (mantido igual) -->
		<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
				<p class="pull-left hidden-xs">Contacte-nos</p>
				<div  class="pull-right">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/joaomanuel.saveiafrancisco?ref=brem" target="_blank" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://instagram.com/joaomanuelsaveia?igshid=1l9it5htjepre" target="_blank" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
			 </div>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel. (+244) 923-255-835</p>
      </div>
    </div>
  </div>
</div>
		
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="img/logosaveia.png" alt="logo" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">Sobre Nós <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="about-one.html">Perfil</a></li>
									<li><a href="about.html">Perfil Institucional</a></li>
									<li><a href="contact.html">Contactos Gerais</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">Publicações<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="publicacao-artigo.html">Artigos</a></li>
									<li><a href="publicacao-livro.html">Livros</a></li>
								</ul>
							</li>
							<li><a href="services.html">Serviços</a></li>
							<li><a href="galeria.html">Galeria & Imagem</a></li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">Destaques<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="destaque-noticias.html">Noticias</a></li>
									<li><a href="destaque-eventos.html">Eventos</a></li>
									<li><a href="destaque-s_leitura.html">Sugestões de Leitura</a></li>
								</ul>
							</li>
							<li><a href="midia.html">Midia</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
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

		<footer>
			<!-- Footer content (mantido igual) -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="widget">
							<h5 class="widgetheading">Contactos Gerais</h5>
							<address>
								<strong>João Saveia </strong><br>
								Condominio Flores de Talatona, Casa D03 Talatona<br>
								Luanda, Angola.</address>
							<p>
								<i class="fa fa-phone"></i> (+244) 923-255-835 <br>
								<i class="fa fa-envelope"></i> jmsaveia@joaosaveia.ao
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="widget">
							<h5 class="widgetheading">Links de interesse</h5>
							<ul class="link-list">
								<li><a target="_blank" href="https://www.abrapso.org.br">ABRAPSO - Associação Brasileira de Psicologia Social</a></li>
								<li><a target="_blank" href="http://www.anpad.org.br">ANPAD – Associação Nacional de Pós-Graduação e Pesquisa em Administração</a></li>
								<li><a target="_blank" href="https://www.anpepp.org.br">ANPEPP - Associação Nacional de Pesquisa e Pós-Graduação em Psicologia</a></li>
								<li><a target="_blank" href="http://www.apa.org">APA - American Psychological Association</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="widget">
							<h5 class="widgetheading">Outras Entidades</h5>
							<ul class="link-list">
								<li><a target="_blank" href="http://www.eawop.org">EAWOP - European Association of Work and Organizational Psychology</a></li>
								<li><a target="_blank" href="http://www.psi-plp.org">PSIPLP – Federação das Associações de Psicólogos dos Países de Língua Portuguesa</a></li>
								<li><a target="_blank" href="http://www.sbpot.org.br">SBPOT - Associação Brasileira de Psicologia Organizacional e do Trabalho</a></li>
								<li><a target="_blank" href="http://www.siop.org">SIOP - Society for Industrial and Organizational Psychology</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="widget">
							<h5 class="widgetheading">Newsletter</h5>
							<ul class="link-list">
								<form method="post" name="contact_form" action="newslatters-form.php">
									<div class="control-group">
										<div class="controls">
											<input type="email" class="form-control" placeholder="Email" name="email" required
												data-validation-required-message="Por favor insira o email" />
										</div><br>
										<button type="submit" class="btn btn-primary pull-left">Enviar</button>
								</form>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<span>Copyright © João Saveia <span id="date"></span>. Todos os Direitos Reservados.</span>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="https://www.facebook.com/joaomanuel.saveiafrancisco?ref=brem" target="_blank" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://instagram.com/joaomanuelsaveia?igshid=1l9it5htjepre" target="_blank" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	
	
	<!-- javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>
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
</body>
</html>