<?php
$page_title = 'João Saveia - Galeria';
$active_nav = 'galeria';
$extra_css = ['css/pages/galeria.css'];
include 'includes/head.php';
include 'includes/header.php';
?>

<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="gallery-header">
					<h2>Galeria & Imagens</h2>
				</div>
			</div>
		</div>
	</div>
</section>
	
<section class="section-padding gray-bg gallery-section">
	<div class="container">
		<!-- Filtros -->
		<div class="gallery-filters">
			<ul class="filter-list">
				<li class="active"><a href="#" data-filter="*">Todos</a></li>
				<li><a href="#" data-filter=".photography">Fotografias</a></li>
				<li><a href="#" data-filter=".outside">Eventos</a></li>
			</ul>
		</div>
		
		<!-- Grid da Galeria -->
		<div class="gallery-grid" id="gallery-container">
			<!-- Item 1 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/1.JPG" class="img-responsive" alt="Momento profissional">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/1.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Momento Profissional</h4>
					<p>Atividade profissional em ambiente corporativo</p>
				</div>
			</div>
			
			<!-- Item 2 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/2.JPG" class="img-responsive" alt="Apresentação acadêmica">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/2.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Apresentação Acadêmica</h4>
					<p>Momento de partilha de conhecimento</p>
				</div>
			</div>
			
			<!-- Item 3 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/3.JPG" class="img-responsive" alt="Workshop corporativo">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/3.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Workshop Corporativo</h4>
					<p>Capacitação em ambiente organizacional</p>
				</div>
			</div>
			
			<!-- Item 4 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/4.JPG" class="img-responsive" alt="Reunião de trabalho">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/4.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Reunião de Trabalho</h4>
					<p>Discussão de estratégias e planeamento</p>
				</div>
			</div>
			
			<!-- Item 5 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/5.JPG" class="img-responsive" alt="Formação especializada">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/5.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Formação Especializada</h4>
					<p>Sessão de capacitação profissional</p>
				</div>
			</div>
			
			<!-- Item 6 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/6.JPG" class="img-responsive" alt="Seminário acadêmico">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/6.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Seminário Acadêmico</h4>
					<p>Participação em evento científico</p>
				</div>
			</div>
			
			<!-- Item 7 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/7.JPG" class="img-responsive" alt="Conferência internacional">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/7.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Conferência Internacional</h4>
					<p>Participação em evento global</p>
				</div>
			</div>
			
			<!-- Item 8 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/14.JPG" class="img-responsive" alt="Palestra institucional">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/14.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Palestra Institucional</h4>
					<p>Compartilhamento de conhecimento</p>
				</div>
			</div>
			
			<!-- Item 9 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/9.JPG" class="img-responsive" alt="Workshop prático">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/9.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Workshop Prático</h4>
					<p>Aplicação de metodologias ativas</p>
				</div>
			</div>
			
			<!-- Item 10 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/18.JPG" class="img-responsive" alt="Sessão de formação">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/18.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Sessão de Formação</h4>
					<p>Capacitação de profissionais</p>
				</div>
			</div>
			
			<!-- Item 11 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/16.JPG" class="img-responsive" alt="Apresentação de projeto">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/16.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Apresentação de Projeto</h4>
					<p>Demonstração de resultados</p>
				</div>
			</div>
			
			<!-- Item 12 -->
			<div class="gallery-item photography">
				<div class="gallery-thumb">
					<img src="./img/galeria/20.JPG" class="img-responsive" alt="Encontro profissional">
					<div class="image-overlay"></div>
					<div class="gallery-actions">
						<a href="./img/galeria/20.JPG" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Encontro Profissional</h4>
					<p>Networking e partilha de experiências</p>
				</div>
			</div>
			
			<!-- Item 13 - Evento -->
			<div class="gallery-item outside">
				<div class="gallery-thumb">
					<img src="./img/galeria/event.jpeg" class="img-responsive" alt="VII Congresso Iberoamericano">
					<div class="image-overlay"></div>
					<div class="event-badge">Evento</div>
					<div class="gallery-actions">
						<a href="./img/galeria/event.jpeg" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
						<a target="_blank" href="https://7ciapot.com/principal" class="gallery-link"><i class="fa fa-external-link"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>VII Congresso Iberoamericano</h4>
					<p>Psicologia das Organizações e do Trabalho</p>
				</div>
			</div>
			
			<!-- Item 14 - Evento -->
			<div class="gallery-item outside">
				<div class="gallery-thumb">
					<img src="./img/galeria/event-1.jpeg" class="img-responsive" alt="Live sobre Qualidade de Vida">
					<div class="image-overlay"></div>
					<div class="event-badge">Evento</div>
					<div class="gallery-actions">
						<a href="./img/galeria/event-1.jpeg" class="gallery-zoom" data-fancybox="gallery"><i class="fa fa-search-plus"></i></a>
						<a target="_blank" href="https://7ciapot.com/principal" class="gallery-link"><i class="fa fa-external-link"></i></a>
					</div>
				</div>
				<div class="gallery-caption">
					<h4>Live sobre Qualidade de Vida</h4>
					<p>Discussão sobre bem-estar profissional</p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>
