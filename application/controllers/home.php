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
		$this->load->view('templet', $data);
	
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
				foreach ($result as $notif) {
					$notification = $this->home_model->GetData(['id_action'=>$notif->id_action],'user_action')->row();
					if(!empty($notification)){
					$random_code = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('random_code');
					if ($notification->type_action == '0') {
						// $link = base_url().'lesson/'.$random_code;
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'liked your course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-thumb-up subsss"></i>';
					}

					else if ($notification->type_action == '1') {
						// $link = base_url().'lesson/'.$random_code; #+direct to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'commented on your discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif = '<p class="notification-desc">'.$notification->text_comment.'</p>';
					}
					else if ($notification->type_action == '2') {
						// $link = base_url().'discuss/'.$random_code; #liked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'liked your comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-thumb-up subsss"></i>';
					}
					else if ($notification->type_action == '3') {
						// $link = base_url().'discuss/'.$random_code; #reply to comment
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'reply comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif = '<p class="notification-desc">'.$notification->text_comment.'</p>';
					}
					else if ($notification->type_action == '4') {
						// $link = base_url().'discuss/'.$random_code; #disliked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'disliked your comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-thumb-down subsss"></i>';
					}
					else if ($notification->type_action == '5') { #enroll course
						// $link = base_url().'lesson/'.$random_code; 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'enroll your course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-graduation-cap subsss"></i>';
					}

				$imguser  = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('photo'); 
				$username = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('username'); 
				
				$timestamp = strtotime($notification->created_at);
				$nowstr = strtotime($now);
					
				$time = timespan($timestamp, $now) . ' ago';

				$output .= '
				 <li class="notification">
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img src="'.base_url().'assets/images/'.$imguser.'" class="img-circle" alt="Name" width="50px" height="50px">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> '.$word.'  <a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong></strong>
                        '.$desc_notif.'
                        
						
                        <div class="notification-meta">
                          <small class="timestamp">'.$time.'</small>
                        </div>
                      </div>
                    </div>
                </li>';	
				}
				}
			}
			if(!empty($result2)){
				//loop isi notif
				foreach ($result2 as $notif_subscribe) {

						$link = base_url().$notif_subscribe->from_username; #+direct to user profile
						// $thumbnail = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('thumbnail');
						// $course_title = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('title');
						$word = ' subscribed you';
					
						$imguser  = $this->home_model->GetData(['id_user'=>$notif_subscribe->from_id],'user')->row('photo'); 
						
						$timestamp = strtotime($notif_subscribe->created_at);
						$nowstr = strtotime($now);
							
						$time = timespan($timestamp, $now) . ' ago';

						$output .= '
				 <li class="notification">
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img src="'.base_url().'assets/images/'.$imguser.'" class="img-circle" alt="'.$notif_subscribe->from_username.'" width="50px" height="50px">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> '.$word.'  <i style="margin-left: 79px" class="fa fa-user-plus subsss"></i> </strong>
                        

                        <div class="notification-meta">
                          <small class="timestamp">'.$time.'</small>
                        </div>
                      </div>
                    </div>
                </li>
';	

				}
				
			}
			
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
	public function big_notif(){
		$big_notif = $this->input->post('big_notif');
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		if ($big_notif != '') {
			$output = '';
			$result=$this->home_model->notification(); #table user_action
			$result2=$this->home_model->subscribe(); #table user_subscribe
			if (!empty($result) || !empty($result2)) {
				
			if(!empty($result)){
				//loop isi notif
// type action  like title course = 0 , comment title course = 1, like(thumb up) comment = 2, reply comment = 3, dislike thumb down comment 4, 5 enroll course
  // 0, 1 - reply_id = null ; 2, 3, 4, 5 reply id depend id_action of comment - reply_id not null;
	
				foreach ($result as $notif) {

					$notification = $this->home_model->GetData(['id_action'=>$notif->id_action],'user_action')->row();
					if(!empty($notification)){
					$random_code = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('random_code');
					if ($notification->type_action == '0') {
						// $link = base_url().'lesson/'.$random_code;
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'liked your course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
					}

					else if ($notification->type_action == '1') {
						// $link = base_url().'lesson/'.$random_code; #+direct to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'commented on your discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($notification->type_action == '2') {
						// $link = base_url().'discuss/'.$random_code; #liked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'liked your comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($notification->type_action == '3') {
						// $link = base_url().'discuss/'.$random_code; #reply to comment
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'reply comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($notification->type_action == '4') {
						// $link = base_url().'discuss/'.$random_code; #disliked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'disliked your comment on discussion course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($notification->type_action == '5') { #enroll course
						// $link = base_url().'lesson/'.$random_code; 
						$thumbnail = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$notification->id_title],'course_title')->row('title');
						$word = 'enroll your course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
					}
				$imguser  = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('photo'); 
				$username = $this->home_model->GetData(['id_user'=>$notification->from_id],'user')->row('username'); 
				

				$timestamp = strtotime($notification->created_at);
				$nowstr = strtotime($now);
					
				$time = timespan($timestamp, $now) . ' ago';

				if ($notification->type_action == '0') {
					$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                        </div>
                                    </div>';
				}
				else if ($notification->type_action == '1') {
					$output .= ' <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong> <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                            <div class="well">
                                            	<strong>'.$notification->subject.'</strong> <br>
                                                '.$notification->text_comment.'
                                            </div>
                                        </div>
                                    </div>';
				}
				else if ($notification->type_action == '2') {
					$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                        </div>
                                    </div>';
				}
				else if ($notification->type_action == '3') {
					$output .= ' <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong> <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                            <div class="well">
                                            	<strong>'.$notification->subject.'</strong> <br>
                                                '.$notification->text_comment.'
                                            </div>
                                        </div>
                                    </div>';
				}
				else if ($notification->type_action == '4') {
					$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                        </div>
                                    </div>';
				}
				else if ($notification->type_action == '5') {
					$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notification->created_at.'</small>
                                        </div>
                                    </div>';
				}

					
				}
			}
				
			}
			if(!empty($result2)){
				//loop isi notif
				foreach ($result2 as $notif_subscribe) {

						$link = base_url().$notif_subscribe->from_username; #+direct to user profile
						// $thumbnail = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('thumbnail');
						// $course_title = $this->home_model->GetData(['id_title'=>$notif_subscribe->id_title],'course_title')->row('title');
						$word = ' started subscribed ';
					
						$imguser  = $this->home_model->GetData(['id_user'=>$notif_subscribe->from_id],'user')->row('photo'); 
						
						$timestamp = strtotime($notif_subscribe->created_at);
						$nowstr = strtotime($now);
							
						$time = timespan($timestamp, $now) . ' ago';

						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$imguser.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.base_url().$username.'" class="go_link">'.$username.' </a></strong> '.$word.' <strong>you</strong>. <br>
                                            <small class="text-muted">at '.$notif_subscribe->created_at.'</small>
                                        </div>
                                    </div>';	

				}
				
			}
			
		}
			else{
				$output .= '';;
				}

			// $count_action = count($this->home_model->unseen_notification()); #table user_action
			// $count_subscribe = count($this->home_model->unseen_subscribe()); #table user_subscribe
			// $count = $count_action+$count_subscribe;
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );.'|'.$count
			echo $output;

		}
		

}

	public function big_activity(){
		$big_activity = $this->input->post('big_activity');
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		if ($big_activity != '') {
			if ($big_activity == $this->session->userdata('logged_id')) {
				$user = "you";
			}
			else{
				$user = $this->auth_model->GetUser(['id_user' => $big_activity])->row('username');
			}
			$output = '';
			$i=1;
			$result=$this->home_model->GetData(['from_id'=>$big_activity],'user_action')->result(); #table user_action
			$result2=$this->home_model->GetData(['from_id'=>$big_activity],'user_subscribe')->result(); #table user_subscribe
			if (!empty($result) || !empty($result2)) {
				
			if(!empty($result)){
				//loop isi notif
// type action  like title course = 0 , comment title course = 1, like(thumb up) comment = 2, reply comment = 3, dislike thumb down comment 4, 5 enroll course
  // 0, 1 - reply_id = null ; 2, 3, 4, 5 reply id depend id_action of comment - reply_id not null;
		        
				foreach ($result as $activity) {
					$i++;
					$random_code = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('random_code');
					if ($activity->type_action == '0') {
						// $link = base_url().'lesson/'.$random_code;
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'like course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
					}

					else if ($activity->type_action == '1') {
						// $link = base_url().'lesson/'.$random_code; #+direct to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'comment course';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($activity->type_action == '2') {
						// $link = base_url().'discuss/'.$random_code; #liked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'like comment';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($activity->type_action == '3') {
						// $link = base_url().'discuss/'.$random_code; #reply to comment
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'reply comment';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($activity->type_action == '4') {
						// $link = base_url().'discuss/'.$random_code; #disliked to comment 
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'dislike comment';
						$go_word = $course_title;
						$go_link = base_url().'discuss/'.$random_code;
					}
					else if ($activity->type_action == '5') { #enroll course
						// $link = base_url().'lesson/'.$random_code; 
						$thumbnail = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('thumbnail');
						$course_title = $this->home_model->GetData(['id_title'=>$activity->id_title],'course_title')->row('title');
						$word = 'enroll course';
						$go_word = $course_title;
						$go_link = base_url().'lesson/'.$random_code;
					}
				$imguser  = $this->home_model->GetData(['id_user'=>$activity->for_id],'user')->row('photo'); 
				$username = $this->home_model->GetData(['id_user'=>$activity->for_id],'user')->row('username'); 
				

				$timestamp = strtotime($activity->created_at);
				$nowstr = strtotime($now);
					
				$time = timespan($timestamp, $now) . ' ago';
				// <td>
    //                                         <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
    //                                     </td>
					$output .= '<tr>
								<td>'.$i.'</td> <td>'.$user.' '.$word.' <a href="'.$go_link.'" class="go_link">'.$go_word.'</a></td> <td>'.$activity->created_at.'</td> <td></td>
								</tr>';
				

					
				}
				
			}
			if(!empty($result2)){
				
				foreach ($result2 as $action_subscribe) {
$i++;
						$link = base_url().$action_subscribe->for_username; #+direct to user profile
						// $thumbnail = $this->home_model->GetData(['id_title'=>$action_subscribe->id_title],'course_title')->row('thumbnail');
						// $course_title = $this->home_model->GetData(['id_title'=>$action_subscribe->id_title],'course_title')->row('title');
						$word = 'subscribed';
					
						$imguser  = $this->home_model->GetData(['id_user'=>$action_subscribe->for_id],'user')->row('photo'); 
						
						$timestamp = strtotime($action_subscribe->created_at);
						$nowstr = strtotime($now);
							
						$time = timespan($timestamp, $now) . ' ago';
						$output .= '<tr>
								<td>'.$i.'</td> <td>'.$user.' '.$word.' <a href="'.$link .'" class="go_link">'.$action_subscribe->for_username.'</a></td> <td>'.$action_subscribe->created_at.'</td> <td></td>
								</tr>';
						
				}
				
			}
			
		}
			else{
				$output .= '';;
				}

			// $count_action = count($this->home_model->unseen_notification()); #table user_action
			// $count_subscribe = count($this->home_model->unseen_subscribe()); #table user_subscribe
			// $count = $count_action+$count_subscribe;
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );.'|'.$count
			echo $output;

		}
		

}
	
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */