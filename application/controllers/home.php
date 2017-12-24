<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
		$this->load->helper('date');
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
	public function mini_notif(){
		$mini_notif = $this->input->post('mini_notif');
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		if ($mini_notif == 'mini_notif') {
			$output = '';
			$result=$this->home_model->notification();
			if(!empty($result)){
				
				foreach ($result as $notification) {

					if ($notification->type_action == '0') {
						$link = base_url().'course/detail_course/'.$notification->id_title;
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'like your course ('.$course_title.')';

					}

					else if ($notification->type_action == '1') {
						$link = base_url().'course/detail_course/'.$notification->id_title; #+direct to comment place
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'give comment on your course ('.$course_title.')';
					}
				$imguser  = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('photo'); 
				$username = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('username'); 
				
				$timestamp = strtotime($notification->created_at);
				$nowstr = strtotime($now);
					
				$time = timespan($timestamp, $now) . ' ago';

				$output .= '
				 <li><a href="'.$link.'">
		               
		                	<div class="user-new">
		                	<p><img src="'.base_url().'assets/images/'.$imguser.'" style="width: 35px;height: 35px;border-radius: 20px;margin-right: 5px" > @'.$username.' '.$word.'  
		                		<img src="'.base_url().'assets/images/'.$thumbnail.'" style="width: 35px;height: 35px;margin-left: 80px;">
		                		<!-- <i style="margin-left: 79px" class="fa fa-user-plus"></i> -->
		                	</p> 
		                	<span style="margin-left: 40px">'.$time.'</span>
		                	</div>
		                	<!-- <div class="user-new-left">
		                	<i class="fa fa-user-plus"></i>
		                	</div> -->
		                	<div class="clearfix"> </div>
		                	</a></li>';	

				}
				$output .= ' <li><a href="'.base_url().'notif" class="view" style="margin-left: 40px">View all notification</a></li>';
			}
			else{
				$output .= ' <li>Tidak ada notifikasi</li>
				<li><a href="'.base_url().'notif" class="view" style="margin-left: 40px">View all notification</a></li>';;
				}
			$count = count($this->home_model->unseen_notification());
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );
			echo $output.'|'.$count;

		}
		else if($mini_notif == 'notification_null'){
				$result	= $this->home_model->nullNotification();
					if ($result == TRUE) {
						$count = '';
					}
					else{
						$count = count($this->home_model->unseen_notification());
					}
			echo $count;
		}

}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */