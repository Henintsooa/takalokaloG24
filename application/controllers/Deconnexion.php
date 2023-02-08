<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deconnexion extends CI_Controller {

    public function index()
	{
		$this->session->sess_destroy();
		session_destroy();
		redirect('welcome/index');
	}
	
}
?>