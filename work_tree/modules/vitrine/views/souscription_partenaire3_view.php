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
                  <h5>Inscription Etape 3</h5>
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
        
          <div class="col-md-12">
            
              <form>
               
                <div class="signup">
                  <p>Avez-vous déjà un compte ?<a href="#">&nbsp;&nbsp; Se connecter</a></p>
                </div>

                <div class="form-group">
                 
                  <textarea style="border-radius:10px;"   id="message" placeholder="ex 40 % concerne les accessoires informatiques" cols="80" rows="10">
                  
                  Article 1 : LE PRINCIPE
Tout titulaire de la carte PRIXKDO à droit à un taux de réduction et des avantages dans toutes les structures partenaires au réseau, selon qu’il serait convenu des avantages et privilèges à accorder. 
Article 2 : ACCORD DE PRINCIPE 
Meck&co s’engage à offrir:                                 	
une parution gratuite dans la rubrique « Petites Annonces » du magazine ODE et une réduction de 20% sur tous les encarts publicitaires. ODE ou l’Officiel des Events est un magazine tiré à plus de 10000 exemplaires par numéro et distribué gratuitement sur toute l’étendue du territoire ivoirien ;
 1 mois d’utilisation de l’application « TOOMYWA ». TOOMYWA est une application de géo-localisation qui permettra de faciliter vos livraisons; 
 une formation gratuite en gestion dans le cabinet « AKWORLD SERVICES » et une réduction de 50% sur toutes autres formations données dans le cabinet ;
 40% de réduction sur les spots publicitaires sur la chaîne de télé « BUSINESS 24 » disponible sur le bouquet Canal 171
 le logiciel de GESTION SMARTGES à 89 700 FCFA  au lieu de 149 700 FCFA valable sur 1 an
 les services de l’entreprise ROOGO SERVICES, entreprise spécialisée dans la vente de matériel informatique, électronique et électroménager, selon les conditions et termes suivantes : 50% à la commande, 25% à 30 jours et le solde à 60 jours.
la possibilité à chacun de ses partenaires d’intégrer la flotte téléphonique Fan Club Showbiz  qui compte plus de 10 000 membres ;
Les services de l’entreprise METIER PLUS Sarl à des tarifs préférentiels. METIER PLUS Sarl est une entreprise spécialisée dans l’entretien des climatiseurs, l’électrification, la maintenance des groupes électrogènes, la plomberie et le froid. Ainsi pour l’entretien de votre climatiseur le tarif sera exceptionnellement de 4000 FCFA au lieu de 10 000 FCFA
Parallèlement à cette convention, les parties souhaitent s’entendre sur les modalités d’un accord de coopération établit comme suit :
il convient pour la partie MECK AND CO, de mettre sur le marché la carte PRIXKDO qui donnerait droit à tout adhérent de bénéficier de réductions sur leurs différentes prestations et d’avantages au sein des structures partenaires. En accord avec le principe de réductions et/ou avantages, la société s’engage à octroyer les avantages et à mettre en application le taux de réduction dûment conclu avec la société MECK AND CO vis-à-vis des clients détenteurs de la carte PRIXKDO.
                  </textarea>
                </div>

                <div class="checkbox">
                   <label>
                    <input type="checkbox" id="accep">Accepter les termes et conditions
                   </label>
                </div>

              

                

               
                 
                
                
               
                <button type="submit" id="btn_finaliser" class="btn btn-default btn-block">Finaliser l'inscription</button>
                <div class="signup">
                  <p>Avez-vous déjà un compte ?<a href="#">&nbsp;&nbsp; Se connecter</a></p>
                </div>
                
              </form>
           
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

        $("#btn_finaliser").hide();
        
      
    
    });

   

    $( "#accep" ).click(function() {


        $("#btn_finaliser").show();


    });

  </script>
</html>