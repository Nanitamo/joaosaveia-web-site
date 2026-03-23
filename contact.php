<?php
session_start();
require_once 'includes/csrf.php';
$page_title = 'João Saveia - Contacte-nos';
$active_nav = 'sobre-contactos';
include 'includes/head.php';
include 'includes/header.php';
?>

<section id="inner-headline">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="pageTitle">Contacte - nos</h2>
		</div>
	</div>
</div>
</section>

<section id="content">
<div class="container">

	<?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
	<div class="alert alert-success">
		<strong>Mensagem enviada!</strong> Entraremos em contacto brevemente.
	</div>
	<?php endif; ?>

	<form method="post" name="contact_form" action="contact-form-handler.php">
		<?php echo csrf_field(); ?>
		<h3>Entre em Contacto</h3>
		<div class="control-group">
			<div class="controls">
				<input type="text" class="form-control" placeholder="Nome Completo" name="name" required
					data-validation-required-message="Por Favor Insira o nome" />
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="email" class="form-control" placeholder="Email" name="email" required
					data-validation-required-message="Por favor insira o email" />
			</div>
		</div><br>
		<div class="control-group">
			<div class="controls">
				<textarea rows="10" cols="100" class="form-control" placeholder="Mensagem" name="message" required
					data-validation-required-message="Por favor insira a mensagem" minlength="5"
					maxlength="999" style="resize:none"></textarea>
			</div>
		</div><br>
		<button type="submit" class="btn btn-primary pull-right">Enviar</button><br /><br>
	</form>

</div>
</section>

<?php include 'includes/footer.php'; ?>
