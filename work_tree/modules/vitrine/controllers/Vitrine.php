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
    

     






}
