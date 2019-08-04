<?php
class askaquestion extends CI_Controller{

	public function index(){

		$data['title'] = 'Ask a question';

		$data['askaquestion'] = $this->askaquestion_model->savequestions();


		$this->load->view('templates/header');
		$this->load->view('askaquestion/index', $data);
		$this->load->view('templates/footer');


	}
}