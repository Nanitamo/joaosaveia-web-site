<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="widget">
                    <h5 class="widgetheading">Contactos Gerais</h5>
                    <address>
                        <strong>João Saveia</strong><br>
                        Condominio Flores de Talatona, Casa D03 Talatona<br>
                        Luanda, Angola.
                    </address>
                    <p>
                        <i class="fa fa-phone"></i> (+244) 923-255-835<br>
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
                        <form method="post" name="newsletter_form" action="newslatters-form.php">
                            <?php
                            if (function_exists('csrf_field')) echo csrf_field();
                            ?>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required
                                        data-validation-required-message="Por favor insira o email" />
                                </div><br>
                                <button type="submit" class="btn btn-primary pull-left">Enviar</button>
                            </div>
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
                        <span>Copyright &copy; Jo&atilde;o Saveia <span id="date"></span>. Todos os Direitos Reservados.</span>
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
</div><!-- #wrapper -->

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

<script>
    var date = new Date();
    document.getElementById("date").innerHTML = date.getFullYear().toString();
</script>

<?php if (!empty($extra_scripts)) echo $extra_scripts; ?>

</body>
</html>
