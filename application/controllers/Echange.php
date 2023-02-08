<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {


	public function index()
	{		
        $this->load->model('MLogin');

        $objet1=$_GET['objet'];
        $idUser1=$_GET['user'];
		$data = array();
		$data['content'] = 'pages/echange';
		$data['objet1'] = $objet1;
		$data['user1'] = $idUser1;
		$data['listeObjet'] = $this->MLogin->getObjetUser($_SESSION['id']['idUser']);
        $this->load->view('index',$data);
	}
	
}
?>