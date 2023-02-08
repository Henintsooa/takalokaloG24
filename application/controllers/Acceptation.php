<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceptation extends CI_Controller {


	public function index()
	{   
        $idEchange=$_GET['idEchange'];
        $titre1=$_GET['titre1'];
        $photo1=$_GET['photo1'];
        $categorie1=$_GET['categorie1'];
        $description1=$_GET['descris1'];
        $idUser1=$_GET['idUser1'];
        $idObjet1=$_GET['idObjet1'];

        $titre2=$_GET['titre2'];
        $photo2=$_GET['photo2'];
        $categorie2=$_GET['categorie2'];
        $description2=$_GET['descris2'];
        $idUser2=$_GET['idUser2'];
        $idObjet2=$_GET['idObjet2'];

		$this->load->model('MEchange');
        $this->MEchange->acceptationUser2($idEchange,$titre1,$photo1,$categorie1,$description1,$idUser2,$idObjet1);
        $this->MEchange->acceptationUser1($titre2,$photo2,$categorie2,$description2,$idUser1,$idObjet2);

        $idUser = $_SESSION['id']['idUser'];
		$this->load->model('MLogin');
		$data = array();
		$data['content'] = 'pages/content';
		$data['listeObjet'] = $this->MLogin->getObjetUser($idUser);
        $this->load->view('index',$data);

	}
	
}
?>