<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			
		$data = [
			'list_subject'		=> $this->course_model->GetSubject(),
		];
		$this->load->view('account_view', $data);
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('home');
		}	
	}
	public function coba(){
		$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('myaccount');
	}
	
	public function add_course(){
		if ($this->session->userdata('logged_in') == TRUE) {
		$id_user = $this->session->userdata('logged_id');
		$id_title = $this->uri->segment(3);
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
		$id_usermaker = $getcourse->row('id_user');
		if ($id_user == $id_usermaker) {
		$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');
		$data = [
			'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title,
			
			// 'list_subject'		=> $this->course_model->GetSubject(),

		];
		$this->load->view('add_course_view',$data);
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda bukan course maker dari course ini.');
			redirect('myaccount');
		}
		
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('home');
		}
		
	}
	public function submit_content(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('id_title', 'ID Title', 'trim|required');
			$this->form_validation->set_rules('step_title', 'Step Title', 'required');
			$this->form_validation->set_rules('step_number','Step Number','trim|required');
			$this->form_validation->set_rules('content','Content','required');

			if($this->form_validation->run() == TRUE){
				if($this->course_model->add_course_content() == TRUE){
					$this->session->set_flashdata('notif_success','Anda sukses menambah step baru');
					redirect('myaccount');
				}else if($this->course_model->add_course_content() == FALSE) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('myaccount');
				}
				else{
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('home');
				}
			}
			else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('myaccount/add_course/'.$this->input->post('id_title'));
			}
	}
}
	public function newcourse_title(){

		if($this->input->post('submit')){

			$this->form_validation->set_rules('coursename', 'Course Name', 'required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			$this->form_validation->set_rules('description','Description','required');

			if($this->form_validation->run() == TRUE){
				 $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']  = '2000';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('thumbnail')){

                // $this->upload->data()  
				
				if($this->course_model->add_course_title($this->upload->data()) == TRUE){
					$this->session->set_flashdata('notif_success','Anda sukses menambah course baru');
					redirect('myaccount/add_course/');
				}else if($this->course_model->add_course_title($this->upload->data()) == FALSE) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('myaccount');
				}
				else{
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('home');
				}
			
			}  
			else{
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('myaccount');
                }
		}else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('myaccount');

			}
		}

		}
	}

	

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */