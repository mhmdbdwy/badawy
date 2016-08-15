<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	
	
	
	   
	public function viewevent($title)
	{
	
	

	$title = str_replace('-',' ',$title);
	
	$data['events'] = $this->model->eventmenu('events');
	$data['manage'] = $this->model->selectdb('1','home');
	$data['page'] = $this->model->selectevent($title,'events');
	$this->load->view('events',$data);


	}





#################################################
	   












}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */