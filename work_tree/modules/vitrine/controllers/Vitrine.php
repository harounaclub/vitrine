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






}
