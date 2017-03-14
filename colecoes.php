<?php require_once('head.php');?>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

 <?php include('header2.php');?>


  <div class="main-wrapper-onepage main oh">

    <!-- Page Title -->
    <section class="page-title text-center" style="background-image: url(<?php echo URL;?>img/image.jpg);">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="color-white heading-frame">Coleções</h1>
          
          </div>
        </div>
      </div>
    </section> <!-- end page title -->
	<section class="section-wrap works-grid-3-col-wide pb-0" id="portfolio">

      <div class="container-fluid">

        <div class="row heading">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <h2 class="text-center bottom-line">Coleções</h2>
            <p class="subheading text-center">Confira abaixo nossas criações</p>
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
			
				$sql = Cms::conteudoPrincipal(2, NULL, NULL, 'ORDER BY ctn.listorder ASC');

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
                <a href="<?php echo URL.'colecao/'.$row['slug'].'/'; ?>" class="btn btn-lg btn-transparent" title="Poster Mockup">Veja a coleção</a>
              </div>
            </div>
          </div> <!-- end work-item -->

		<?php }?>
        </div>  
	
	
      </div>
    </section>

    <!-- Footer -->
    <?php require_once('footer.php');?> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="<?php echo URL;?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>js/scripts.js"></script>

</body>
</html>