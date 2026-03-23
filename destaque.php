<?php
$page_title = 'João Saveia - Destaques';
$extra_css = ['css/pages/destaque.css'];
include 'includes/head.php';
include 'includes/header.php';
?>
  
	<section id="inner-headline">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-12">
          <div class="page-header">
            <h2>Destaques</h2>
          </div>
	      </div>
	    </div>
	  </div>
	</section>

	<section class="section-padding gray-bg highlights-section">
		<div class="container">
      <!-- Conteúdo Principal -->
      <div class="showcase-content">
        <div class="showcase-image">
          <img src="img/dg.jpg" alt="Destaques João Saveia">
        </div>
        <div class="showcase-text">
          <h3>Últimos Destaques</h3>
          <p>Fique a par das últimas novidades, eventos e publicações relevantes no campo da Psicologia Organizacional e do Trabalho. Esta secção é actualizada regularmente com conteúdos de interesse para profissionais, académicos e estudantes.</p>
          <p>Explore as diferentes categorias para encontrar informações específicas sobre notícias, eventos futuros e sugestões de leitura especializada.</p>
        </div>
      </div>
      
      <!-- Grid de Destaques -->
      <div class="highlights-grid">
        <!-- Notícias -->
        <div class="highlight-card">
          <div class="highlight-image">
            <img src="img/dn.jpg" alt="Notícias">
            <div class="highlight-overlay"></div>
            <div class="category-badge">Notícias</div>
          </div>
          <div class="highlight-content">
            <h4 class="highlight-title">Notícias Recentes</h4>
            <p class="highlight-description">Mantenha-se actualizado com as últimas notícias e desenvolvimentos na área de Psicologia Organizacional e do Trabalho.</p>
            <a href="destaque-noticias.html" class="highlight-link">Ver Notícias</a>
          </div>
        </div>
        
        <!-- Eventos -->
        <div class="highlight-card">
          <div class="highlight-image">
            <img src="img/event.jpeg" alt="Eventos">
            <div class="highlight-overlay"></div>
            <div class="category-badge">Eventos</div>
          </div>
          <div class="highlight-content">
            <h4 class="highlight-title">Próximos Eventos</h4>
            <p class="highlight-description">Conheça os eventos, webinars e conferências programadas na área de Psicologia Organizacional e do Trabalho.</p>
            <a href="destaque-eventos.html" class="highlight-link">Ver Eventos</a>
          </div>
        </div>
        
        <!-- Sugestões de Leitura -->
        <div class="highlight-card">
          <div class="highlight-image">
            <img src="img/sg-leitura.jpg" alt="Sugestões de Leitura">
            <div class="highlight-overlay"></div>
            <div class="category-badge">Leitura</div>
          </div>
          <div class="highlight-content">
            <h4 class="highlight-title">Sugestões de Leitura</h4>
            <p class="highlight-description">Descubra artigos, livros e publicações recomendadas para aprofundar o seu conhecimento na área.</p>
            <a href="destaque-s_leitura.html" class="highlight-link">Ver Sugestões</a>
          </div>
        </div>
      </div>
		</div>
  </section>


<?php include 'includes/footer.php'; ?>
