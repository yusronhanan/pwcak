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
		$slider = $this->home_model->GetData(['type'=>'slide'],'config')->result();
		$testimonial =$this->home_model->GetData(['type'=>'testimoni'],'config')->result();
		$list_pcourses = $this->home_model->GetListPCourses();
		// $list_rcourses = $this->home_model->GetListRCourses();
		$list_vcourses=$this->home_model->GetCourseVerified();
		$user_id = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
		
		$username = array();
		$like_amount = array();
		$comment_amount = array();
		$liked = array();
		
		foreach ($list_pcourses as $pcourses) {
			$username[$pcourses->id_user] = $this->auth_model->GetUser(['id_user' => $pcourses->id_user])->row('username');
			$like_amount[$pcourses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $pcourses->id_title],'like_course')->row('like_amount');
			$comment_amount[$pcourses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $pcourses->id_title],'comment')->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$pcourses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
			}
		}
		foreach ($list_vcourses as $rcourses) {
			$username[$rcourses->id_user] = $this->auth_model->GetUser(['id_user' => $rcourses->id_user])->row('username');
			$like_amount[$rcourses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $rcourses->id_title],'like_course')->row('like_amount');
			$comment_amount[$rcourses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $rcourses->id_title],'comment')->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$rcourses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
			}
		}
		
		$data = [
		'username' 		=> $username,
		'like_amount'	=> $like_amount,
		'comment_amount'=> $comment_amount,
		'liked'			=> $liked,
		'list_vcourses' => $list_vcourses,
 		'list_pcourses' => $list_pcourses,
		'main_view'     => 'home_view',
		'username_id'	=> $username_id,

		'slider'		=> $slider,
		'testimonial'		=> $testimonial
 		];
		$this->load->view('templet', $data);
	
}

	public function thumb_up(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->home_model->thumb_up();
			echo $result;
		}
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
		}
	}
	public function mini_notif(){
		$mini_notif = $this->input->post('mini_notif');
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		if ($mini_notif == 'mini_notif') {
			$output = '';
			$i= 0;
			$result=$this->home_model->notification();
			if (!empty($result)) {
				
				foreach ($result as $notif) {
					$tipe = $notif->type;
					if ($tipe == 'like_course') { $field_id = 'id_likecourse';}
					else if ($tipe == 'like_comment') { $field_id = 'id_likecomment';}
					else if ($tipe == 'comment') { $field_id = 'id_comment';}
					else if ($tipe == 'subscribe') { $field_id = 'id_subscribe';}
					else if ($tipe == 'enroll_course') { $field_id = 'id_enroll';}
					else if ($tipe == 'broadcast') { $field_id = 'id_broadcast';}

					else if ($tipe == 'course_title') { $field_id = 'id_title';}

					$notification = $this->home_model->GetData([$field_id=>$notif->get_id],$tipe);
					
						
					if ($notification->num_rows() >0) {
						if ($notif->status == '0') {
							$i++;
						}
					if ($tipe != 'subscribe' || $tipe != 'broadcast') {
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$go_word = $course_title;
						$random_code = $this->course_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('random_code');
					}
					else if($tipe == 'course_title'){
						$go_word = $notification->title;
						$random_code = $notification->random_code;
					}

					if ($tipe == 'like_course') { 
						$word = 'liked your course';
						$go_link = base_url().'lesson/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-thumb-up subsss"></i>';
					}
					else if ($tipe == 'like_comment') { 
						if ($notification->row('type') == '2') {
							$word = 'liked your comment on discussion course';
						}
						else{
							$word = 'disliked your comment on discussion course';
						}
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-thumb-up subsss"></i>';
					}
					else if ($tipe == 'comment') { 
						if ($notification->row('reply_id') == '0') {
							$word = 'commented on your discussion course';
						}
						else{
							$word = 'reply comment on discussion course';
						}
						$go_link = base_url().'discuss/'.$random_code;
						$desc_notif = '<p class="notification-desc">'.substr($notification->row('text_comment'),0,80).'...</p>';
					}
					else if ($tipe == 'subscribe') { 
						$go_link = '#';
						$go_word = '';
						$word = ' subscribed you';
						$desc_notif = '<i style="margin-left: 79px" class="fa fa-user-plus subsss"></i>';
					}
					else if ($tipe == 'enroll_course') { 
						$word = 'enroll your course';
						$go_link = base_url().'lesson/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-graduation-cap subsss"></i>';
					}
					else if ($tipe == 'course_title') { 
						$word = 'publish new course';
						$go_link = base_url().'lesson/'.$random_code;
						$desc_notif ='<i style="margin-left: 79px" class="fa fa-graduation-cap subsss"></i>';
					}
					else if ($tipe == 'broadcast') { 
						$word = '<strong><i style="margin-left: 79px" class="fa fa-bullhorn subsss"></i></strong>';
						if ($notification->row('link') != NULL) {
							$go_word = 'GO HERE';
						}
						else{
							$go_word ='';
						}
						
						$go_link = $notification->row('link');
						$desc_notif = '<p class="notification-desc">'.$notification->row('text').'</p>';
					}
				if ($tipe != 'broadcast') {
				$img  = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('photo');
				$username = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('username'); 
				$username_link = base_url().$username;
				}
				else if ($tipe == 'course_title') {
				$img  = $notification->thumbnail;
				$username = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('username'); 
				$username_link = base_url().$username;
				}
				else {
				$img  = $notification->row('thumbnail');
				$username = 'T-Learning';
				$username_link = base_url();
				}
				// $timestamp = strtotime($notification->row('created_at'));
				$timestamp = strtotime($notif->created_at);		
				$time = timespan($timestamp, $now) . ' ago';

				if ($notif->status == '0') {
				$type = 'style="background-color:#dee5e0"';
				}
				else{
				$type ='';
				}

				
				$output .= '
				 <li class="notification" '.$type.'>
                    <div class="media">
                      <div class="media-left">
                        <div class="media-object">
                          <img src="'.base_url().'assets/images/'.$img.'" class="img-circle" alt="'.$tipe.'" width="50px" height="50px">
                        </div>
                      </div>
                      <div class="media-body">
                        <strong class="notification-title"><a href="'.$username_link.'" class="go_link">'.$username.'</a> '.$word.'  <a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong></strong>
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
			else{
				$output .= '<img src="'.base_url().'assets/images/Asset 33.png" alt="" width="100px" style="display: block;margin: 0 auto;" />';;
				// <li>Tidak ada notifikasi</li>
				// <li><a href="'.base_url().'notif" class="view" style="margin-left: 40px">View all notification</a></li>
				}
			// $count = count($this->home_model->unseen_notification());
						$count = $i; 	
			
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
	public function big_notif(){
		$big_notif = $this->input->post('big_notif');
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		if ($big_notif != '') {
			$output = '';
			
			$result=$this->home_model->notification(); #table user_action
				
			if(!empty($result)){
				foreach ($result as $notif) {
					$tipe = $notif->type;
					if ($tipe == 'like_course') { $field_id = 'id_likecourse';}
					else if ($tipe == 'like_comment') { $field_id = 'id_likecomment';}
					else if ($tipe == 'comment') { $field_id = 'id_comment';}
					else if ($tipe == 'subscribe') { $field_id = 'id_subscribe';}
					else if ($tipe == 'enroll_course') { $field_id = 'id_enroll';}
					else if ($tipe == 'broadcast') { $field_id = 'id_broadcast';}

					else if ($tipe == 'course_title') { $field_id = 'id_title';}
					$notification = $this->home_model->GetData([$field_id=>$notif->get_id],$tipe);
					if ($notification->num_rows() >0) {
					if ($tipe != 'subscribe' || $tipe != 'broadcast') {
						$course_title = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('title');
						$go_word = $course_title;
						$random_code = $this->home_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('random_code');
					}
					else if($tipe == 'course_title'){
						$go_word = $notification->title;
						$random_code = $notification->random_code;
					}

					if ($tipe == 'like_course') { 
						$word = 'liked your course';
						$go_link = base_url().'lesson/'.$random_code;
						
					}
					else if ($tipe == 'like_comment') { 
						if ($notification->row('type') == '2') {
							$word = 'liked your comment on discussion course';
						}
						else{
							$word = 'disliked your comment on discussion course';
						}
						$go_link = base_url().'discuss/'.$random_code;
						
					}
					else if ($tipe == 'comment') { 
						if ($notification->row('reply_id') == '0') {
							$word = 'commented on your discussion course';
						}
						else{
							$word = 'reply comment on discussion course';
						}
						$go_link = base_url().'discuss/'.$random_code;
						
					}
					else if ($tipe == 'subscribe') { 
						$go_link = '#';
						$go_word = 'see your subscriber profile.';
						$word = ' subscribed';
						
					}
					else if ($tipe == 'enroll_course') { 
						$word = 'enroll your course';
						$go_link = base_url().'lesson/'.$random_code;
						
					}
					else if ($tipe == 'course_title') { 
						$word = 'publish new course';
						$go_link = base_url().'lesson/'.$random_code;
						
					}
					else if ($tipe == 'broadcast') { 
						$go_word = '';
						$word = '<strong>'.$notification->row('subject').'</strong> '.$notification->row('text');
						$go_link = $notification->row('link');
						
					}
				if ($tipe != 'broadcast') {
				$img  = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('photo');	
				$username = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('username'); 
				$username_link = base_url().$username;


				$random_code = $this->course_model->GetData(['id_title'=>$notification->row('id_title')],'course_title')->row('random_code');
				}
				else if ($tipe == 'course_title') {
				$img  = $notification->thumbnail;
				$username = $this->home_model->GetData(['id_user'=>$notification->row('id_user')],'user')->row('username'); 
				$username_link = base_url().$username;
				}
				else {
				$img  = $notification->row('thumbnail');
				$username = 'T-Learning';
				$username_link = base_url();
				}
				// $timestamp = strtotime($notification->row('created_at'));
				$timestamp = strtotime($notif->created_at);	
				$time = timespan($timestamp, $now) . ' ago';

					if ($tipe == 'like_course') { 
						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$username_link.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                        </div>
                                    </div>';
					}
					else if ($tipe == 'like_comment') { 
						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$username_link.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                        </div>
                                    </div>';
					}
					else if ($tipe == 'comment') {
						$output .= ' <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$username_link.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong> <br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                            <div class="well">
                                            	<strong>'.$notification->row('subject').'</strong> <br>
                                                '.$notification->row('text_comment').'
                                            </div>
                                        </div>
                                    </div>';
					}
					else if ($tipe == 'subscribe') { 
						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$username_link.'" class="go_link">'.$username.' </a></strong> '.$word.' <strong>you</strong><br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                        </div>
                                    </div>';
					}
					else if ($tipe == 'enroll_course' || $tipe == 'course_title') { 
						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$username_link.'" class="go_link">'.$username.'</a> </strong> '.$word.' <strong><a href="'.$go_link.'" class="go_link">'.$go_word.'</a></strong>. <br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                        </div>
                                    </div>';
					}
					else if ($tipe == 'broadcast') { 
						$output .= '<div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="'.base_url().'assets/images/'.$img.'">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">'.$time.'</small>
                                            <strong><a href="'.$go_link.'" class="go_link">'.$notif->id_user.' </a></strong> '.$word.' <strong>you</strong><br>
                                            <small class="text-muted">at '.$notif->created_at.'</small>
                                        </div>
                                    </div>';
					}

				}

			}
			}else{
				$output .= '<img src="'.base_url().'assets/images/Asset 33.png" alt="" width="200px" style="display: block;margin: 0 auto;"/>';
				}
			echo $output;
			}
			

		}
		

}




/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */