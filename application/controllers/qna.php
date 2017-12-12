<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qna extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
				$data = [
				'main_view'  => 'qna_view',
		 		];
				$this->load->view('template', $data);
	}

}

/* End of file qna.php */
/* Location: ./application/controllers/qna.php */