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
    <!-- Subheader -->
    <div class="sub-header sub-header-bg">
      <div class="sub-header-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sub-header-contents">
                <div class="page-title">
                  <h3>Comment devenir partenaires ?</h3>
                </div>
                <div class="page-info">
                  <div class="row">
                    <div class="col-sm-6">
                      
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

    <div class="cplgr-main-container section-padding-top">
      <div class="container">
        <div class="section-wrapper">
          <div class="row">
            <div class="col-sm-6">
              <div class="left-content">
                <div class="image-content working-process working-process-1">
                  <div class="section-heading">
                    <h3 class="title">01. Cliquez sur l’onglet “espace partenaire”; </h3>
                    <br>
                    <p class="subtext">Puis remplir le formulaire ci -dessous; </p>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="right-content">
                <div class="half-thumb">
                  <img src="<?php echo base_url(); ?>assets/vitrine/images/works/works-thumb-1.png" class="img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        
       
      </div>
    </div>


   
   <br><br>

    <!-- Call to Action -->
    <!-- Call to Action -->
    <?php include("templates/_voulezvous_partenaires.php") ?>
    <!-- Call to Action End -->
    <!-- Call to Action End -->

    <!-- Footer -->
     <!-- Footer -->

     <?php include("templates/_footer.php") ?>
    
    <!-- Footer End -->

    <?php include("templates/_jsfooter.php") ?>
  </body>

</html>