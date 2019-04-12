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
                  <h3>Inscription partenaire</h3>
                  <h5>Inscription Etape 2</h5>
                </div>
                <div class="page-info">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li class="active">Espace partenaires</li>
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

    <!-- Log in -->
    <div class="cplgr-main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="login-form">
              <form>
                <h4 class="title">Pourquoi octroyé des reductions ?</h4>
                <div class="form-group">
                  <label for="exampleInputEmail1">1+ Vous attiré d'avantages des clients à faire des achats dans votre entreprise.</label>
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">2+ Pour fidéliser votre clientèle.</label>
                  
                </div>
                
               
                
                
                
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="login-form">
              <form>
                <h4 class="title">Formulaire d'inscription (2/3)</h4>
                <div class="signup">
                  <p>Avez-vous déjà un compte ?<a href="#">&nbsp;&nbsp; Se connecter</a></p>
                </div>
                <div class="form-group">
                  <label for="taux_reduction1">Taux de réduction 1</label>
                  <input type="text" class="form-control" id="taux_reduction1" placeholder="Ex renseigner le taux de réduction en % ex: 20%">
                </div>

                <div class="form-group">
                  <label for="serv_reduction1">Services ou produits concernés par le taux de réductions 1</label>
                  <textarea style="border-radius:10px;"   id="message" placeholder="ex 40 % concerne les accessoires informatiques" cols="35" rows="4"></textarea>
                </div>

                <div class="form-group">
                   <span style="color:red;" id="btn_ajt1">Ajouter une autre réduction</span>
                </div>

                <div class="form-group" id="zone_taux_reduction2">
                  <label for="taux_reduction1">Taux de réduction 2</label>
                  <input type="text" class="form-control" id="taux_reduction2" placeholder="Ex renseigner le taux de réduction en % ex: 25%">
                </div>

                <div class="form-group" id="zone_serv_commerciaux2">
                  <label for="serv_reduction1">Services ou produits concernés par le taux de réductions 2</label>
                  <textarea style="border-radius:10px;"   id="message" placeholder="ex 40 % concerne les accessoires informatiques" cols="35" rows="4"></textarea>
                </div>


                <div class="form-group">
                   <span style="color:red;" id="btn_ajt2">Ajouter une autre réduction</span>
                </div>

                <div class="form-group" id="zone_taux_reduction3">
                  <label for="taux_reduction3">Taux de réduction 3</label>
                  <input type="text" class="form-control" id="taux_reduction3" placeholder="Ex renseigner le taux de réduction en % ex: 40%">
                </div>

                <div class="form-group" id="zone_serv_commerciaux3">
                  <label for="serv_reduction3">Services ou produits concernés par le taux de réductions 3</label>
                  <textarea style="border-radius:10px;"   id="message" placeholder="ex 40 % concerne les accessoires informatiques" cols="35" rows="4"></textarea>
                </div>

                

               

                
                
               
                <button type="submit" class="btn btn-default btn-block">Se connecter</button>
                <div class="signup">
                  <p>Avez-vous déjà un compte ?<a href="#">&nbsp;&nbsp; Se connecter</a></p>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Log in End -->

    <!-- Call to Action -->
    
    <!-- Call to Action End -->

    <!-- Footer -->
    <!-- Footer -->

    <?php include("templates/_footer.php") ?>
    
    <!-- Footer End -->

    <?php include("templates/_jsfooter.php") ?>
  </body>

  <script type="text/javascript">

  
    $( document ).ready(function() {
        console.log( "ready!" );

        $("#zone_taux_reduction2").hide();
        $("#zone_serv_commerciaux2").hide();

        $("#zone_taux_reduction3").hide();
        $("#zone_serv_commerciaux3").hide();

        $("#btn_ajt2").hide();
    
    });

    $( "#btn_ajt1" ).click(function() {

        $("#zone_taux_reduction2").show();
        $("#zone_serv_commerciaux2").show();

        $("#btn_ajt1").hide();
        $("#btn_ajt2").show();

    });

    $( "#btn_ajt2" ).click(function() {

        $("#zone_taux_reduction3").show();
        $("#zone_serv_commerciaux3").show();

        $("#btn_ajt1").hide();
        $("#btn_ajt2").hide();

    });

  </script>
</html>