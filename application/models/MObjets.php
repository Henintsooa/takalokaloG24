<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MObjets extends CI_Model 
    {

        public function getAllObjet($id)
        {
         $sql= "select * from objet where idUser!='$id' and idObjet not in (select idObjet from objetechange)";
         $query = $this->db->query($sql);
         $result = array();
 
         foreach($query->result_array() as $row)
         {
             $result[]=$row;
         }
         return $result;
        }

       
    }
?>