<!DOCTYPE html>
<html lang="en">
  

  <head>
    
   <?php include("templates/_head.php"); ?>

   
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default cplgr-default-navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <?php include("templates/_logo.php"); ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top:20px;">

          <?php include("templates/_menu_principale.php"); ?>
          
        </div>
      </div>
    </nav>

    <div class="slider">
      <div class="cplgr-slider-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="slider-wrapper cplgr-category-slider-wrapper">
                <div class="slider-content text-center">
                  <h2>Explorer vos villes</h2>
                  <h6>Vous n'imaginez pas les réductions qui vous attendent autour de vos villes</h6>
                  <form action="#">
                    <div class="input-group input-group-1">
                      <span class="input-group-addon" id="basic-addon1">Trouver</span>
                      <input type="text" class="form-control" placeholder="Ex: restos, Service, Hôtel" aria-describedby="basic-addon1" list="find">
                      <datalist id="find">
                        <option value="Food">
                        <option value="Service">
                        <option value="Hotel">
                      </datalist>
                    </div>
                    <div class="input-group input-group-2">
                      <span class="input-group-addon" id="basic-addon2">Villes</span>
                      <input type="text" class="form-control" placeholder="Ex: Abidjan" aria-describedby="basic-addon2" list="suggest-location">
                      <datalist id="suggest-location">
                        <option value="Abidjan">
                        <option value="Yamoussoukro">
                        <option value="Bouaké">
                      </datalist>
                    </div>
                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    <div class="fix"></div>
                  </form>
                  <div class="cplgr-listing-category-block">
                    <div class="cplgr-listing-category-heading">
                      <h6>Or consulter nos catégories populaires</h6>
                      <a href="#">
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                      </a>
                    </div>
                    <div class="cplgr-listing-categories">
                      <div class="row">
                        <div class="col-lg-2 col-lg-offset-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Loisirs et jeux" class="cplgr-listing-icon">
                              <i class="fa fa-file-video-o" aria-hidden="true"></i>
                            </a>
                            <p><a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Loisirs et jeux">Loisirs / Jeux</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Restaurants-cafés" class="cplgr-listing-icon">
                              <i class="fa fa-leaf" aria-hidden="true"></i>
                            </a>
                            <p><a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Restaurants-cafés">Restaurants</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Hôtels" class="cplgr-listing-icon">
                              <i class="fa fa-building" aria-hidden="true"></i>
                            </a>
                            <p><a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Hôtels">Hôtels</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Boutiques" class="cplgr-listing-icon">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                            <p><a href="<?php echo base_url(); ?>vitrine/recherche_categorie/Boutiques">Boutiques</a></p>
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
      </div>
      <div id="cplgr-main-slider" class="cplgr-main-slider">
        <div class="slider-bg-1">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>
        <div class="slider-bg-2">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>
        <div class="slider-bg-3">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>
        <div class="slider-bg-4">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>

        <div class="slider-bg-5">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>
        <div class="slider-bg-6">
          <div class="slider-item cplgr-category-slider-item">
          </div>
        </div>
      </div>
    </div>

    <!-- Listing Category -->

    <?php include("templates/_categories_favoris.php"); ?>
    
    
    <!-- Listing Category End -->
    

    <?php include("templates/_bientot_villes.php"); ?>

   

     <!-- Popular Listing -->

     <?php // include("templates/_reductions_semaines.php"); ?>
   
    <!-- Popular Listing End -->


   

    <!-- How It Work -->
    <div class="cplgr-main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3 class="title">Comment avoir des réductions ?</h3>
              <p class="sub-title">Pour profiter de vos reductions auprès de nos partenaires ,cela se fait en 3 étapes .</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="margin-balance">
            <div class="col-sm-4">
              <div class="work-item text-center">
                <div class="work-thumb">
                  <img src="<?php echo base_url(); ?>assets/vitrine/images/works/icon_1.svg" class="img-responsive" alt="">
                </div>
                <h6 class="work-title">Payer sa carte Prix KDO</h6>
                <p class="subtext">La carte PRIX KDO se vend au prix unique de 10 000 Fcfa. (infos commercial)</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="work-item text-center">
                <div class="work-thumb">
                  <img src="<?php echo base_url(); ?>assets/vitrine/images/works/icon_2.svg" class="img-responsive" alt="">
                </div>
                <h6 class="work-title">Parcourir la vitrine </h6>
                <p class="subtext">Parcourir la vitrine et trouver le commerce de votre choix.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="work-item text-center">
                <div class="work-thumb">
                  <img src="<?php echo base_url(); ?>assets/vitrine/images/works/icon_3.svg" class="img-responsive" alt="">
                </div>
                <h6 class="work-title">Profiter des réductions</h6>
                <p class="subtext">Avec votre carte de réduction , profiter de reduction à partir de 10 %.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- How It Work End -->

    <!-- Testimonial -->
    <?php include("templates/_temoignages.php"); ?>
    <!-- Testimonial End -->

    <!-- Blog -->
    <!-- <div class="cplgr-main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="section-heading text-center">
              <h3 class="title">News &amp; Blog</h3>
              <p class="sub-title">You can’t imagine, what is waitng for your around your city</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="margin-balance">
            <div class="col-md-4 col-sm-6">
              <div class="blog-grid-item">
                <div class="blog-thumb">
                  <a href="blog-single.html">
                    <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-thumb-1.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="post-categories">
                      <p>
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <a href="#">Restaurant</a>,
                        <a href="#">Tips</a>,
                        <a href="#">Uncatagories</a>
                      </p>
                    </div>
                  </div>
                  <h6 class="post-title"><a href="blog-single.html">Best Real Estate in NY</a></h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-grid-item">
                <div class="blog-thumb">
                  <a href="blog-single.html">
                    <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-thumb-2.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="post-categories">
                      <p>
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <a href="#">Restaurant</a>,
                        <a href="#">Tips</a>,
                        <a href="#">Uncatagories</a>
                      </p>
                    </div>
                  </div>
                  <h6 class="post-title"><a href="blog-single.html">Best Real Estate in NY</a></h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-grid-item">
                <div class="blog-thumb">
                  <a href="blog-single.html">
                    <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-thumb-3.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="<?php echo base_url(); ?>assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
                      </a>
                    </div>
                    <div class="post-categories">
                      <p>
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <a href="#">Restaurant</a>,
                        <a href="#">Tips</a>,
                        <a href="#">Uncatagories</a>
                      </p>
                    </div>
                  </div>
                  <h6 class="post-title"><a href="blog-single.html">Best Real Estate in NY</a></h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blog End -->

    <!-- Call to Action -->
    <?php include("templates/_voulezvous_partenaires.php") ?>
    <!-- Call to Action End -->

    <!-- Footer -->

    <?php include("templates/_footer.php") ?>
    
    <!-- Footer End -->

    <?php include("templates/_jsfooter.php") ?>




    
  </body>


</html>