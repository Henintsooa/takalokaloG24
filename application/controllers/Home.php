
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{		
        $this->load->model('MLogin');
		$data = array();
		$data['content'] = 'pages/content';
		$data['listeObjet'] = $this->MLogin->getObjetUser($_SESSION['id']['idUser']);
        $this->load->view('index',$data);
	}
	
}
?>