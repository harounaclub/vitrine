<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vitrine_model extends CI_Model {

    function __construct() {

        parent::__construct();
        $this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');

    }


    


    

       // generateur de clé primaire
   function clePrimaire( $taille ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$taille);

   }

   function clePrimaireCM( $taille ) {

    $chars = "0123456789";
    return substr(str_shuffle($chars),0,$taille);

   }


  

}