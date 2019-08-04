<?php
class askaquestion_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}
	                                                                                                                                                                                                   
	function savequestions($question)
	{
	$query="insert into users values('','$question')";
	$this->db->query($query);
	}
}