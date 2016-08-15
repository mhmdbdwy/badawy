<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
       {
            parent::__construct();
           
		   $this->load->library('session');
   if(!$this->session->userdata('logged_in')){
		    header('location: '.base_url().'admin/login/');
		   }
		  $this->model->no_cache();  
      }
	
	
	
############################################   
	public function index()
	{

	$error = '';
$man = '';
$pic = '';

	$this->load->helper('form');
	
	if($this->input->post('submit')){
	
	$this->load->model('functions');
	
	$data['title'] = $this->input->post('title');
	$data['jamie'] = $this->input->post('jamie');
	$data['details'] = $this->input->post('details');
	$data['keywords'] = $this->input->post('keywords');
	$data['facebook'] = $this->input->post('facebook');
	$data['twitter'] = $this->input->post('twitter');
	$data['google'] = $this->input->post('google');
	
	
		
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('jamie','About jamie','required');
		$this->form_validation->set_rules('details','details','required');
		$this->form_validation->set_rules('keywords','keywords','required');
		$this->form_validation->set_rules('facebook','facebook','required');
		$this->form_validation->set_rules('twitter','twitter','required');
		$this->form_validation->set_rules('google','google','required');
		
		if($this->form_validation->run()){ $man = $this->functions->updatenoimage2(1,$data,'home'); } else{ $error = validation_errors();}


}

	
	
	
	
	

$data['error'] = $error;
$data['man'] = $man;

		$data['contact'] = $this->model->selectdb(1,'home');
		$this->load->view('admin/home',$data);
}
	

	
#################### Contact us
	

public function contact()
	{
	$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->updatedb(1,$data,'contact')){
		$result = '<div class="alert alert-success">Thank You, Page Has been Updated Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Updating data</div>'; }
			
			
			}		
				
	}
	
	$data['pagename'] = "contact";
	$data['result'] = $result;
	$data['contact'] = $this->model->selectdb(1,'contact');
	$this->load->view('admin/page',$data);
		
		
		}
	
	
	
	
#################### why jamie
	

public function whyjamie()
	{
		
		$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->updatedb(1,$data,'whyjamie')){
		$result = '<div class="alert alert-success">Thank You, Page Has been Updated Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Updating data</div>'; }
			
			
			}		
				
	}
	
	$data['pagename'] = "whyjamie";
	$data['result'] = $result;
	$data['contact'] = $this->model->selectdb(1,'whyjamie');
	
	$this->load->view('admin/page',$data);
		
		
		}
	
	
#################### affiliate 
	

public function magazine()
	{
		
		$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->updatedb(1,$data,'magazine')){
		$result = '<div class="alert alert-success">Thank You, Page Has been Updated Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Updating data</div>'; }
			
			
			}		
				
	}
	
	$data['pagename'] = "magazine";
	$data['result'] = $result;
	$data['contact'] = $this->model->selectdb(1,'magazine');
	
	
	$this->load->view('admin/page',$data);
		
		
		}	
	
	
	
#################### coaching 
	

public function coaching()
	{
		
		
		$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->updatedb(1,$data,'coaching')){
		$result = '<div class="alert alert-success">Thank You, Page Has been Updated Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Updating data</div>'; }
			
			
			}		
				
	}
	
	$data['pagename'] = "coaching";
	$data['result'] = $result;
	$data['contact'] = $this->model->selectdb(1,'coaching');
	
	
	$this->load->view('admin/page',$data);
		
		
		}	
	
	
#################### nextevent 
	

public function nextevent()
	{
		
		
			
		$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->updatedb(1,$data,'nextevent')){
		$result = '<div class="alert alert-success">Thank You, Page Has been Updated Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Updating data</div>'; }
			
			
			}		
				
	}
	
	$data['pagename'] = "nextevent";
	$data['result'] = $result;
	$data['contact'] = $this->model->selectdb(1,'nextevent');
	
	$this->load->view('admin/page',$data);
		
		
		}	
		
	
	
	
#################### Add photo gallery of homepage 
public function photogallery()
	{
		
		
	$this->load->helper('form');
	$result = '';
	$mark = '';	
	
	if($this->input->post('submit')){
		$this->load->helper('string');
		$this->load->library('form_validation');
				
				
		$data['title'] = $this->input->post('title');
		$this->form_validation->set_rules('image','Photo','upload_no_file_selected');
		$this->form_validation->set_rules('title','Title','required');
		
		
		
		$config['upload_path'] = './uploads/homegallery/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['file_name'] =  random_string('alnum',70);
		
		$this->load->library('upload', $config);
		if(!$this->form_validation->run()){
			$result = validation_errors();
			//excute function insert
			
			}elseif( !$this->upload->do_upload('image')){ 
			 
			$result = $this->upload->display_errors();
			
			}else{
				$file = $this->upload->data();
				$data['image'] = $file['file_name'];
				
				
				if($this->model->insertdb($data,'homegallery')){ $result = '<div class="alert alert-success">Photo has been added successfully, please check Home Page.</div>';}else{ $result = '<div class="alert alert-danger">Error in Adding Photo to the Home Page Gallery</div>';}
				
				}
		
		}

$m['result'] = $result; 
$m['mark'] = $this->model->selectall('homegallery');
$this->load->view('admin/addphoto',$m);

}	


	
	
	
#################### Newsletter 
	

public function newsletter()
	{
	
	
$mark = '';	
	
$data['mark'] = $this->model->selectall('newsletter');
	$this->load->view('admin/newsletter',$data);
		
		
		}	
	
	
############################# remove photo
public function removeimage($id)
	{
		
	$error = '';
	
	$this->load->model('small');	
	if($error = $this->small->delphoto($id,'homegallery')){
	
	$data['error'] = $error;
echo '<meta http-equiv="refresh" content="3;url='.base_url().'admin/home/photogallery/"> ';
	}
	
	
$this->load->view('admin/remove',$data);

	}

############################################# Add Event
public function addevent()
	{
		
		
		$result = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$data['title'] = $this->input->post('title');
		$data['details'] = $this->input->post('details');
		$data['keywords'] = $this->input->post('keywords');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('details','Details','required');
		$this->form_validation->set_rules('keywords','Keywords','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if(!$this->form_validation->run()){
		
		$result = validation_errors();
		
		}else{
			
			if($this->model->insertdb($data,'events')){
		$result = '<div class="alert alert-success">Thank You, Event Has been Added Successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error, in Adding data</div>'; }
			
			
			}		
				
	}
	

	$data['result'] = $result;
	$this->load->view('admin/addevent',$data);
		
		
		}		
	
############################################################# event manager
public function eventmanager()
	{
	
		
	$data['events'] = $this->model->selectall('events');
	$this->load->view('admin/events',$data);
	}		
	
#################################################### rem event
	public function remevent($id){


	$error = '';
	
		
	if($error = $this->model->eventremove($id,'events')){
	
	$data['error'] = $error;
echo '<meta http-equiv="refresh" content="3;url='.base_url().'admin/home/eventmanager/"> ';
	}
	
$this->load->view('admin/remove',$data);



}

#################################################################### Editevent
   
	public function editevent($id)
	{
		$this->load->helper('form');
		
		

$error = '';
$data['id'] = $id;

if($this->input->post('submit')){
	
	$data['title'] = $this->input->post('title');
	$data['details'] = $this->input->post('details');
	$data['content'] = $this->input->post('content');
	$data['keywords'] = $this->input->post('keywords');
	
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('details','Description','required');
		$this->form_validation->set_rules('keywords','Keywords','required');
		$this->form_validation->set_rules('content','Content','required');
		
		if($this->form_validation->run()){ $error = $this->model->updateevents($id,$data,'events'); } else{ $error = validation_errors();}

}



$data['error'] = $error;
$data['event'] = $this->model->selectdb($id,'events');
$this->load->view('admin/editevent',$data);


	}





##############################################Add blog post
public function addblog()
	{
		
		
		$result = '';
		$error = '';
	$this->load->helper('form');
	if($this->input->post('submit')){
		$this->load->library('form_validation');
		$this->load->helper('string');
		
		$data['title'] = $this->input->post('title');
		$data['details'] = $this->input->post('details');
		$data['keywords'] = $this->input->post('keywords');
		$data['author'] = $this->input->post('author');
		$data['thedate'] = $this->input->post('thedate');
		$data['content'] = $this->input->post('content');
		
		$this->form_validation->set_rules('image','The Featured Image','upload_no_file_selected');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('details','Details','required');
		$this->form_validation->set_rules('keywords','Keywords','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('thedate','Date of Blog Post','required');
		$this->form_validation->set_rules('content','Content','required');
		
		$config['upload_path'] = './uploads/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
		$this->load->library('upload', $config);
		if(!$this->form_validation->run()){
			$result = validation_errors();
			//excute function insert
			
			}elseif( !$this->upload->do_upload('image')){ 
			 
			$error = $this->upload->display_errors();
			
			}else{
				$file = $this->upload->data();
				$data['image'] = $file['file_name'];
				
				
				if($this->model->insertdb($data,'blog')){
					$result = '<div class="alert alert-success">Thank You, Blog Post have been Added.</div>';
					echo '<meta http-equiv="refresh" content="3;url='.base_url().'admin/home/blogmanager"> ';

				}else{ 
				$result = '<div class="alert alert-danger">Error in adding Post, Please try again later.</div>';}
				
				}
			  
	}

$data['error'] = $error;
$data['result'] = $result; 
$this->load->view('admin/addblog',$data);
	}	
	

###################################### blog manager

public function blogmanager()
	{
	
		
	$data['blog'] = $this->model->selectall('blog');
	$this->load->view('admin/blog',$data);
	}		
	

################################### remove blog post

	public function remblog($id){


	$error = '';
	
		
	if($error = $this->model->removeblog($id,'blog')){
	
	$data['error'] = $error;
echo '<meta http-equiv="refresh" content="3;url='.base_url().'admin/home/blogmanager/"> ';
	}
	
$this->load->view('admin/remove',$data);



}

################################################## edit blog
	public function editblog($id)
	{
	$result = '';
	$error = '';
$man = '';
$pic = '';
$data['id']= $id;

	$this->load->helper('form');
	
	if($this->input->post('submit')){
	
	$this->load->model('functions');
	
	$data['title'] = $this->input->post('title');
	$data['author'] = $this->input->post('author');
	$data['details'] = $this->input->post('details');
	$data['keywords'] = $this->input->post('keywords');
	$data['content'] = $this->input->post('content');
	$data['thedate'] = $this->input->post('thedate');
	
	$old = $this->input->post('old');
		
	if($_FILES['image']['size'] != 0 && is_uploaded_file($_FILES['image']['tmp_name'])){
		
		$data['image'] = $this->input->post('image');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('details','Description','required');
		$this->form_validation->set_rules('keywords','keywords','required');
		$this->form_validation->set_rules('content','Content','required');
		$this->form_validation->set_rules('thedate','Publish Date','required');
		
		if($this->form_validation->run()){
			
			$pic = $this->functions->uploadupdate($id,'blog',$data);
			$this->load->helper("url");
			unlink("./uploads/blog/".$old);
			
		}else{ $error = validation_errors(); }
		
}else{	

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('author','Author','required');
		$this->form_validation->set_rules('details','Description','required');
		$this->form_validation->set_rules('keywords','keywords','required');
		$this->form_validation->set_rules('content','Content','required');
		$this->form_validation->set_rules('thedate','Publish Date','required');
		
		if($this->form_validation->run()){ $man = $this->functions->updatenoimage($id,$data,'blog'); } else{ $error = validation_errors();}

}


}

	
	
	
	
	
$data['pic'] = $pic;
$data['error'] = $error;
$data['man'] = $man;
		$data['result'] = $result;
		$data['blog'] = $this->model->selectdb($id,'blog');
		$this->load->view('admin/editblog',$data);
}
	
	
#####################################################

public function config()
	{
	
	$result = '';
	$this->load->helper('form');
	
		if($this->input->post('submit')){
		
		
	$data['username'] = $this->input->post('username');
	$data['password'] = $this->input->post('password');
	
	if($this->input->post('password')){
		
	$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|xss_clean');
		$this->form_validation->set_rules('password','Password','required|trim|xss_clean');
	
	if($this->form_validation->run())
			{
	$data['password'] = $this->model->hashpassword($this->input->post('password')) ;
	if($this->model->updatedb(1,$data,'admin')){
	$result = '<div class="alert alert-success">Data is updated successfully.</div>';
		}else{ $result = '<div class="alert alert-danger">Error in updating data.</div>'; }
				
		}
		else{ $result = validation_errors(); }
		
	}else{
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|xss_clean');
		
	
	if($this->form_validation->run())
		
		{
	
	if($this->Model->updatedb(1,$data,'admin')){
	$result = '<div class="alert alert-success">Data updated successfully</div>';
		}else{ $result = '<div class="alert alert-danger">error in updating data.</div>'; }
				
		}
		else{ $result = validation_errors(); }
		
	}
	
	
	}
		

	$data['result'] = $result;
	
	$this->load->view('admin/admin',$data);

	}



#####################################################














	
	
	
	
	
	
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */