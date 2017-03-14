<?php require_once('head.php');?>

<?php

$slug = $_GET['slug'];

$sql = Cms::conteudoPrincipal(2, $slug);
$row = mysql_fetch_array($sql);

$sqlimgCapa = Cms::imagens($row['codconteudo'], 'D');
$imgCapa = mysql_fetch_array($sqlimgCapa);

?>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

 <?php include('header2.php');?>


  <div class="main-wrapper-onepage main oh">

    <!-- Page Title -->
    <section class="page-title text-center" style="background-image: url(<?php echo $imgCapa['img'];?>);">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="color-white heading-frame"><?php echo utf8_encode($row['titulo']); ?></h1>
          
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- Blog Single -->
    <section class="section-wrap pb-100 blog-single">
      <div class="container relative">
        <div class="row">
          
          <!-- content -->
          <div class="col-sm-12 blog-content">

            <!-- standard post -->
           <div class="entry-item">
              <div class="entry-img">
                <iframe width="1140" height="625" src="https://www.youtube.com/embed/<?php echo utf8_encode($row['subtitulo']); ?>" frameborder="0" allowfullscreen></iframe>
              </div>
              
			
              <div class="row">
			    
                <div class="col-sm-10 col-sm-offset-1">
                  
                  <div class="entry-title">
                    <h2><?php echo utf8_encode($row['titulo']); ?></h2>
                  </div>
                

                  <div class="entry">
                    <div class="entry-content">
                    <?php echo utf8_encode($row['texto']); ?>

                     
                      </div> <!-- end share -->

                    </div>
                  </div> <!-- end entry -->

                </div><br>
				
				<div class="entry-img">
					<?php

					  $sqlimg = Cms::imagens($row['codconteudo'], 'N');
					  while ($img = mysql_fetch_array($sqlimg)) {

					?>
				<li>
					<img src="<?php echo $img['img'];?>">
					</li><br>
				<?php }?>
              </div>
			  
			  
              </div> <!-- end row -->

            </div> <!-- end entry item -->
          </div>
	  <!-- end col -->
			<div class="col-md-offset-3 col-md-6 ">
				<form id="contact-form" action="<?php echo URL;?>sendmail/interna.php" method="post">

				  <div class="row contact-row">
					<div class="col-md-6 contact-name">
					  <input name="nome" id="name" type="text" placeholder="Nome*">
					</div>
					<div class="col-md-6 contact-email">
					  <input name="email" id="mail" type="email" placeholder="E-mail*">
					</div>
				  </div>

				  <input name="assunto" id="assunto" type="text" placeholder="Assunto"> 
				  <textarea name="mensagem" id="comment" placeholder="Mensagem"></textarea>
				  <input type="submit" class="btn btn-lg btn-color btn-submit" value="Enviar Mensagem" id="submit-message">
				  <div id="msg" class="message"></div>
				</form>
			</div>
        </div> <!-- end row -->

      </div> <!-- end container -->
	  
    </section> <!-- end blog single -->

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