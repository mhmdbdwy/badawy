<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coaching extends CI_Controller {

	
	
	
	   
	public function index()
	{
	
	

	
	
	$data['events'] = $this->model->eventmenu('events');
	$data['manage'] = $this->model->selectdb('1','home');
	$data['page'] = $this->model->selectdb('1','coaching');
	$this->load->view('coaching',$data);


	}





#################################################
	   












}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */