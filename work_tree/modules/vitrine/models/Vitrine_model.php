<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vitrine_model extends CI_Model {

    function __construct() {

        parent::__construct();
        $this->load->library('mongo_db',array('activate'=>'default'),'mongo_db');

    }

    function mdl_infoCategorie($categorie_vitrine)
    {
  
        $info_categorie = $this->mongo_db->where(array('categorie_vitrine' => $categorie_vitrine))->get('vitrine_categorie');
        return $info_categorie;

    }

    function mdl_infoVille($ville)
    {
  
        $info_categorie = $this->mongo_db->where(array('vitrine_ville' => $ville))->get('vitrine_ville');
        return $info_categorie;

    }


    function mdl_listePartenaire_ville($id_ville)
    {
  
        $listePartenaire_ville = $this->mongo_db->where(array('id_ville' => $id_ville))->get('vitrine_partenaire');
        return $listePartenaire_ville;

    }

    function mdl_listePartenaire_categorie($id_categorie)
    {
  
        $listePartenaire_categorie = $this->mongo_db->where(array('id_categorie' => $id_categorie))->get('vitrine_partenaire');
        return $listePartenaire_categorie;

    }

    function mdl_nom_ville($id_ville)
    {
  
        $convertedid=new MongoDB\BSON\ObjectId($id_ville);
        $info_ville = $this->mongo_db->where(array('_id' => $convertedid))->get('vitrine_ville');
        
        $nom_ville="";
        
        foreach($info_ville as $ville){

            $nom_ville=$ville["vitrine_ville"];
        }

        return $nom_ville;

    }

    function mdl_compter_Partenaire_categorie(){

        $nb_Partena=$this->mongo_db->count('vitrine_partenaire');
        return $nb_menuPrincipal;
    }

    function mdl_imageLogo($cle_image)
    {
    
            
        $image_logo=$this->mongo_db->where(array('cle_image' => $cle_image))->get('vitrine_partenaire_logo');
        return $image_logo;
    
    
    }

    function mdl_ListImagesPartenairesAutres($cle_image)
    {
    
            
        $images_partenaires=$this->mongo_db->where(array('cle_image' => $cle_image))->get('vitrine_partenaire_images');
        return $images_partenaires;
    
    
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