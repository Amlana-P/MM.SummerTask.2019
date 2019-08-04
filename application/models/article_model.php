<?php
class article_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_posts($slug = FALSE){

		if($slug === FALSE){
			$this->db->order_by('articles.id', 'DESC');
			$this->db->join('categories', 'categories.id = articles.category_id');
			$query = $this->db->get('articles');
			return $query->result_array();
		}
		$query = $this->db->get_where('articles', array('slug' => $slug));
		return $query->row_array();
	}

	public function create_post($post_image){
		$slug = url_title($this->input->post('title'));
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id'),
			'user_id' => $this->session->userdata('user_id'),
			'post_image' => $post_image


		);
		return $this->db->insert('articles', $data);
	}
	public function delete_post($id){
		$this->db->where('id', $id);
		$this->db->delete('articles');
		return true;


	}
	public function update_post(){
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id')
		);
		$this->db->where('id', $this->input->post('id'));

		return $this->db->update('articles', $data);



	}

	public function get_categories(){
		$this->db->order_by('name');
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	public function get_posts_by_category($category_id){
			$this->db->order_by('articles.id', 'DESC');
			$this->db->join('categories', 'categories.id = articles.category_id');
				$query = $this->db->get_where('articles', array('category_id' => $category_id));
			return $query->result_array();
		}

}