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
          <a class="navbar-brand" href="index-2.html">
            <img src="assets/vitrine/images/logo.png" class="img-responsive" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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
                            <a href="listing-search.html" class="cplgr-listing-icon">
                              <i class="fa fa-file-video-o" aria-hidden="true"></i>
                            </a>
                            <p><a href="listing-search.html">Loisirs / Jeux</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="listing-search.html" class="cplgr-listing-icon">
                              <i class="fa fa-leaf" aria-hidden="true"></i>
                            </a>
                            <p><a href="listing-search.html">Restaurants</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="listing-search.html" class="cplgr-listing-icon">
                              <i class="fa fa-building" aria-hidden="true"></i>
                            </a>
                            <p><a href="listing-search.html">Hôtels</a></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-sm-3">
                          <div class="cplgr-listing-category">
                            <a href="listing-search.html" class="cplgr-listing-icon">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                            <p><a href="listing-search.html">Boutiques</a></p>
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
      </div>
    </div>

    <!-- Listing Category -->

    <?php include("templates/_categories_favoris.php"); ?>
    
    
    <!-- Listing Category End -->
    

    <?php include("templates/_bientot_villes.php"); ?>

   

     <!-- Popular Listing -->

     <?php include("templates/_reductions_semaines.php"); ?>
   
    <!-- Popular Listing End -->


    <!-- listing-modal-content section -->
    <div class="listing-modal-content-section">
      <div class="container">
        <div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog post-model">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span>
            </button>
            <div class="modal-content">
              <div class="cplgr-listing-grid">
                <div class="cplgr-listing-thumb-container">
                  <div class="cplgr-listing-thumb">
                    <a href="#">
                      <img src="assets/vitrine/images/listing/listing-thumb-1.jpg" class="img-responsive" alt="">
                    </a>
                  </div>
                  <div class="cplgr-listing-quick-action">
                    <ul>
                      <li class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="bookmark">
                        <a href="#">
                          <i class="fa fa-bookmark"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="cplgr-listing-grid-hover">
                    <div class="price-range">
                      <p>$150-$600</p>
                    </div>
                  </div>
                </div>
                <div class="cplgr-listing-description-container">
                  <div class="cplgr-listing-description">
                    <div class="author-avatar-thumb">
                      <a href="#">
                        <img src="assets/vitrine/images/author/author-thumb-1.jpg" class="img-responsive" alt="">
                      </a>
                      <div class="cplgr-verified" title="verified"></div>
                    </div>
                    <div class="cplgr-listing-categories">
                      <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Real Estate</a>
                    </div>
                    <div class="cplgr-status-open">
                      <p>Open</p>
                    </div>
                    <div class="fix"></div>
                    <h6 class="cplgr-listing-title">
                      <a href="#">California housing</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  </div>
                  <div class="cplgr-listing-desription-footer">
                    <a href="#" class="cplgr-listing-location"><i class="fa fa-map-marker"></i> California</a>
                    <div class="cplgr-phone-number"><i class="fa fa-phone"></i> +1-0000-000-000</div>
                  </div>
                </div>
              </div>
              <div class="cplgr-listing-popup-map">
                <div class="listing-popup-map" id="location-1" data-lat="40.713355" data-lng="-74.005535" data-zoom="12"></div>
              </div>
              <div class="fix"></div>
            </div>
          </div>
        </div><!-- listing-modal -->
        <div class="modal fade listing-modal" id="post_listing_modal_two" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog post-model">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span>
            </button>
            <div class="modal-content">
              <div class="cplgr-listing-grid">
                <div class="cplgr-listing-thumb-container">
                  <div class="cplgr-listing-thumb">
                    <a href="#">
                      <img src="assets/vitrine/images/listing/listing-thumb-2.jpg" class="img-responsive" alt="">
                    </a>
                  </div>
                  <div class="cplgr-listing-quick-action">
                    <ul>
                      <li class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="bookmark">
                        <a href="#">
                          <i class="fa fa-bookmark"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="cplgr-listing-grid-hover">
                    <div class="price-range">
                      <p>$150-$600</p>
                    </div>
                  </div>
                </div>
                <div class="cplgr-listing-description-container">
                  <div class="cplgr-listing-description">
                    <div class="author-avatar-thumb">
                      <a href="#">
                        <img src="assets/vitrine/images/author/author-thumb-1.jpg" class="img-responsive" alt="">
                      </a>
                      <div class="cplgr-verified" title="verified"></div>
                    </div>
                    <div class="cplgr-listing-categories">
                      <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Real Estate</a>
                    </div>
                    <div class="cplgr-status-close">
                      <p>Close</p>
                    </div>
                    <div class="fix"></div>
                    <h6 class="cplgr-listing-title">
                      <a href="#">Las Vegas housing</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  </div>
                  <div class="cplgr-listing-desription-footer">
                    <a href="#" class="cplgr-listing-location"><i class="fa fa-map-marker"></i> California</a>
                    <div class="cplgr-phone-number"><i class="fa fa-phone"></i> +1-0000-000-000</div>
                  </div>
                </div>
              </div>
              <div class="cplgr-listing-popup-map">
                <div class="listing-popup-map" id="location-2" data-lat="40.713355" data-lng="-74.005535" data-zoom="12"></div>
              </div>
              <div class="fix"></div>
            </div>
          </div>
        </div><!-- listing-modal -->
        <div class="modal fade listing-modal" id="post_listing_modal_three" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog post-model">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-close"></i></span>
            </button>
            <div class="modal-content">
              <div class="cplgr-listing-grid">
                <div class="cplgr-listing-thumb-container">
                  <div class="cplgr-listing-thumb">
                    <a href="#">
                      <img src="assets/vitrine/images/listing/listing-thumb-3.jpg" class="img-responsive" alt="">
                    </a>
                  </div>
                  <div class="cplgr-listing-quick-action">
                    <ul>
                      <li class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li class="bookmark">
                        <a href="#">
                          <i class="fa fa-bookmark"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="cplgr-listing-grid-hover">
                    <div class="price-range">
                      <p>$150-$600</p>
                    </div>
                  </div>
                </div>
                <div class="cplgr-listing-description-container">
                  <div class="cplgr-listing-description">
                    <div class="author-avatar-thumb">
                      <a href="#">
                        <img src="assets/vitrine/images/author/author-thumb-1.jpg" class="img-responsive" alt="">
                      </a>
                      <div class="cplgr-verified" title="verified"></div>
                    </div>
                    <div class="cplgr-listing-categories">
                      <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Real Estate</a>
                    </div>
                    <div class="cplgr-status-open">
                      <p>Open</p>
                    </div>
                    <div class="fix"></div>
                    <h6 class="cplgr-listing-title">
                      <a href="#">California Resourt</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                  </div>
                  <div class="cplgr-listing-desription-footer">
                    <a href="#" class="cplgr-listing-location"><i class="fa fa-map-marker"></i> California</a>
                    <div class="cplgr-phone-number"><i class="fa fa-phone"></i> +1-0000-000-000</div>
                  </div>
                </div>
              </div>
              <div class="cplgr-listing-popup-map">
                <div class="listing-popup-map" id="location-3" data-lat="40.713355" data-lng="-74.005535" data-zoom="12"></div>
              </div>
              <div class="fix"></div>
            </div>
          </div>
        </div><!-- listing-modal -->
      </div>
    </div>
    <!-- listing-modal-content section End -->

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
                  <img src="assets/vitrine/images/works/icon_1.svg" class="img-responsive" alt="">
                </div>
                <h6 class="work-title">Payer sa carte Prix KDO</h6>
                <p class="subtext">La carte PRIX KDO se vend au prix unique de 10 000 Fcfa. (infos commercial)</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="work-item text-center">
                <div class="work-thumb">
                  <img src="assets/vitrine/images/works/icon_2.svg" class="img-responsive" alt="">
                </div>
                <h6 class="work-title">Parcourir la vitrine </h6>
                <p class="subtext">Parcourir la vitrine et trouver le commerce de votre choix.</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="work-item text-center">
                <div class="work-thumb">
                  <img src="assets/vitrine/images/works/icon_3.svg" class="img-responsive" alt="">
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
                    <img src="assets/vitrine/images/blog/blog-thumb-1.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
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
                    <img src="assets/vitrine/images/blog/blog-thumb-2.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
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
                    <img src="assets/vitrine/images/blog/blog-thumb-3.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="post-date">
                    <p>27 December 2017</p>
                  </div>
                </div>
                <div class="post-content">
                  <div class="post-meta">
                    <div class="post-author">
                      <a href="#">
                        <img src="assets/vitrine/images/blog/blog-author/author-1.jpg" class="img-responsive" alt="">
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