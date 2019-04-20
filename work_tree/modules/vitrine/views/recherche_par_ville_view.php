<?php 


$lien_url="http://cartes.gloohost.net/";

?>

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
             <?php include("templates/_logo.php"); ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top:20px;">
             <?php include("templates/_menu_principale.php"); ?>
        </div>
      </div>
    </nav>

    <div class="cplgr-listing-search-full-container">
    
     
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <!-- listinger search filter -->
                <div class="listinger-search-filter">
                    <div class="row">
                       
                       
                       <?php
                       if(isset($liste_partenaire_ville)){

                           $nb_partenaire=count($liste_partenaire_ville);
                       }
                       ?>
                        <div class="col-sm-6">
                            <h5 class="result"><?php if(isset($nb_partenaire)) echo $nb_partenaire; ?> résultat(s) pour la ville <span>“<?php echo $ville; ?>”</span></h5>
                        </div>
                       
                    </div>
                </div>
                <!-- end search filter -->
            </div>
          </div>
         

          <?php
          if($nb_partenaire == 0){ ?>


          <h5 class="color:green">Nous n'avons aucun partenaire dans cette ville pour l'instant , nous sommes en ce moment en négociation avec des partenaires pour vous garantir les meilleures réductions ! </h5>
            
          <br><br><br><br><br><br><br><br><br><br>

         <?php }else{ ?>

          <div class="row">

          <div class="col-md-12">
              <div class="cplgr-listing-search-result">
                <div class="row">

                <?php

                if(isset($liste_partenaire_ville)){

                  foreach($liste_partenaire_categories as $itemPartenaire){ 

                    $id_mongo=$itemPartenaire["_id"];
                    foreach($id_mongo as $val){

                      $id_partenaire=$val;
                   }
                    
                    $id_ville=$itemPartenaire["id_ville"];
                    $nom_ville=$this->vitrine_model->mdl_nom_ville($id_ville);

                    $cle_image=$itemPartenaire["cle_image"];
                    $infoLogo=$this->vitrine_model->mdl_imageLogo($cle_image);
                    $imagePartenaire=$this->vitrine_model->mdl_ListImagesPartenairesAutres($cle_image);
                    
                    foreach($infoLogo as $logo){

                      $img_logo=$logo["image"];
                    }

                    foreach($imagePartenaire as $imgp){

                      $img_part=$imgp["image"];
                      
                      
                    }
                    
                    ?>

<div class="col-md-3 col-sm-3">
                            <div class="cplgr-listing-grid">
                              <div class="cplgr-listing-thumb-container">
                                <div class="cplgr-listing-thumb">
                                  <a href="<?php echo base_url(); ?>vitrine/details_partenaire/<?php echo $id_partenaire; ?>">
                                  <img src="<?php echo $lien_url; ?>uploads/partenaires/<?php echo $img_part; ?>" class="img-responsive" alt="">
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
                                    <p><?php echo $itemPartenaire["partenaireReduction_vitrine"]; ?> % de réductions</p>
                                  </div>
                                </div>
                              </div>
                              <div class="cplgr-listing-description-container">
                                <div class="cplgr-listing-description">
                                  <div class="author-avatar-thumb">
                                    <a href="#">
                                      <img src="<?php echo $lien_url; ?>uploads/logo/<?php echo $img_logo; ?>" class="img-responsive" alt="">
                                    </a>
                                    <div class="cplgr-verified" title="verified"></div>
                                  </div>
                                  <div class="cplgr-listing-categories">
                                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $categorie; ?></a>
                                  </div>
                                  <div class="cplgr-status-open">
                                    <p>Ouvert</p>
                                  </div>
                                  <div class="fix"></div>
                                  <h6 class="cplgr-listing-title">
                                    <a href="<?php echo base_url(); ?>vitrine/details_partenaire/<?php echo $id_partenaire; ?>"><?php echo $itemPartenaire["partenaireNom_vitrine"]; ?></a>
                                  </h6>
                                  <p><?php echo substr($itemPartenaire["partenaireDescription_vitrine"],0,100); ?> . . .</p>
                                </div>
                                <div class="cplgr-listing-desription-footer">
                                  <a href="#" class="cplgr-listing-location"><i class="fa fa-map-marker"></i> <?php if(isset($nom_ville)) echo $nom_ville; ?></a>
                                  <div class="cplgr-phone-number"><i class="fa fa-phone"></i> <?php echo $itemPartenaire["partenaireTelephone_mobile_vitrine"]; ?></div>
                                </div>
                              </div>
                              <!-- modal start here -->
                             
                            </div>
                          </div>


                 <?php }

                }
                
                ?>

                 
                 
                  

                </div>
              </div>
            </div>
            </div>
          <div class="row">
            <div class="col-md-12">
              <div class="pagination-list section-padding-top-60 text-center">
                <ul class="pagination">
                  <li  class="active"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          </div>



        <?php }
        ?>
           
         
        
        <div class="cplgr-listing-search-footer">
          <div class="copyright-text">
            <p>Copyright 2019, <a href="#">Afrik'Innov</a>. All Rights Reserved</p>
          </div>
        </div>
      
    </div>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/leaflet/js/dummylatlng.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/js/jquery.easy-autocomplete.min.js"></script>
    <script src='<?php echo base_url(); ?>assets/vitrine/assets/js/tinymce.min.js'></script>
    
    <!-- leaflet -->
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/leaflet/js/leaflet-src.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/assets/leaflet/js/leaflet.markercluster-src.js"></script>
    
    <!-- Google Map Api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    
    <script src="<?php echo base_url(); ?>assets/vitrine/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/vitrine/js/dashboard.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/vitrine/js/searchMap.js"></script>
  </body>

</html>