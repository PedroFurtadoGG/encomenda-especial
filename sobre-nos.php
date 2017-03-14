<?php require_once('head.php');?>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

 <?php include('header2.php');?>


  <div class="main-wrapper-onepage main oh">

    <!-- Page Title -->
    <section class="page-title text-center" style="background-image: url(<?php echo URL;?>img/image.jpg);">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="color-white heading-frame">Sobre Nós</h1>
          
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
              

              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  
                  <div class="entry-title">
                    <h2>A Encomenda Especial</h2>
                  </div>
                

                  <div class="entry">
                    <div class="entry-content">
                      <span class="dropcap style-1">S</span>
                      <p>eek between design and technology. For over a decade, we've helped businesses to craft honest, emotional experiences through strategy, brand development, graphic design, web design. Our team hand picked to provide the right balance of skills to work dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud officia deserunt mollit exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<?php for($x=0;$x<3;$x++){?>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                     
                      <?php }?>

                     
                      </div> <!-- end share -->

                    </div>
                  </div> <!-- end entry -->

                </div>
              </div> <!-- end row -->

            </div> <!-- end entry item -->
          </div> <!-- end col -->
  
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