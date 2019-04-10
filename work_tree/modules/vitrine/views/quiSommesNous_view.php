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
                  <h3>A propos</h3>
                </div>
                <div class="page-info">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li class="active">A propos</li>
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

    <!-- Service -->
      <?php include("templates/_nos_qualites.php") ?>
    <!-- Service -->

    <div class="image-content-wrapper section-padding-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <div class="text-content">
                <h3 class="title">Qui sommes nous ?</h3>
                <p class="subtext">Prix Kdo est une initiative de MECK & CO en vue de faciliter et simplifier la vie aux  populations ivoiriennes et africaines. </p>
                <p class="subtext">Lancé le 02 Mars 2019, www.prixkdo.ci est le premier site ivoirien de vente en gros et demi-gros. Ce site qui comportera plus de 3000 références, donne la possibilité de faire ses courses en toute simplicité et rapidité et de se faire livrer.  </p>
                <p class="subtext">La carte de fidélité Prixkdo  permet à son détenteur de profiter de réductions et/ou avantages sur tous les produits présents sur le site de vente en gros et demi-gros www.prixkdo.ci ainsi que dans notre réseau de partenaires. Cette carte, d’une validité d’un (1) an, ne coute que 10 000f cfa.  </p>
                <p class="subtext">La boussole prixkdo,c’est l’espace qui permet au détenteur de la carte PRIXKDO de s'orienter dans l'univers PRIXKDO tout en appréciant les avantages proposés par ces derniers.  </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
            <br><br><br><br><br>
              <div class="image-content half-thumb">
                <img src="<?php echo base_url(); ?>assets/vitrine/images/about/about-thumb-1.jpg" class="img-responsive" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Team -->

    <?php include("templates/_equipes.php"); ?>
    
    <!-- Team End -->

    <!-- Testimonial -->
       <?php include("templates/_temoignages.php"); ?>
    <!-- Testimonial End -->

    <!-- Call to Action -->
    <?php include("templates/_voulezvous_partenaires.php"); ?>
    <!-- Call to Action End -->

    <!-- Footer -->

    <?php include("templates/_footer.php"); ?>
   
    <!-- Footer End -->
    
    <?php include("templates/_jsfooter.php"); ?>
  </body>


</html>