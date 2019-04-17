<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Vitrine extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();
        $this->load->model('vitrine_model');
    
	}

    function index(){

       $this->load->view("main_view");
        
    }

    function quiSommesNous(){

        $this->load->view("quiSommesNous_view");
         
    }

    function beneficierReductions(){

        $this->load->view("comment_beneficier_reduction_view");
         
    }

    function devenirPartenaire(){

        $this->load->view("comment_devenir_partenaire_view");
         
    }

    function nousContacter(){

        $this->load->view("nous_contacter");
         
    }

    function seConnecter(){

        $this->load->view("se_connecter_view");
         
    }

    function souscriptionPartenaire_etape1(){

        $this->load->view("souscription_partenaire_view");
         
    }

    function souscriptionPartenaire_etape2(){

        $this->load->view("souscription_partenaire2_view");
         
    }

    function souscriptionPartenaire_etape3(){

        $this->load->view("souscription_partenaire3_view");
         
    }


    //recherche par ville
    function recherche_ville($ville){

        $ville_nom=urldecode($ville);
        $info_categorie=$this->vitrine_model->mdl_infoVille($ville_nom);
        foreach($info_categorie as $infoCat){

            $id_mongo=$infoCat["_id"];
        
            foreach($id_mongo as $val){

                $id_ville=$val;
            }

        }

        $data["ville"]=$ville_nom;
 
        $data["liste_partenaire_ville"]=$this->vitrine_model->mdl_listePartenaire_ville($id_ville);
        $this->load->view("recherche_par_ville_view",$data);
         
    }

    //recherche par categorie
    function recherche_categorie($categorie){


        $categorie_nom=urldecode($categorie);
        $info_categorie=$this->vitrine_model->mdl_infoCategorie($categorie_nom);
        foreach($info_categorie as $infoCat){

            $id_mongo=$infoCat["_id"];
        
            foreach($id_mongo as $val){

                $id_categorie=$val;
            }

        }

        $data["categorie"]=$categorie_nom;
 
        $data["liste_partenaire_categories"]=$this->vitrine_model->mdl_listePartenaire_categorie($id_categorie);
        $this->load->view("recherche_par_categorie_view",$data);
         
    }

    //details partenaire
    function details_partenaire(){

        $this->load->view("details_partenaire_view");
         
    }
    

     






}
