<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MLogin extends CI_Model 
    {

        public function checkLogin($mail,$password)
        {
            $valiny = false;
            $sql = "select * from user";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            for($i=0;$i<count($result);$i++)
            {
                if($mail == $result[$i]['mail'] && $password == $result[$i]['password'])
                {
                    $valiny = true;
                }

            }

            echo $valiny;
            return $valiny;
        }
        public function getId($mail)
        {
            $sql= "select idUser from user where mail='$mail'";
            $query = $this->db->query($sql);

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            return $result;
        }
        public function getObjetUser($id)
        {
         $sql= "select * from objet where idUser='$id'";
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