<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       
        if(!$this->session->has_userdata('mail'))
		{
			redirect('welcome/index');  
		}
		$this->load->model('MLogin');
    }
    public function index()
	{
		$data = array();
		$data['mail'] = $this->session->userdata('mail');
        $data['content'] = 'pages/content';
		$data['id']=$_SESSION['id'];
		$this->load->view('index',$data);
	}   
}
?>