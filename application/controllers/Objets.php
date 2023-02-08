<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objets extends CI_Controller {

    
	public function index()
	{
		$data = array();
		$this->load->model('MObjets');
		$data['listeObjets'] = $this->MObjets->getAllObjet($_SESSION['id']['idUser']);
		$data['content'] = 'pages/objets';
		$this->load->view('index',$data);

	}
	
}
?>