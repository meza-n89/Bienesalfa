<?php 
/**
 * 
 */
class Show extends CI_controller
{
	
	
public function show_user()
{
	$this->load->model('Model_show','md',true);
	$query=$this->md->show_users();
	$data['query']=$query;
	$this->load->view('dashboard/index',$data);

}

}


?>