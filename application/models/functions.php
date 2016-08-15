<?php

class Functions extends CI_Model {
	
	



########################################### function to upload image and update database table


public function uploadupdate($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/blog/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">Thank you, Blog Post Updated Successfully.</div>';}else{ return '<div class="alert alert-danger">Error, please try again later.</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}



########################################### function to update table without updating picture just the data

public function updatenoimage($id,$data,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->update($table,$data);
	if($query){
		
		return '<div class="alert alert-success">Thank you, Blog Post Updated Successfuly.</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error, Please try again later.</div>';
			}

}

	
	
	
	
################################## function to delete image	
	
	

public function delcar($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/cars/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف السيارة بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف السيارة, من فضلك حاول فى وقت لاحق</div>';
			}

}



################################## upload with picture for slider 1


public function uploadupdateslider($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/slider/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}










################################## deletecar for slider 1
public function delcarslider($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/slider/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف السيارة بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف السيارة, من فضلك حاول فى وقت لاحق</div>';
			}

}










################################## upload with picture for slider 2


public function uploadupdatesliderb($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/sliderb/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}










################################## deletecar for slider 2
public function delcarsliderb($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/sliderb/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف السيارة بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف السيارة, من فضلك حاول فى وقت لاحق</div>';
			}

}



##########################################################################

public function remcarfooter($id,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف السيارة بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف السيارة, من فضلك حاول فى وقت لاحق</div>';
			}

}



##########################################################################################

public function visitorcounter($ip){
	
	
	
	$this->db->where('ip',$ip);
	$query = $this->db->get('counter');
	$query = $query->result();
	
	
	if($query){
			
			//do nothing
		
	}else{
		
		$data['ip'] = $ip;
		$data['day'] = date('d');
		$data['month'] = date('m');
		$data['year'] = date('y');
		$this->db->insert('counter',$data);
		
		}
	
}






######################################################################## remove from database directly without any image


public function remove($id,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم الحـــذف بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى الحـــذف, من فضلك حاول فى وقت لاحق</div>';
			}

}




################################################## function to delete slider from home page of qyadat

public function delslider($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/slider/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}






############################# upload and update tap one

public function uploadupdatetap($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/tapone/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}



############################################ delete tap 1

public function deltap1($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/tapone/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}







############################################ delete tap 2

public function deltap2($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/taptwo/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}








############################################ delete tap 3

public function deltap3($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/tapthree/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}






############################################ delete tap 1

public function deltap4($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/tapfour/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}






############################################ delete tap 1

public function delsb($id,$table,$image){
	
	$this->load->helper('url');
	unlink("./uploads/sliderb/".$image);
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">تم حذف المحتوى بنجاح, شكرا لك</div>';
		
		}else{
			
			return '<div class="alert alert-danger">خطأ فى حذف المحتوى, من فضلك حاول فى وقت لاحق</div>';
			}

}






############################# upload and update tap two

public function uploadupdatetaptwo($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/taptwo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}







############################# upload and update tap three

public function uploadupdatetapthree($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/tapthree/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}






############################# upload and update tap four

public function uploadupdatetapfour($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/tapfour/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}







############################# upload and update sliderb

public function uploadupdatesb($id,$table,$data){
		$this->load->helper('string');
		$config['upload_path'] = './uploads/sliderb/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['file_name'] =  random_string('alnum',70);
		
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){ 
		$file = $this->upload->data();
		$data['image'] = $file['file_name'];
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if($query){
			
			 return '<div class="alert alert-success">تم تعديل البيانات بنجاح, شكرا لك</div>';}else{ return '<div class="alert alert-danger">خطأ فى تعديل البيانات, من فضلك حاول مرة اخرى</div>';}
		}else{ $result = $this->upload->display_errors(); return $result;}

	
	}


#############################################################################
public function updatenoimage2($id,$data,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->update($table,$data);
	if($query){
		
		return '<div class="alert alert-success">Thank you, Home page Updated Successfuly.</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error, Please try again later.</div>';
			}

}

	































}
?>