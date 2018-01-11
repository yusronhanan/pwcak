<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('course_model');
		$this->load->model('home_model');

	}

	public function index()
	{
		if($this->session->userdata('role') == 1){
		$id_user = $this->session->userdata('logged_id');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		$data['main_view'] = 'dashboard1';
		$this->load->view('tempadmin',$data);
		}else{
			redirect('home');
		}
	}
	public function admin_login()
	{
		$this->load->view('loginadm_view');
		
	}

	public function get_user(){
		if($this->session->userdata('role') == 1){
		// if($this->session->userdata('admin_login')==TRUE){
			$id_user = $this->session->userdata('logged_id');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
			$data['main_view'] = 'datauser_view';

			$this->load->library('pagination');

		    $config['base_url'] = base_url().'index.php/admin/get_user';
			$config['total_rows'] = $this->admin_model->total_user();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$mulai = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_user($config['per_page'],$mulai);

			$data['user'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['mulai'] = $mulai;
			$this->load->view('tempadmin',$data);
		// }
		}else{
			redirect('home');
		}
	}

	public function get_course(){
		if($this->session->userdata('role') == 1){
		// if($this->session->userdata('admin_login') == TRUE){
			$id_user = $this->session->userdata('logged_id');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
			$data['main_view'] = 'datacourse_view';
			$this->load->library('pagination');

		    $config['base_url'] = base_url().'index.php/admin/get_course';
			$config['total_rows'] = $this->admin_model->total();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_course($config['per_page'],$start);

			$data['course'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			$this->load->view('tempadmin',$data);

		// }
		}else{
			redirect('home');
		}
	}

	public function user_delete(){
		if($this->session->userdata('role') == 1){
		$id_user=$this->uri->segment(3);
 		if($this->admin_model->delete_user($id_user)==TRUE){
 				redirect('admin/get_user');
 		}else{
 				redirect('admin');
 		}
 	}else{
			redirect('home');
		}
}

	public function course_delete(){
		if($this->session->userdata('role') == 1){
		$id_title=$this->uri->segment(3);
 		if($this->admin_model->delete_course($id_title)==TRUE){
 				redirect('admin/get_course');
 		}else{
 				redirect('admin');
 		}
 	}else{
			redirect('home');
		}
 }

 	public function logout_admin(){
 		$this->session->sess_destroy();
 		redirect('admin_login');
 	}

 	public function detUser(){
 		if($this->session->userdata('role')==1){
 		    $data 	= $this->admin_model->get_detail_user();
			echo $data->id_user."|".$data->email."|".$data->username."|".$data->city."|".$data->bio."|".$data->name."|".$data->photo."|".$data->role;
		}
		else{
			redirect('admin_login');
		}
	}

	public function detCourse(){
 		if($this->session->userdata('role')==1){
 		    $data = $this->admin_model->get_detail_course();
			echo $data->id_title."|".$data->title."|".$data->subject."|".$data->created_at."|".$data->thumbnail."|".$data->description."|".$data->visitor."|".$data->random_code;
		}
		else{
			$this->session->set_flashdata('notif_failed','Anda telah logout sebelumnya');
			redirect('home');
		}
	}

	public function updateUser(){
		if($this->session->userdata('role')==1){

			$result = $this->admin_model->update_user();
			if($result == 'TRUE'){
			$data = $this->admin_model->GetData(array("id_user"=>$this->input->post('id')),'user');
			echo $data->id_user."|".$data->email."|".$data->username."|".$data->city."|".$data->bio."|".$data->role;
		    }else{
		    	echo 'FALSE';
		    }
		}else{
			redirect('home');
		}
	}

	public function edit_pick(){
		if($this->session->userdata('role')==1){
			// $unedit = 
			$result = $this->admin_model->editpick();
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}

	public function broadcast()
	{ if($this->session->userdata('role')==1){
		$id_user = $this->session->userdata('logged_id');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		$data['main_view'] = 'broadcast_view';
		$this->load->view('tempadmin',$data);
		}
	}

	public function delete_user(){
		if($this->session->userdata('role')==1){
			$id_user = $this->input->post('id_user');
			$comment = $this->admin_model->Delete(['id_user'=>$id_user],'comment');
			$notif = $this->admin_model->Delete(['id_user'=>$id_user],'notification');
			$subscribe = $this->admin_model->Delete(['id_user'=>$id_user],'subscribe');
			$like_course = $this->admin_model->Delete(['id_user'=>$id_user],'like_course');
			$like_comment = $this->admin_model->Delete(['id_user'=>$id_user],'like_comment');
			$enroll = $this->admin_model->Delete(['id_user'=>$id_user],'enroll_course');
			$course_title = $this->admin_model->Delete(['id_user'=>$id_user],'course_title');
			$content = $this->admin_model->Delete(['id_user'=>$id_user],'course_content');
			$broadcast = $this->admin_model->Delete(['id_user'=>$id_user],'broadcast');
			$result = $this->admin_model->Delete(['id_user'=>$id_user],'user');

			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function delete_course(){
		if($this->session->userdata('role')==1){
			$id_title = $this->input->post('id_title');
			$comment = $this->admin_model->Delete(['id_title'=>$id_title],'comment');
			$like_course = $this->admin_model->Delete(['id_title'=>$id_title],'like_course');
			$like_comment = $this->admin_model->Delete(['id_title'=>$id_title],'like_comment');
			$enroll = $this->admin_model->Delete(['id_title'=>$id_title],'enroll_course');
			$content = $this->admin_model->Delete(['id_title'=>$id_title],'course_content');
			$result = $this->admin_model->Delete(['id_title'=>$id_title],'course_title');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	
	public function banned_user(){
		if($this->session->userdata('role')==1){
			$id_user = $this->input->post('id_user');
			$status = $this->input->post('status');
			if ($status == 'fa fa-times') {
				$banned = '1';
			}
			else{
				$banned = '0';	
			}
			$result = $this->admin_model->Update(['id_user'=>$id_user],['status'=>$banned],'user');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function banned_course(){
		if($this->session->userdata('role')==1){
			$id_title = $this->input->post('id_title');
			$status = $this->input->post('status');
			if ($status == 'fa fa-times') {
				$banned = '2';
			}
			else{
				$banned = '1';	
			}
			$result = $this->admin_model->Update(['id_title'=>$id_title],['status'=>$banned],'course_title');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
}



/* End of file admin.php */
/* Location: ./application/controllers/admin.php */