<?php 
class Eventos extends CI_controller{

	public function get_eventos(){
		$this->load->helper('url');
		$this->load->model('Model_eventos','ME',true);
		$eventos=$this->MR->geteventos();
		return echo json_encode($eventos);
	}
}


?>