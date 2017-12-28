<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
		$user_id = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
				$data = [
				'main_view'  => 'qna_view',

				'username_id'	=> $username_id,
		 		];
				$this->load->view('template', $data);
	}
	public function detail_discuss()
	{
		$user_id = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
				$data = [
				// 'main_view'  => 'answer_view',
				// 'main_view'  => 'detail_discuss',


				'username_id'	=> $username_id,
		 		];
				$this->load->view('detail_discuss', $data);
	}

}

/* End of file qna.php */
/* Location: ./application/controllers/qna.php */