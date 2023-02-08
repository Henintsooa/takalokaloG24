<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MAjouterObjet extends CI_Model 
    {

        public function insertObjet($titre,$photo,$categorie,$description,$idUser)
        {   
            $sql = "INSERT into objet values (null,'$titre','$photo','$categorie','$description','$idUser')";
            $query = $this->db->query($sql);
            return $query;
            
        }

       
    }
?>