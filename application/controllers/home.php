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
	public function user_profile($usrnm){
		// $usrnm = $username;
		$username = $usrnm;
		$user_id = $this->auth_model->GetUser(['username' => $username])->row('id_user');
		$userid_in = $this->session->userdata('logged_id');
		if (empty($user_id)) {
			// redirect('404'); ke not found
			$this->session->set_flashdata('notif_failed','Maaf, pengguna yang anda cari tidak ditemukan');
			redirect('');
		}
		else{


		$list_courses = '';
		$list_user = '';

		$title = $this->input->get('title');
		$subject = $this->input->get('subject');

		if (empty($title) && empty($subject)) {
		$list_courses = $this->course_model->GLCUserAccount('',$user_id);
		}
		else if (empty($title)) {
			if ($subject == "") {
				$list_courses = $this->course_model->GLCUserAccount("",$user_id);
			}
			else{
				$list_courses = $this->course_model->GLCUserAccount(["subject "=>$subject],$user_id);
			}
		}
		else{
			if ($subject == "") {
				$list_courses = $this->course_model->GLCUserAccount(["title LIKE"=>"%".$title."%"],$user_id);
			}
			else{
				$list_courses = $this->course_model->GLCUserAccount(["title LIKE"=>"%".$title."%", "subject" => $subject],$user_id);
			}
			
		}
		$username = array();
		$like_amount = array();
		$comment_amount = array();
		$liked = array();

		// $list_user = ;
		$subscribed = array();
		$subs_amount = array();

		foreach ($list_courses as $courses) {
			$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
			$like_amount[$courses->id_title] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['id_title' => $courses->id_title,'type_action' => '0'])->row('like_amount');
			$comment_amount[$courses->id_title] = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['id_title' => $courses->id_title,'type_action' => '1'])->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'from_id'=>$userid_in,'type_action'=>'0'],'user_action')->row('id_title');
			}
		}

		if ($this->session->userdata('logged_in') == TRUE) {
			// foreach ($list_user as $user) { tinggal ganti for id => $user->id_user
			$subscribed[] = $this->home_model->GetData(['from_id'=>$userid_in,'for_id'=>$user_id],'user_subscribe')->row('for_id');
			// $subs_amount[$user->id_user] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $user->id_user])->row('subs_amount');
			$subs_amount[$user_id] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $user_id])->row('subs_amount');
		// }
				
		}
		

		
		
		if (!empty($title) || !empty($subject)) {
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'like_amount'	=> $like_amount,
				'comment_amount'=> $comment_amount,
				'liked'			=> $liked,
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
				'subscribed'	=> $subscribed,
				'subs_amount'	=> $subs_amount,
					];
		}
		else{
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'like_amount'	=> $like_amount,
				'comment_amount'=> $comment_amount,
				'liked'			=> $liked,
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
				'subscribed'	=> $subscribed,
				'subs_amount'	=> $subs_amount,
					];
		}
		
		$this->load->view('account_view', $data);
		
	}
}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */