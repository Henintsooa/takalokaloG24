<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MInscription extends CI_Model 
    {

        public function insertUser($name,$mail,$password)
        {   
            $sql = "INSERT into user values (null,'$name','$mail','$password',1)";
            $query = $this->db->query($sql);
            return $query;
            
        }

       
    }
?>