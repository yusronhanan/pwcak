<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
		$this->load->view('answer_view');

		/*$data['main_view'] = 'answer_view';
		$this->load->view('template', $data);*/
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */  