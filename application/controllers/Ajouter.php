<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajouter extends CI_Controller {


	public function index()
	{
		$titre = $this->input->post("titre");
		$photo = $this->input->post("photo");
		$categorie = $this->input->post("categorie");
		$description = $this->input->post("description");
        $idUser = $_SESSION['id']['idUser'];
		$this->load->model('MAjouterObjet');
        $this->MAjouterObjet->insertObjet($titre,$photo,$categorie,$description,$idUser);

		$this->load->model('MLogin');
		$data = array();
		$data['content'] = 'pages/content';
		$data['listeObjet'] = $this->MLogin->getObjetUser($_SESSION['id']['idUser']);
        $this->load->view('index',$data);

	}
	
}
?>