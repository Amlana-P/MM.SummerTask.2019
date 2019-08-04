<?php
class poll_model extends CI_Model{

	public function store_poll($data){


		$this->db->insert('tbl_poll', $data);

	}
}
?>