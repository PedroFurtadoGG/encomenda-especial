<?php require_once('head.php');?>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Carregando..."
    </div>
  </div>

  <!-- Navigation -->
  <?php include('header.php');?><!-- end navigation -->


  <div class="main-wrapper-onepage main oh">

    <!-- Revolution Slider -->
    <?php include('video.php');?>


    <!-- Intro -->
    <section class="section-wrap intro" id="intro">
      <div class="container">
        <div class="row">

          <div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s" data-wow-delay="0s">
            <h2 class="intro-heading heading-frame">Coleção Exuberante</h2>
            <p class="intro-text mb-60">
              We continuosly seek between design and technology. For over a decade, we've helped businesses to craft honest, emotional experiences through strategy, brand development, graphic design, web design. Our team hand picked to provide the right balance of skills to work.
            </p>

             <a href="<?php echo URL;?>colecoes" class="btn btn-lg btn-color">Saiba Mais</a>
          </div>

        </div>
      </div>
    </section> <!-- end intro -->
   
    <!-- Portfolio -->
    <section class="section-wrap works-grid-3-col-wide pb-0" id="portfolio">

      <div class="container-fluid">

        <div class="row heading">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <h2 class="text-center bottom-line">Últimas Coleções</h2>
            <p class="subheading text-center">Confira abaixo nossas últimas criações</p>
          </div>
        </div>

        <div class="grid-3-col grid-wide grid-gutter grayscale">
		<?php
			/*	
				1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
				2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
				3 - $limit = NULL - LIMITE DE REGISTROS; 
				4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
				5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
			*/
			
				$sql = Cms::conteudoPrincipal(2, NULL, 6, 'ORDER BY ctn.listorder ASC','AND ctn.codconteudo >= 1');

				while($row = mysql_fetch_assoc($sql)){
					
				$sqlimgP = Cms::imagens($row['codconteudo'], 'P');
				$imgP = mysql_fetch_array($sqlimgP);
			?>
          <div class="work-item web-design print">
            <div class="work-img">
              <img src="<?php echo $imgP['img'];?>" alt="">
              <div class="work-overlay">        
                <div class="work-description">
                  <h3>
                    <a href="<?php echo URL.'colecao/'.$row['slug'].'/'; ?>"><?php echo utf8_encode($row['titulo']); ?></a>
                  </h3>
                  
                </div>
                <a href="<?php echo URL.'colecao/'.$row['slug'].'/'; ?>" class="btn btn-lg btn-transparent" title="Poster Mockup">Veja a Coleção</a>
              </div>
            </div>
          </div> <!-- end work-item -->

		<?php }?>
        </div>    

      </div>
    </section> <!-- end portfolio-->


    <!-- Call to Action -->
    <section class="call-to-action">
      <div class="container">
        <div class="row">

          <div class="col-md-9 col-xs-12">    
            <h2>Gostou, clique no botão ao lado e veja todas as nossas coleções</h2>
          </div>
          
          <div class="col-md-3 col-xs-12 cta-button">
            <a href="<?php echo URL;?>colecoes" class="btn btn-lg btn-color">Todas as coleções</a>
          </div>

        </div>
      </div>
    </section> <!-- end call to action -->

    <!-- From Blog -->
    


    <!-- Testimonials -->
    <section class="section-wrap parallax-testimonials relative" style="background-image: url(<?php echo URL;?>img/para.jpg)">

      <div id="owl-testimonials" class="owl-carousel owl-theme text-center">


      
        <div class="item">
          <div class="container testimonial">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <i class="fa fa-quote-left"></i>
                <p class="testimonial-text">Equilibrio é saber usar o preto e branco e não ser sem graça. É criar um mundo colorido, sem ser infantil. VIver em equilibrio é uma busca constante, uma conquista, a dose certa para ser 'Feliz'.</p>
                <h6>Encomenda Especial</h6>
              
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
	
    <section class="section-wrap contact" id="contact">
      <div class="container">

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-center bottom-line">Fale Conosco</h2>
            <p class="subheading">Ligue ou preencha o formulário de contato abaixo</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <h5>Atendimento</h5>
            <p>Seg-Sex: 08:00 – 17:30</p>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Endereço</h6>
              <p>Av. Mato Grosso nº202,<br>
              Setor Campinas | Goiânia-Goiás</p>
            </div> <!-- end address -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Phone"></i>
              </div>
              <h6>Ligue</h6>
              <span>+55 62 3233 5869</span>
            </div> <!-- end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Mail"></i>
              </div>
              <h6>E-mail</h6>
              <a href="mailto:contato@encomendaespecial.com.br">contato@encomendaespecial.com.br</a>
            </div> <!-- end email -->

          </div>

      <?php include('form-home.php');?>

        </div>
      </div>
    </section> <!-- end contact -->


    <!-- Google Map -->
    <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines">  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.9259419834607!2d-49.25877338468844!3d-16.68058898850575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef1645a2a8415%3A0xcbb1f9346f516604!2sCorreios-Setor+Coimbra!5e0!3m2!1spt-BR!2sbr!4v1489407032099" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>


    <!-- Footer -->
	<?php require_once('footer.php');?>
   <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="<?php echo URL;?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/bootstrap.min.js"></script>
 
  <script type="text/javascript" src="<?php echo URL;?>js/gmap3.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/rev-slider.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/scripts.js"></script>


  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>


</body>
</html>