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
            <img src="images/logo.png" class="img-responsive" alt="">
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
                  <h3>Espace partenaires</h3>
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
          <div class="col-md-6 col-md-offset-3">
            <div class="login-form">
              <form>
                <h4 class="title">Sign in</h4>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom d'utilisateur ou adresse mail *</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe *</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
               
                <button type="submit" class="btn btn-default btn-block">Se connecter</button>
                <div class="signup">
                  <p>Pas encore membre ? <a href="#">Se pre inscrire</a></p>
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