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
		$like_amount = array();
		$comment_amount = array();
		$liked = array();
		
		foreach ($list_pcourses as $pcourses) {
			$username[$pcourses->id_user] = $this->auth_model->GetUser(['id_user' => $pcourses->id_user])->row('username');
			$like_amount[$pcourses->id_title] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['id_title' => $pcourses->id_title,'type_action' => '0'])->row('like_amount');
			$comment_amount[$pcourses->id_title] = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['id_title' => $pcourses->id_title,'type_action' => '1'])->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$pcourses->id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action')->row('id_title');
			}
		}
		foreach ($list_rcourses as $rcourses) {
			$username[$rcourses->id_user] = $this->auth_model->GetUser(['id_user' => $rcourses->id_user])->row('username');
			$like_amount[$rcourses->id_title] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['id_title' => $rcourses->id_title,'type_action' => '0'])->row('like_amount');
			$comment_amount[$rcourses->id_title] = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['id_title' => $rcourses->id_title,'type_action' => '1'])->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$rcourses->id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action')->row('id_title');
			}
		}
		
		$data = [
		'username' 		=> $username,
		'like_amount'	=> $like_amount,
		'comment_amount'=> $comment_amount,
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