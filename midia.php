<?php
$page_title = 'João Saveia - Mídia';
$active_nav = 'midia';
$extra_css = ['css/pages/midia.css'];
include 'includes/head.php';
include 'includes/header.php';
?>

<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Mídia</h2>
			</div>
		</div>
	</div>
	</section>
	
	<section class="section-padding gray-bg media-section">
		<div class="container">
			<div class="row row-equal-height">
				<!-- Vídeo 1 -->
				<div class="col-md-6 col-sm-6">
					<div class="video-card">
						<div class="video-card-inner">
							<div class="video-thumbnail">
								<img src="img/evento-new.jpg" alt="Webinar: Gestão de Projetos de Transferência de Conhecimento">
								<div class="video-play-overlay">
									<i class="fa fa-play-circle"></i>
								</div>
							</div>
							<div class="video-content">
								<h4 class="video-title">Webinar: Gestão de Projetos de Transferência de Conhecimento</h4>
								<a href="https://www.facebook.com/watch/?v=664769660590790" class="btn btn-video" target="_blank">
									<i class="fa fa-play"></i> Assistir Vídeo
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Vídeo 2 -->
				<div class="col-md-6 col-sm-6">
					<div class="video-card">
						<div class="video-card-inner">
							<div class="video-thumbnail">
								<img src="img/destaque-evento-new.jpg" alt="Live sobre Qualidade de Vida no Pós-Carreira">
								<div class="video-play-overlay">
									<i class="fa fa-play-circle"></i>
								</div>
							</div>
							<div class="video-content">
								<h4 class="video-title">Live sobre Qualidade de Vida no Pós-Carreira</h4>
								<button type="button" class="btn btn-video" data-toggle="modal" data-target="#videoModal1">
									<i class="fa fa-play"></i> Assistir Vídeo
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Vídeo 3 -->
				<div class="col-md-6 col-sm-6">
					<div class="video-card">
						<div class="video-card-inner">
							<div class="video-thumbnail">
								<img src="img/pfr-saveia.jpg" alt="Programa de Preparação para Reforma">
								<div class="video-play-overlay">
									<i class="fa fa-play-circle"></i>
								</div>
							</div>
							<div class="video-content">
								<h4 class="video-title">Programa de Preparação para Reforma (PFR)</h4>
								<a href="https://m.facebook.com/story.php?story_fbid=418811295905218&id=123824135675682&sfnsn=wa" class="btn btn-video" target="_blank">
									<i class="fa fa-play"></i> Assistir Vídeo
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal para Vídeo 2 -->
	<div class="modal fade modal-video" id="videoModal1" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="videoModalLabel1">Live sobre Qualidade de Vida no Pós-Carreira</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="video-container">
						<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjoaomanuel.saveiafrancisco%2Fvideos%2F1967834016683149%2F&show_text=true&width=552&appId=1805290509700760&height=377" 
								width="552" 
								height="377" 
								style="border:none;overflow:hidden" 
								scrolling="no" 
								frameborder="0" 
								allowTransparency="true" 
								allow="encrypted-media"
								allowFullScreen="true">
						</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php include 'includes/footer.php'; ?>
