<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class MEchange extends CI_Model 
    {

        public function demande($idUser1,$idUser2,$idObjet1,$idObjet2)
        {   
            $sql = "INSERT into echange values (null,'$idUser1','$idUser2','$idObjet1','$idObjet2','Attente',now(),'')";
            $query = $this->db->query($sql);
            return $query;
            
        }
        public function listedemande($id)
       {
            $sql= "select idEchange,idObjet1,idUser1,idUser2,nom,titre,photo,categorie,descris from echange join objet on objet.idObjet=echange.idObjet1 join user on user.idUser=echange.idUser1 where statut='Attente' and idUser2='$id'";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[]=$row;
            }
            return $result;
       }
    // -- (Info mombany andefasana user2)
       public function objetdemander($id)
       {
            $sql= "select idEchange,idObjet2,idUser2,nom,titre,photo,categorie,descris from echange join objet on objet.idObjet=echange.idObjet2 join user on user.idUser=echange.idUser2 where statut='Attente' and idUser2='$id'";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[]=$row;
            }
            return $result;
       }
       // -- (Info momba ny mpandefa user1)
        public function UserAccepter($id)
       {
            $sql= "select idEchange,idObjet1,idUser1,idUser2,nom,titre,photo,categorie,descris from echange join objet on objet.idObjet=echange.idObjet1 join user on user.idUser=echange.idUser1 where statut='Attente' and idUser2='$id'";
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[]=$row;
            }
            return $result;
       }
       public function acceptationUser2($id,$titre1,$photo1,$categorie1,$description1,$idUser2,$idObjet1)
       {    

            $sql = "update echange set dateAcceptation=now() ,statut='Accepter' where idEchange='$id'";
            $query = $this->db->query($sql);

            $sql2 = "INSERT into objetEchange values (null,'$idObjet1','$titre1','$photo1','$categorie1','$description1','$idUser2',now())";
            $query2 = $this->db->query($sql2);

            return $query2;
       }
       public function acceptationUser1($titre2,$photo2,$categorie2,$description2,$idUser1,$idObjet2)
       {    
            $sql2 = "INSERT into objetEchange values (null,'$idObjet2','$titre2','$photo2','$categorie2','$description2','$idUser1',now())";
            $query2 = $this->db->query($sql2);

            return $query2;
       }
    }
?>