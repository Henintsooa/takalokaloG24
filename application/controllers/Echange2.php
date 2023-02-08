<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange2 extends CI_Controller {


	public function index()
	{		
        
        $objet1=$_GET['objet1'];
        $objet2=$_GET['objet2'];
		$user1=$_GET['user1'];
		$user2=$_GET['user2'];
		

		$data = array();
		$data['content'] = 'pages/content';
		$data['objet1'] = $objet1;
		$data['objet2'] = $objet2;
		$this->load->model('MEchange');	
		$this->MEchange->demande($user1,$user2,$objet1,$objet2);

        $this->load->model('MLogin');
		$data['listeObjet'] = $this->MLogin->getObjetUser($_SESSION['id']['idUser']);
        $this->load->view('index',$data);
	}
	public function listeDemande() 
	{
		$data = array();
		$data['content'] = 'pages/listeDemande';
		$this->load->model('MEchange');	
		$data['listeDemande']=$this->MEchange->listedemande($_SESSION['id']['idUser']);
		$data['objetDemande']=$this->MEchange->objetdemander($_SESSION['id']['idUser']);
        $this->load->view('index',$data);
        
	}
}
?>