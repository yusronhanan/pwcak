<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}

	public function index()
	{
		$list_pcourses = $this->home_model->GetListPCourses();
		$list_rcourses = $this->home_model->GetListRCourses();
		$username = array();
		foreach ($list_pcourses as $pcourses) {
			$username[$pcourses->id_user] = $this->auth_model->GetUser(['id_user' => $pcourses->id_user])->row('username');
		}
		foreach ($list_rcourses as $rcourses) {
			$username[$rcourses->id_user] = $this->auth_model->GetUser(['id_user' => $rcourses->id_user])->row('username');
		}

		$data = [
		'username' 		=> $username,
		'list_rcourses' => $list_rcourses,
 		'list_pcourses' => $list_pcourses,
		'main_view'  => 'home_view',
 		];
		$this->load->view('template', $data);
	}
	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */