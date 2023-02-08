<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {


	public function index()
	{
		$mail = $this->input->post("mail");
		$password = $this->input->post("password");
		$name = $this->input->post("name");
		$this->load->model('MInscription');
        $this->MInscription->insertUser($name,$mail,$password);
        redirect('welcome/index');

	}
	
}
?>