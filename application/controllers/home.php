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
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
						
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
		'username_id'	=> $username_id,
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
	public function thumb_comment(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->home_model->thumb_comment();
			echo $result;
		}
	}
	
	public function subs_up(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->home_model->subs_up();
			echo $result;
			// echo "false";
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
			$result=$this->home_model->notification(); #table user_action
			$result2=$this->home_model->subscribe(); #table user_subscribe
			if (!empty($result) || !empty($result2)) {
				
			if(!empty($result)){
				//loop isi notif
// type action  like title course = 0 , comment title course = 1, like(thumb up) comment = 2, reply comment = 3, dislike thumb down comment 4,
  // 0, 1 - reply_id = null ; 2, 3, 4 reply id depend id_action of comment - reply_id not null;
	
				foreach ($result as $notif) {
					$notification = $this->home_model->GetData(['id_action'=>$notif->id_action],'user_action');

										$random_code = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('random_code');
					if ($notification->row('type_action') == '0') {
						$link = base_url().'lesson/'.$random_code;
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$word = 'like your course ('.$course_title.')';

					}

					else if ($notification->row('type_action') == '1') {
						$link = base_url().'lesson/'.$random_code; #+direct to comment place
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$word = 'give comment on your course ('.$course_title.')';
					}
					else if ($notification->row('type_action') == '2') {
						$link = base_url().'discuss/'.$random_code; #+direct to comment place
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$word = 'like your comment in discussion ('.$course_title.')';
					}
					else if ($notification->row('type_action') == '3') {
						$link = base_url().'discuss/'.$random_code; #+direct to comment place
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$word = 'reply comment on your following discussion ('.$course_title.')';
					}
					else if ($notification->row('type_action') == '4') {
						$link = base_url().'discuss/'.$random_code; #+direct to comment place
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$word = 'dislike your comment in discussion ('.$course_title.')';
					}
				$imguser  = $this->home_model->GetData(['id_user'=>$notification->row('from_id')],'user')->row('photo'); 
				$username = $this->home_model->GetData(['id_user'=>$notification->row('from_id')],'user')->row('username'); 
				
				$timestamp = strtotime($notification->row('created_at'));
				$nowstr = strtotime($now);
					
				$time = timespan($timestamp, $now) . ' ago';

				$output .= '
				 <li><a href="'.$link.'">
		               
		                	<div class="user-new">
		                	<p><img src="'.base_url().'assets/images/'.$imguser.'" style="width: 35px;height: 35px;border-radius: 20px;margin-right: 5px" > @'.$username.' '.$word.$notif->id_notif.'  
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
				
			}
			if(!empty($result2)){
				//loop isi notif
				foreach ($result2 as $notif_subscribe) {

						$link = base_url().$notif_subscribe->from_username; #+direct to user profile
						// $thumbnail = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('thumbnail');
						// $course_title = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('title');
						$word = $notif_subscribe->from_username.' subscribed you';
					
						$imguser  = $this->home_model->GetData(['id_user'=>$notif_subscribe->from_id],'user')->row('photo'); 
						
						$timestamp = strtotime($notif_subscribe->created_at);
						$nowstr = strtotime($now);
							
						$time = timespan($timestamp, $now) . ' ago';

						$output .= '
				 <li><a href="'.$link.'">
		               
		                	<div class="user-new">
		                	<p><img src="'.base_url().'assets/images/'.$imguser.'" style="width: 35px;height: 35px;border-radius: 20px;margin-right: 5px" > @'.$word.'  
		                		<!-- <img src="'.base_url().'assets/images/" style="width: 35px;height: 35px;margin-left: 80px;"> -->
		                		<i style="margin-left: 79px" class="fa fa-user-plus"></i> 
		                	</p> 
		                	<span style="margin-left: 40px">'.$time.'</span>
		                	</div>
		                	<!-- <div class="user-new-left">
		                	<i class="fa fa-user-plus"></i>
		                	</div> -->
		                	<div class="clearfix"> </div>
		                	</a></li>';	

				}
				
			}
			$output .= ' <li><a href="'.base_url().'notif" class="view" style="margin-left: 40px">View all notification</a></li>';
		}
			else{
				$output .= ' <li>Tidak ada notifikasi</li>
				<li><a href="'.base_url().'notif" class="view" style="margin-left: 40px">View all notification</a></li>';;
				}

			$count_action = count($this->home_model->unseen_notification()); #table user_action
			$count_subscribe = count($this->home_model->unseen_subscribe()); #table user_subscribe
			$count = $count_action+$count_subscribe;
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );
			echo $output.'|'.$count;

		}
		else if($mini_notif == 'notification_null'){
				$result	= $this->home_model->nullNotification();#table user_action 
				$result2= $this->home_model->nullNotifSubscribe(); # table user_subscribe
				
					if ($result == TRUE || $result == TRUE) {
						$count = '';
					}
					else{
						$count_action = count($this->home_model->unseen_notification()); #table user_action
						$count_subscribe = count($this->home_model->unseen_subscribe()); #table user_subscribe
						$count = $count_action+$count_subscribe;
					}
			echo $count;
		}

}
	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */