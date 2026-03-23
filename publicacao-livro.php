<?php
$page_title = 'João Saveia - Livros';
$active_nav = 'publicacoes-livros';
$extra_css = ['css/pages/publicacao-livro.css'];
include 'includes/head.php';
include 'includes/header.php';
?>
<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Livros</h2>
			</div>
		</div>
	</div>
	</section>

	<section class="section-padding gray-bg books-section">
		<div class="container">
			<div class="row row-equal-height">
				<!-- Livro 1 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/book-four.png" alt="Olimpíadas Científicas">
							</div>
							<div class="book-content">
								<h5 class="book-title">Olimpíadas científicas: a experiência da olimpíada caça talentos Angola 40 anos</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="#fivebook">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Livro 2 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/book-two.png" alt="Psicologia Organizacional e do Trabalho">
							</div>
							<div class="book-content">
								<h5 class="book-title">Psicologia organizacional e do trabalho: leituras em saúde mental, qualidade de vida e cultura nas organizações Edição 2</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="#firstbook">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Livro 3 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/book-three.png" alt="Psicologia: formação e exercício profissional em Angola">
							</div>
							<div class="book-content">
								<h5 class="book-title">Psicologia: formação e exercício profissional em Angola</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="#secondbook">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Livro 4 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/book-five.png" alt="Qualidade de vida e bem-estar no pós-carreira">
							</div>
							<div class="book-content">
								<h5 class="book-title">Qualidade de vida e bem-estar no pós-carreira: contribuições dos programas de preparação para a reforma</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="#fourbook">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Livro 5 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/Livro1.png" alt="Psicologia organizacional e do trabalho">
							</div>
							<div class="book-content">
								<h5 class="book-title">Psicologia organizacional e do trabalho: leituras em saúde mental, qualidade de vida e cultura nas organizações</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="#zerobook">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
				
					<!-- Livro 6 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/Livro4.png" alt="Suporte Organizacional para a Reforma">
							</div>
							<div class="book-content">
								<h5 class="book-title">Suporte Organizacional para a Reforma: Mensurando o Papel das Organizações na Promoção do Envelhecimento Activo</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
			    <!-- Livro 7 -->
				<div class="col-md-3 col-sm-6">
					<div class="book-card">
						<div class="book-card-inner">
							<div class="book-image">
								<img class="img-responsive" src="./img/books/Livro5.png" alt="A Arte de se Reformar">
							</div>
							<div class="book-content">
								<h5 class="book-title"> A Arte de se Reformar: Um Diário Reflexivo sobre Terceira Idade em Angola</h5>
								<button type="button" class="btn btn-book" data-toggle="modal" data-target="">
									Descrição
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal para Livro 1 -->
	<div class="modal fade modal-book" id="fivebook" tabindex="-1" role="dialog" aria-labelledby="fivebookLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fivebookLabel">Olimpíadas científicas: a experiência da olimpíada caça talentos Angola 40 anos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>As olimpíadas científicas, ou olimpíadas de conhecimento, são competições académicas para estudantes, realizadas com o objectivo de incentivar o estudo e encontrar talentos nas diversas áreas do conhecimento. Elas são uma oportunidade para diagnosticar o ensino e a aprendizagem das diversas disciplinas no país, podendo, inclusive, gerar material que pode ser utilizado em pesquisas académicas.</p>
					<p>Este livro é o exemplo de possíveis direccionamentos de uma olimpíada científica. Resulta da Olimpíada Caça Talentos Angola 40 anos. A riqueza do material apresentado no livro fornece sem dúvida uma grande quantidade de informações que podem ajudar a promover profundas reflexões e um diagnóstico do nosso sistema de ensino.</p>
					
					<div class="book-details">
						<p><strong>Autor:</strong> João Saveia</p>
						<p><strong>Editora:</strong> Edição do Autor</p>
						<p><strong>Ano de Publicação:</strong> 2020</p>
						<p><strong>Preço:</strong> 8.000,00 Kz</p>
						<p><strong>Estado:</strong> <span class="book-status-available">Disponível</span></p>
						<p><strong>Contacto para compra:</strong> jmsaveia@joaosaveia.ao / Telefone/WhatsApp: 923255835</p>
						<p><strong>Ou:</strong> Papelaria e Livraria Komutu, na urbanização Nova Vida, rua 54, Centro Empresarial Nova Vida, Edifício Quissama.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal para Livro 2 -->
	<div class="modal fade modal-book" id="firstbook" tabindex="-1" role="dialog" aria-labelledby="firstbookLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="firstbookLabel">Psicologia organizacional e do trabalho: leituras em saúde mental, qualidade de vida e cultura nas organizações Edição 2</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>A obra passeia por uma série de temas relacionados ao desenvolvimento do conhecimento na área de Psicologia Organizacional e do Trabalho. São apresentados elementos pertinentes sobre este campo de conhecimento, como a saúde mental & trabalho e qualidade de vida no trabalho.</p>
					<p>Promove-se uma reflexão sobre o profissional que assume o desafio de lidar com os problemas humanos relacionados com o mundo do trabalho e das organizações, assim como são apresentadas algumas das principais mudanças que estão a ocorrer no mundo do trabalho, traçando, desta forma, uma visão panorâmica do ambiente de actuação do psicólogo organizacional e do trabalho, com destaque para a cultura nas organizações.</p>
					<p>Parte-se do pressuposto de que a compreensão dos traços culturais e da realidade actual de Angola, é de suma importância para se poder compreender o comportamento dos indivíduos nas organizações. Isso torna a obra relevante e referência para os cursos de Psicologia, Sociologia e Gestão.</p>
					
					<div class="book-details">
						<p><strong>Autor:</strong> João Saveia</p>
						<p><strong>Editora:</strong> Casa das Ideias/WhereAngola</p>
						<p><strong>Ano de Publicação:</strong> 2015</p>
						<p><strong>Preço:</strong> 10.000,00 Kz</p>
						<p><strong>Estado:</strong> <span class="book-status-available">Disponível</span></p>
						<p><strong>Contacto para compra:</strong> jmsaveia@joaosaveia.ao / Telefone/WhatsApp: 923255835</p>
						<p><strong>Ou:</strong> Papelaria e Livraria Komutu, na urbanização Nova Vida, rua 54, Centro Empresarial Nova Vida, Edifício Quissama.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal para Livro 3 -->
	<div class="modal fade modal-book" id="secondbook" tabindex="-1" role="dialog" aria-labelledby="secondbookLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="secondbookLabel">Psicologia: formação e exercício profissional em Angola</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>O trabalho de pesquisa transformado no presente livro fornece, certamente, a mais ampla descrição já feita sobre o exercício profissional da Psicologia em Angola, o que destaca o seu carácter pioneiro e marca o ponto de partida para os aprofundamentos a serem feitos em trabalhos posteriores.</p>
					<p>O livro cobre uma extensa gama de questões que cercam a formação e o exercício profissional do psicólogo em Angola. São questões que transitam por vários níveis e que trazem reflexões muito ricas para todos aqueles que estão preocupados com o fortalecimento da Psicologia, pela relevância que os seus serviços possuem para a sociedade.</p>
					<p>A amplitude do estudo, o rigor metodológico em todas as suas etapas, a riqueza das análises e reflexões tornam o livro um importante marco na própria construção da Psicologia como profissão em Angola.</p>
					
					<div class="book-details">
						<p><strong>Autor:</strong> João Saveia</p>
						<p><strong>Editora:</strong> Casa das Ideias/WhereAngola</p>
						<p><strong>Ano de Publicação:</strong> 2016</p>
						<p><strong>Preço:</strong> 10.000,00 Kz</p>
						<p><strong>Estado:</strong> <span class="book-status-available">Disponível</span></p>
						<p><strong>Contacto para compra:</strong> jmsaveia@joaosaveia.ao / Telefone/WhatsApp: 923255835</p>
						<p><strong>Ou:</strong> Papelaria e Livraria Komutu, na urbanização Nova Vida, rua 54, Centro Empresarial Nova Vida, Edifício Quissama.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal para Livro 4 -->
	<div class="modal fade modal-book" id="fourbook" tabindex="-1" role="dialog" aria-labelledby="fourbookLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fourbookLabel">Qualidade de vida e bem-estar no pós-carreira: contribuições dos programas de preparação para a reforma</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Este livro é o resultado de nove anos de experiência no desenvolvimento de Programas de Preparação para a Reforma (PPR) em organizações angolanas. Desde logo algumas questões se colocam: como podemos ajudar as pessoas a permanecerem independentes e autónomas à medida que envelhecem? Como a qualidade de vida e o bem-estar na velhice podem ser melhorados? Como podemos preparar as pessoas para a reforma?</p>
					<p>Este livro aborda essas questões e outras preocupações relacionadas com o pós-carreira, ao mesmo tempo que busca promover uma reflexão sobre a necessidade de olharmos para os reformados como recursos importantes para a estrutura e o desenvolvimento da nossa sociedade.</p>
					<p>As pessoas mais velhas que se reformam podem continuar a contribuir activamente para o país, para as suas comunidades e para as suas famílias. Neste sentido, deve ser preocupação de todos nós promover o envelhecimento saudável, para que as pessoas na reforma sejam um recurso cada vez mais valioso.</p>
					
					<div class="book-details">
						<p><strong>Autor:</strong> João Saveia</p>
						<p><strong>Editora:</strong> Edição do Autor</p>
						<p><strong>Ano de Publicação:</strong> 2020</p>
						<p><strong>Preço:</strong> 10.000,00 Kz</p>
						<p><strong>Estado:</strong> <span class="book-status-available">Disponível</span></p>
						<p><strong>Contacto para compra:</strong> jmsaveia@joaosaveia.ao / Telefone/WhatsApp: 923255835</p>
						<p><strong>Ou:</strong> Papelaria e Livraria Komutu, na urbanização Nova Vida, rua 54, Centro Empresarial Nova Vida, Edifício Quissama.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal para Livro 5 -->
	<div class="modal fade modal-book" id="zerobook" tabindex="-1" role="dialog" aria-labelledby="zerobookLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="zerobookLabel">Psicologia organizacional e do trabalho: leituras em saúde mental, qualidade de vida e cultura nas organizações</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>A obra passeia por uma série de temas relacionados ao desenvolvimento do conhecimento na área de Psicologia Organizacional e do Trabalho. São apresentados elementos pertinentes sobre este campo de conhecimento, como a saúde mental & trabalho e qualidade de vida no trabalho.</p>
					<p>Promove-se uma reflexão sobre o profissional que assume o desafio de lidar com os problemas humanos relacionados com o mundo do trabalho e das organizações, assim como são apresentadas algumas das principais mudanças que estão a ocorrer no mundo do trabalho, traçando, desta forma, uma visão panorâmica do ambiente de actuação do psicólogo organizacional e do trabalho, com destaque para a cultura nas organizações.</p>
					<p>Parte-se do pressuposto de que a compreensão dos traços culturais e da realidade actual de Angola, é de suma importância para se poder compreender o comportamento dos indivíduos nas organizações. Isso torna a obra relevante e referência para os cursos de Psicologia, Sociologia e Gestão.</p>
					
					<div class="book-details">
						<p><strong>Autor:</strong> João Saveia</p>
						<p><strong>Editora:</strong> Casa das Ideias/WhereAngola</p>
						<p><strong>Ano de Publicação:</strong> 2010</p>
						<p><strong>Preço:</strong> 10.000,00 Kz</p>
						<p><strong>Estado:</strong> <span class="book-status-soldout">Esgotado</span></p>
						<p><strong>Contacto para compra:</strong> jmsaveia@joaosaveia.ao / Telefone/WhatsApp: 923255835</p>
						<p><strong>Ou:</strong> Papelaria e Livraria Komutu, na urbanização Nova Vida, rua 54, Centro Empresarial Nova Vida, Edifício Quissama.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>


<?php include 'includes/footer.php'; ?>
