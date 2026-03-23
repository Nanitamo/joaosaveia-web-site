<?php
// Helper: retorna ' class="active"' se o item corresponder ao active_nav
function nav_active(string $key): string {
    global $active_nav;
    return ($active_nav ?? '') === $key ? ' class="active"' : '';
}
// Helper: verifica se algum dos itens de um dropdown está activo
function nav_dropdown_active(array $keys): string {
    global $active_nav;
    return in_array($active_nav ?? '', $keys, true) ? ' active' : '';
}
// Helper: marca item dentro do dropdown como activo
function nav_item_active(string $key): string {
    global $active_nav;
    return ($active_nav ?? '') === $key ? ' class="active"' : '';
}
$wrapper_class = !empty($wrapper_class) ? ' class="' . htmlspecialchars($wrapper_class) . '"' : '';
?>
<body>
<?php if (!empty($show_loading_screen)): ?>
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
<?php endif; ?>

<div id="wrapper"<?php echo $wrapper_class; ?>>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left hidden-xs">Contacte-nos</p>
                <div class="pull-right">
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
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li<?php echo nav_active('home'); ?>><a href="index.php">Home</a></li>

                    <li class="dropdown<?php echo nav_dropdown_active(['sobre-perfil','sobre-institucional','sobre-contactos']); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sobre Nós <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li<?php echo nav_item_active('sobre-perfil'); ?>><a href="about-one.php">Perfil</a></li>
                            <li<?php echo nav_item_active('sobre-institucional'); ?>><a href="about.php">Perfil Institucional</a></li>
                            <li<?php echo nav_item_active('sobre-contactos'); ?>><a href="contact.php">Contactos Gerais</a></li>
                        </ul>
                    </li>

                    <li class="dropdown<?php echo nav_dropdown_active(['publicacoes-artigos','publicacoes-livros']); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Publicações<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li<?php echo nav_item_active('publicacoes-artigos'); ?>><a href="publicacao-artigo.php">Artigos</a></li>
                            <li<?php echo nav_item_active('publicacoes-livros'); ?>><a href="publicacao-livro.php">Livros</a></li>
                        </ul>
                    </li>

                    <li<?php echo nav_active('servicos'); ?>><a href="services.php">Serviços</a></li>
                    <li<?php echo nav_active('galeria'); ?>><a href="galeria.php">Galeria & Imagem</a></li>

                    <li class="dropdown<?php echo nav_dropdown_active(['destaques-noticias','destaques-eventos','destaques-leitura']); ?>">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Destaques<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li<?php echo nav_item_active('destaques-noticias'); ?>><a href="destaque-noticias.php">Noticias</a></li>
                            <li<?php echo nav_item_active('destaques-eventos'); ?>><a href="destaque-eventos.php">Eventos</a></li>
                            <li<?php echo nav_item_active('destaques-leitura'); ?>><a href="destaque-s_leitura.php">Sugestões de Leitura</a></li>
                        </ul>
                    </li>

                    <li<?php echo nav_active('midia'); ?>><a href="midia.php">Midia</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
