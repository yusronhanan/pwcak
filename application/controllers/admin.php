<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		if($this->session->userdata('role') == 1){
		// $data['user'] = $this->admin_model->get_data_user();
		// // $data['course'] = $this->admin_model->get_data_course();

		$data['main_view'] = 'dashboard';
		$this->load->view('admin_view1',$data);
		}else{
			redirect('home');
		}
	}

	public function get_user(){
		if($this->session->userdata('role') == 1){
		// if($this->session->userdata('admin_login')==TRUE){
			$data['main_view'] = 'user_data';

			$this->load->library('pagination');

		    $config['base_url'] = base_url().'index.php/admin/get_user';
			$config['total_rows'] = $this->admin_model->total_user();
			$config['per_page'] = 3;
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
			$this->load->view('admin_view1',$data);
		// }
		}else{
			redirect('home');
		}
	}

	public function get_course(){
		if($this->session->userdata('role') == 1){
		// if($this->session->userdata('admin_login') == TRUE){
			$data['main_view'] = 'course_data';
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
			$this->load->view('admin_view1',$data);

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
 		// $data=array(
 		// 	'email' => '',
 		//     'role' => FALSE
 		// );
 		$this->session->sess_destroy();
 		redirect('');
 	}

 	// public function detail_user(){
 	// 	if($this->session->userdata('role')==1){
 	// 		$id_detail = $this->uri->segment(3);
 	// 		$data['detail'] = $this->admin_model->get_detail_user($id_detail);
 	// 		$this->load->view('admin_view1',$data);
 	// 	}else{
 	// 		redirect('home');
 	// 	}
 	// }
 

 	public function detUser(){
 		if($this->session->userdata('role')==1){
 		    $data 	= $this->admin_model->get_detail_user();
			echo $data->id_user."|".$data->email."|".$data->username."|".$data->city."|".$data->bio;
		}
		else{
			redirect('home');
		}
	}

	public function detCourse(){
 		if($this->session->userdata('role')==1){
 		    $data = $this->admin_model->get_detail_course();
			echo $data->id_title."|".$data->title."|".$data->subject."|".$data->created_at."|".$data->thumbnail."|".$data->description."|".$data->visitor;
		}
		else{
			$this->session->set_flashdata('failed','Anda telah logout sebelumnya');
			redirect('home');
		}
	}
}



/* End of file admin.php */
/* Location: ./application/controllers/admin.php */