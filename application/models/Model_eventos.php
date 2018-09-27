<?php 
class Model_eventos extends CI_model{
	function __construct(){
		$this->load->helper('url');
		$this->load->database();
	}

public function geteventos(){
	$this->db->select('id_cita id, nombre title, fechaini start, fechafin end, url');
		$this->db->from('cita');

		return $this->db->get()->result();
}	
}




?>