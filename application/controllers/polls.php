<?php
class polls extends CI_Controller{

	public function __construct(){
		$this->load->database();
	}

	public function poll(){
		$page = 'live_poll';
		
		
		$this->load->model("poll_model");
		
		$data = array(
			'poll_option' => $this->input->post('php_framework'),
		)

		
		$this->poll_model->store_poll($data);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		


	}	
}