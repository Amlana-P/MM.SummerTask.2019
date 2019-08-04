<?php
class articles extends CI_Controller{
	public function index(){
		$data['title'] = 'Latest Articles';
		$data['articles'] = $this->article_model->get_posts(); 
		$this->load->view('templates/header');
		$this->load->view('articles/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL){
		$data['article'] = $this->article_model->get_posts($slug);
		$post_id = $data['article']['id'];
		$data['comments'] = $this->comment_model->get_comments($post_id);
		
		if(empty($data['article'])){
			show_404();
		}
		$data['title'] = $data['article']['title'];
		$this->load->view('templates/header');
		$this->load->view('articles/view', $data);
		$this->load->view('templates/footer');
	}

	public function create(){

		if(!$this->session->userdata('logged_in')){

			redirect('users/login');
		}
		$data['title'] = 'Create Post';

		$data['categories'] = $this->article_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');


		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('articles/create', $data);
			$this->load->view('templates/footer');
		} else {
			
			// Upload Image
			$config['upload_path'] = './assets/images/posts';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}
			// Set message
			$this->session->set_flashdata('post_created', 'Your post has been created');


			$this->article_model->create_post($post_image);
			redirect('articles');

		}
	}
	public function delete($id){

		if(!$this->session->userdata('logged_in')){

			redirect('users/login');
		}
		$this->article_model->delete_post($id);
		// Set message
			$this->session->set_flashdata('post_deleted', 'Your post has been deleted');
		redirect('articles');

	}
	public function edit($slug){

		if(!$this->session->userdata('logged_in')){

			redirect('users/login');
		}
		$data['article'] = $this->article_model->get_posts($slug);

		if($this->session->userdata('user_id') != $this->article_model->get_posts($slug)['user_id']){

			redirect('articles');


		}

		$data['categories'] = $this->article_model->get_categories();
		
		if(empty($data['article'])){
			show_404();
		}

		$data['title'] = 'Edit Article';
		
		$this->load->view('templates/header');
		$this->load->view('articles/edit', $data);
		$this->load->view('templates/footer');
		
		
	}

	public function update(){

		if(!$this->session->userdata('logged_in')){

			redirect('users/login');
		}

		$this->article_model->update_post();
		// Set message
				$this->session->set_flashdata('post_updated', 'Post has been updated');
		redirect('articles');

	}




}