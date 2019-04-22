<?php

$lien_url="http://cartes.gloohost.net/";


if(isset($info_partenaire)){

  foreach($info_partenaire as $itemPartenaire){


    $id_ville=$itemPartenaire["id_ville"];
    $id_categorie=$itemPartenaire["id_categorie"];
    $nom_ville=$this->vitrine_model->mdl_nom_ville($id_ville);
    $nom_partenaire=$itemPartenaire["partenaireNom_vitrine"];
    $localisation_partenaire=$itemPartenaire["partenaireLocalisation_vitrine"];
    $contenu_partenaire=$itemPartenaire["partenaireContenuDescription_vitrine"];
    $maps_partenaire=$itemPartenaire["partenaireGoogleMaps_vitrine"];
    $partenaireReduction_vitrine=$itemPartenaire["partenaireReduction_vitrine"];

    $telephone_mobile_partenaire=$itemPartenaire["partenaireTelephone_mobile_vitrine"];
    $telephone_fixe_partenaire=$itemPartenaire["partenaireTelephone_vitrine"];

    $email_partenaire=$itemPartenaire["partenaireEmail_vitrine"];
    

    $infocategorie=$this->vitrine_model->mdl_infoCategorieid($id_categorie);
    foreach($infocategorie as $iteCat){

      $nom_categorie=$iteCat["categorie_vitrine"];
    }

    $cle_image=$itemPartenaire["cle_image"];
    $infoLogo=$this->vitrine_model->mdl_imageLogo($cle_image);
    $imagePartenaire=$this->vitrine_model->mdl_ListImagesPartenairesAutres($cle_image);
                    
                    foreach($infoLogo as $logo){

                      $img_logo=$logo["image"];
                    }

                    foreach($imagePartenaire as $imgp){

                      $img_part=$imgp["image"];
                      
                      
                    }




  }

  
}

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
              <div class="cplgr-listing-details-slider-wrapper">
                <div class="slider-content text-center">
                  <div class="cplgr-lising-avater">
                    <img src="<?php echo $lien_url; ?>uploads/logo/<?php echo $img_logo; ?>" class="img-responsive" alt="">
                    <div class="avater-varified"></div>
                  </div>
                  <h3><a href="#"><?php echo $nom_partenaire; ?></a></h3>
                  <p class="cplgr-listing-type"><a href="#"><?php echo $nom_categorie; ?></a></p>
                  <p class="cplgr-listing-address"><?php echo $localisation_partenaire; ?>, <?php echo $telephone_mobile_partenaire; ?></p>
                  <div class="rating-area">
                    <ul>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    
                  </div>
                  
                </div>
                <div class="cplgr-subheader-navigation-block">
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
                       
                        <li class="active"><?php echo $nom_partenaire; ?></li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <div class="cplgr-navigation">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="cplgr-listing-details-slider" class="cplgr-listing-details-slider">

      <?php

      if(isset($info_partenaire)){

        foreach($info_partenaire as $itemImage){

          $imagePartenaire=$this->vitrine_model->mdl_ListImagesPartenairesAutres($cle_image);
                    
                    

                    foreach($imagePartenaire as $imgp){

                     

                      $img_part=$imgp["image"];

                    ?>

                      <div class="listing-details-slider-bg-1" style="background: url(<?php echo $lien_url; ?>uploads/partenaires/<?php echo $img_part; ?>);">
                        <div class="listing-details-slider-item">
                        </div>
                      </div>

                    <?php
                      
                      
                    }


        }
      }
      
      
      ?>
       
        
       
      </div>
    </div>

    <!-- cplgr-listing-details-container -->
    <div class="cplgr-main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="cplgr-listing-details-container">
              <div class="cplgr-listing-details">


              <?php echo $contenu_partenaire; ?>
                 
                
                <div class="cplgr-listing-video">
                  <div class="embed-responsive embed-responsive-16by9">

                      <?php echo $maps_partenaire; ?>
      
                  </div>
                </div>
                
              </div>
              <div class="cplgr-listing-faq">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Comment bénéficier des de reductions?
                      </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Pour bénéficier des  de réduction, il faut être detenteur de la carte PRIXKDO
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Comment faire pour être detenteur de la carte PrixKDO ?
                      </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Quels sont les autres avantages de la carte PRIXKDO ?
                      </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar">
              <div class="widget contact-widget">
                <div id="map-area" class="map-area section" style=" text-align:center;">
                       <div style="font-size:50px; color:green;"><?php echo $partenaireReduction_vitrine; ?> %</div>
                       <div style="font-size:20px; color:green;">de reductions</div>
                </div>
                <div class="contact-address">
                  <p class="address">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span><?php echo $localisation_partenaire; ?> </span>
                  </p>
                  <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                    <?php echo $telephone_fixe_partenaire; ?>
                      <br>
                      <?php echo $telephone_mobile_partenaire; ?>
                    </span>
                  </p>
                  <p>

                  <?php if(isset($email_partenaire)){ ?>


                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span><?php echo $email_partenaire; ?></span>



                  <?php } 
                  ?>
                    
                  </p>
                  
                  <!-- <ul class="social-link">
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
                  </ul> -->
                  <p>
                   
                  </p>
                </div>
              </div>
              <!-- widget -->
              
              <!-- widget -->
             
              <!-- widget -->
              <div class="widget ad-widget">
                <a href="#">
                  <img src="<?php echo base_url(); ?>assets/vitrine/images/misc/ad.jpg" alt="img" class="img-responsive">
                </a>
              </div>
              <!-- widget -->
              <div class="widget contact-form-wdiget">
                <div class="widget-title">
                  <p>
                  <i class="fa fa-info-circle" aria-hidden="true"></i> Ecrire à 
                  </p>
                </div>
                <div class="widget-body">
                  <form class="contact-form">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group textarea-form-group">
                      <textarea rows="5" cols="5" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="button primary-bg">Envoyer</button>
                  </form>
                </div>
              </div>
              <!-- widget -->
             
              <!-- widget -->
           
              <!-- widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- cplgr-listing-details-container -->

    <!-- Call to Action -->
    <?php include("templates/_voulezvous_partenaires.php") ?>
    <!-- Call to Action End -->

   
    <!-- Footer -->

    <?php include("templates/_footer.php") ?>
    
    <!-- Footer End -->

    <?php include("templates/_jsfooter.php") ?>
  </body>

</html>