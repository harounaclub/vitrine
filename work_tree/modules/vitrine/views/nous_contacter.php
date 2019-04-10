<!DOCTYPE html>
<html lang="en">
 
 <head>

    <?php include("templates/_head.php"); ?>

  </head>
  <body>

    <nav class="navbar navbar-default cplgr-default-navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index-2.html">
            <img src="<?php echo base_url(); ?>assets/vitrine/images/logo.png" class="img-responsive" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           
           <?php include("templates/_menu_principale.php"); ?>
        
        </div>
      </div>
    </nav>


    <!-- Subheader -->
    <div class="sub-header sub-header-bg">
      <div class="sub-header-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sub-header-contents">
                <div class="page-title">
                  <h3>Nous contacter</h3>
                </div>
                <div class="page-info">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li class="active">Nous contacter</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <div class="action-buttons">
                        <ul>
                          <li><i class="fa fa-phone"></i> +225 6777 2823 / +225 777 477 35</li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subheader -->
    
    <?php include("templates/_nos_qualites.php"); ?>


    <div class="cplgr-main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3 class="title">Nous contacter</h3>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-1 col-sm-4">
            <div class="contactinfo-block">
              <h6>Contact us</h6>
              <div class="contact-widget">
                <p class="address">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>Cocody ,Riviera  <br> Carrefour Guiro</span>
                </p>
                <p>
                  <i class="fa fa-phone" aria-hidden="true"></i>

                 
                  <span>
                     +225 6777 2823
                    <br>
                     +225 777 477 35
                  </span>
                </p>
                <p class="last-type">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  <span>
                    info@example.com
                    <br>
                    sales@example.com
                  </span>
                </p>
                <div class="social-with-label">
                  <span>Reseaux sociaux: </span>
                  <ul class="social">
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                  <div class="fix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-1 col-sm-8">
            <div class="get-in-touch">
              <form id="contactForm" action="#" method="post">
                <div class="form-group">
                  <input id="name" type="text" class="form-control" placeholder="Nom ou Raison sociale">
                </div>
                <div class="form-group">
                  <input id="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input id="subject" type="text" class="form-control" placeholder="Sujet">
                </div>
                <div class="form-group">
                  <textarea id="message" name="Message" class="form-control" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-default btn-block">Envoyer</button>
				<p class="input-success">Your message sent. Thanks for contact</p>
				<p class="input-error">Something went wrong. Try again</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   


    <!-- Call to Action -->
    <?php include("templates/_voulezvous_partenaires.php") ?>
    <!-- Call to Action End -->
     <!-- Footer -->

     <?php include("templates/_footer.php") ?>
    
    <!-- Footer End -->

    <?php include("templates/_jsfooter.php") ?>
  </body>
</html>