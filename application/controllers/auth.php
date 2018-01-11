<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
		redirect('');		
	}

	public function login(){
		if ($this->input->post('submit')) {
			
		
	 	$this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

                if ($this->form_validation->run() == TRUE ) {
                    
                    if ($this->auth_model->authentication() == TRUE) {
                        $this->session->set_flashdata('notif_success', 'Anda telah berhasil login, selamat belajar !');
                        redirect('');
                    } else {
                        $this->session->set_flashdata('notif_failed', 'Email atau Password anda tidak valid, coba lagi');
                        redirect('');
                    }
                } else {
                	$this->session->set_flashdata('notif_failed', validation_errors());
                        redirect('');
                }
	}
}
		
		public function admin_auth(){
 		if($this->input->post('submit')==TRUE){

 			$this->form_validation->set_rules('email','Email','required');
 			$this->form_validation->set_rules('password','Password','required');

 			if($this->form_validation->run()==TRUE)
 				if($this->auth_model->authentication_admin() == TRUE){
 					redirect('admin');
 				}else{
 					$this->session->set_flashdata('notif_failed', 'Email atau Password anda tidak valid, coba lagi');
 					redirect('admin_login');
 				}
 			}
 		}

		public function submit_user(){
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('bio','Bio','required');

			if($this->form_validation->run() == TRUE){
				if($this->auth_model->register_user()==TRUE)
				{
					
					$this->session->set_flashdata('notif_success','Anda telah berhasil register, silahkan login!');
					redirect('');
				}else{
					
					$this->session->set_flashdata('notif_failed','Maaf anda gagal register, silahkan coba lagi!');
					redirect('');
				}
			}else{
				$this->session->set_flashdata('notif_failed', validation_errors());
				redirect('');
			}
		}
	}

		
	
	 	public function logout() {
        $this->session->sess_destroy();
        redirect('');
    }


    public function login_admin() {
    	$this->load->view('loginadm_view');

    }

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */