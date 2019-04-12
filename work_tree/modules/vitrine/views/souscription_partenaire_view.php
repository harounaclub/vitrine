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
                  <h3>Inscription partenaire</h3>
                  <h5>Inscription Etape 1</h5>
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
                <h4 class="title">Pourquoi devenir partenaire ?</h4>
                <div class="form-group">
                  <label for="exampleInputEmail1">1+ Vous permet d'accroitre signicativement votre chiffre d'affaire en bénéficiant d'un réseau de client sans cesse grandissant.</label>
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">2+ Augmenter votre notoriété sur l'internet ,grâce à notre vitrine qui vous permet de vous connaitre et de connaitre vos produits et services.</label>
                  
                </div>
                
               
                
                
                
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="login-form">
              <form>
                <h4 class="title">Formulaire d'inscription (1/2)</h4>
                <div class="signup">
                  <p>Avez-vous déjà un compte ?<a href="#">&nbsp;&nbsp; Se connecter</a></p>
                </div>
                <div class="form-group">
                  <label for="raison_sociale">Raison sociale *</label>
                  <input type="text" class="form-control" id="raison_sociale" placeholder="Entrer la raison sociale ou Entreprise">
                </div>

                <div class="form-group">
                  <label for="raison_sociale">R.C.C.M *</label>
                  <input type="text" class="form-control" id="raison_sociale" placeholder="Entrer la raison sociale ou Entreprise">
                </div>

                <div class="form-group">
                  <label for="situation_geo">Domaine d'activité *</label>
                  <input type="text" class="form-control" id="domaine_activite" placeholder="Entrer votre domaine d'activité">
                </div>

                <div class="form-group">
                  <label for="situation_geo">Situation géographique *</label>
                  <input type="text" class="form-control" id="situation_geo" placeholder="Entrer votre situation géographique">
                </div>

                <div class="form-group">
                  <label for="tel">Téléphone *</label>
                  <input type="text" class="form-control" id="tel" placeholder="Entrer votre numéro de condition">
                </div>

                <div class="form-group">
                  <label for="email">Email </label>
                  <input type="text" class="form-control" id="email" placeholder="Entrer votre email">
                </div>

                <div class="form-group">
                  <label for="tel">Representée par </label>
                  <input type="text" class="form-control" id="represente_par" placeholder="Entrer votre numéro de condition">
                </div>

                <div class="form-group">
                  <label for="tel">Demeurant à </label>
                  <input type="text" class="form-control" id="represente_par" placeholder="Entrer votre numéro de condition">
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
</html>