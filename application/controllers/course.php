<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	

	}
	public function index()
	{
		$list_courses = '';
		$user_id = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');

		$title = $this->input->get('title');
		$subject = $this->input->get('subject');
		if (empty($title) && empty($subject)) {
		$list_courses = $this->course_model->GetListCourses('');
		}
		else if (empty($title)) {
			if ($subject == "") {
				$list_courses = $this->course_model->GetListCourses("");
			}
			else{
				$list_courses = $this->course_model->GetListCourses(["subject "=>$subject]);
			}
		}
		else{
			if ($subject == "") {
				$list_courses = $this->course_model->GetListCourses(["title LIKE"=>"%".$title."%"]);
			}
			else{
				$list_courses = $this->course_model->GetListCourses(["title LIKE"=>"%".$title."%", "subject" => $subject]);
			}
			
		}
		$username = array();
		$like_amount = array();
		$comment_amount = array();
		$liked = array();

		foreach ($list_courses as $courses) {
			$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
			$like_amount[$courses->id_title] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['id_title' => $courses->id_title,'type_action' => '0'])->row('like_amount');
			$comment_amount[$courses->id_title] = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['id_title' => $courses->id_title,'type_action' => '1'])->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action')->row('id_title');
			}
		}
		
		
		if (!empty($title) || !empty($subject)) {
				$data = [
				'list_subject'		=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'like_amount'	=> $like_amount,
				'comment_amount'=> $comment_amount,
				'liked'			=> $liked,
				'list_courses' 	=> $list_courses,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'main_view'  	=> 'course_view',
				'username_id'	=> $username_id,
					];
		}
		else{
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'like_amount'	=> $like_amount,
				'comment_amount'=> $comment_amount,
				'liked'			=> $liked,
				'list_courses' 	=> $list_courses,
				'main_view' 	=> 'course_view',
				'username_id'	=> $username_id,
					];
		}
		
		$this->load->view('template', $data);
	}
	public function comment_up(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->course_model->comment_in();
			echo $result;
		}
		// else{
			// echo "NOT_LOGIN";
		// }
	}
	public function action_delete(){ //delete comment, dsb
		if ($this->session->userdata('logged_in') == TRUE) {
			// $reply_idd = $this->course_model->GetData(['id_action'=> $this->input->post('id_action')],'id_action')->row('reply_id');
			$result=$this->course_model->action_del();
			echo $result;
			// if ($result == "true") {
			// 	$reply_amount = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['reply_id'=>$reply_idd])->row('comment_amount');
			// 	echo $reply_amount;
			// }
			// else{
			// 	echo $result;
			// }
			
		}
		// else{
			// echo "NOT_LOGIN";
		// }
	}
	public function detail_course(){
		if ($this->session->userdata('logged_in') == TRUE) {
		// $id_title = $this->uri->segment(3);
		// $id_course = $this->uri->segment(3);
		// $id_usermaker = $this->uri->segment(3);
		// $data['det'] = $this->course_model->GetDetailTitle($id_title);
		// $data['detail'] = $this->course_model->GetDetailCourse($id_course);
		// $data['name'] = $this->course_model->GetDetailUser($id_usermaker);

		$step_number = $this->input->post('step_number');
		$id_user = $this->session->userdata('logged_id');
		
		$random_code = $this->uri->segment(2);
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		
		$list_content = '';
		$getcontent = '';
		$step = '';
		
		$list_comment_2top= $this->home_model->GetLimitAction('*',['id_title' => $id_title,'type_action' => '1'],2,0)->result(); #blm top

		// $list_comment_3= $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '3'])->result();
		$getmaker = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row();
		
		$check_content = $this->course_model->check_content($id_title);
		$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
		$firstid = (int) $this->course_model->GetFirstStep(['id_title'=>$id_title]);
		$nextid = '';
		$beforeid = '';
		
		$username = array(); #comment
		$like_amount = array(); #comment type 2
		$dislike_amount = array(); #comment  type 4
		$reply_amount = array(); #comment (reply comment) type 3
		$liked = array(); #comment type 2
		$disliked = array(); #comment type 4

		foreach ($list_comment_2top as $comment) {
			$username[$comment->from_id] = $this->auth_model->GetUser(['id_user' => $comment->from_id])->row('username');
			$like_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['reply_id' => $comment->id_action,'type_action' => '2'])->row('like_amount');
			$dislike_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as dislike_amount',['reply_id' => $comment->id_action,'type_action' => '4'])->row('dislike_amount');
			$reply_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as reply_amount',['reply_id' => $comment->id_action,'type_action' => '3'])->row('reply_amount');
			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'2'],'user_action')->row('reply_id');
				$disliked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'4'],'user_action')->row('reply_id');
			}
		}

		if (empty($step_number)) {
			if ($check_content == true)  { #step_num exist default 1
				$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $firstid])->row();
				$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
				$step = $firstid;
				$nextid = (int) $this->course_model->GetNextStep(['id_title'=>$id_title,'step_number >'=> $step]);
				$beforeid = (int) $this->course_model->GetBeforeStep(['id_title'=>$id_title,'step_number <'=> $step]);
				$upvisitor = $this->course_model->upvisitor($id_title);
			}
			else{ #step_num don't exist
				// $getcontent = $this->course_model->GetContent(['id_title' => $id_title])->row();	
				// $step = '1';
				$this->session->set_flashdata('notif_failed','Maaf, content course masih belum tersedia');
				redirect('course');
			}
		}
		else { #step num by input post
			$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $step_number])->row();
			$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
			$step = $step_number;
			$nextid = (int) $this->course_model->GetNextStep(['id_title'=>$id_title,'step_number >'=> $step]);
				$beforeid = (int) $this->course_model->GetBeforeStep(['id_title'=>$id_title,'step_number <'=> $step]);
				// $upvisitor = $this->course_model->upvisitor($id_title);
		}

		$data = [
			'title_info' 			=> $getcourse->row(),
			'maker_info'			=> $getmaker,
			'getcontent'			=> $getcontent,
			'step'					=> $step,
			'list_content'			=> $list_content,		
			'last'					=> $lastid,
			'next'					=> $nextid,
			'before'				=> $beforeid,
			'list_comment_2top'		=> $list_comment_2top,
			'list_subject'			=> $this->course_model->GetSubject(),
			
			// array
			'username' 				=> $username,
			'like_amount' 			=> $like_amount,
			'dislike_amount' 		=> $dislike_amount,
			'reply_amount' 			=> $reply_amount, 
			'liked'					=> $liked, 	
			'disliked'				=> $disliked,
		];
		$this->load->view('lesson_view', $data);
	}else{
		$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu untuk menikmati pembelajaran');
		redirect('');
	}

	}
	// public function GetId(){
 //        if($this->session->userdata('logged_in')==TRUE){
 //            $data['course'] = $this->course_model->GetIdCourse();
 //            $this->load->view('lesson_view',$data);
 //        }
 //    }
}

/* End of file course.php */
/* Location: ./application/controllers/course.php */