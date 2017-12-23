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
		$user_id = $this->session->userdata('logged_id');
		$username = array();
		foreach ($list_pcourses as $pcourses) {
			$username[$pcourses->id_user] = $this->auth_model->GetUser(['id_user' => $pcourses->id_user])->row('username');
		}
		foreach ($list_rcourses as $rcourses) {
			$username[$rcourses->id_user] = $this->auth_model->GetUser(['id_user' => $rcourses->id_user])->row('username');
		}
		$like_amount = array();
		$liked = array();
		foreach ($list_pcourses as $pcourses) {
			$like_amount[$pcourses->id_title] = $this->home_model->GetLikeAmount(['id_title' => $pcourses->id_title])->row('like_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$pcourses->id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action')->row('id_title');
			}
			
		}
		foreach ($list_rcourses as $rcourses) {
			$like_amount[$rcourses->id_title] = $this->home_model->GetLikeAmount(['id_title' => $rcourses->id_title])->row('like_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$rcourses->id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action')->row('id_title');
			}
		}
		$data = [
		'username' 		=> $username,
		'like_amount'	=> $like_amount,
		'liked'			=> $liked,
		'list_rcourses' => $list_rcourses,
 		'list_pcourses' => $list_pcourses,
		'main_view'     => 'home_view',
 		];
		$this->load->view('template', $data);
	}

	public function thumb_up(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->home_model->thumb_up();
			echo $result;
		}
		// else{
			// echo "NOT_LOGIN";
		// }
	}
	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */