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
		// $sld_img = $this->home_model->GetData(['type'=> 'slide image'],'config')->row('img');
		// $slider = $this->home_model->GetData(['type'=>'slide'],'config')->result();
		$list_courses = '';
		$user_id = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');

		$title = $this->input->get('title');
		$subject = $this->input->get('subject');

		if (empty($title) && empty($subject)) {
		$list_courses = $this->course_model->GetListCourses('','');
		}
		else if ($title == "" &&  $subject == "") {
		$list_courses = $this->course_model->GetListCourses('','');
		}
		else{
			if($subject != ""){
				$subject = $subject;
				// $sbjct_filter = ["subject" => $subject];
			}
			else{
				$subject ="";
				// $sbjct_filter = "";
			}
			if ($title != "") {
				$title = $title;
			}
			else{
				$title = "";
			}
			$check_name = $this->home_model->GetData(["name LIKE"=>"%".$title."%"],'user')->num_rows();
			$check_title = $this->home_model->GetData(["title LIKE"=>"%".$title."%"],'course_title')->num_rows();
			if ($check_title > 0 && $check_name > 0) {
				if ($subject != "") {
					$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%","subject" => $subject],["title LIKE"=>"%".$title."%","subject" => $subject]);
				}
				else{
					$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%"],["title LIKE"=>"%".$title."%"]);
				}
				
			}
			else if ($check_title > 0) {
				if ($subject != "") {
					$list_courses = $this->course_model->GetListCourses(["title LIKE"=>"%".$title."%","subject" => $subject],"");
				}
				else{
				$list_courses = $this->course_model->GetListCourses(["title LIKE"=>"%".$title."%"],"");
				}
			}
			else if ($check_name > 0) {
				if ($subject != "") {
					$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%","subject" => $subject],"");
				}
				else{
				$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%"],"");
				}
			}

			else{
			if ($subject != "") {
					$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%","subject" => $subject],["title LIKE"=>"%".$title."%","subject" => $subject]);
				}
				else{
					$list_courses = $this->course_model->GetListCourses(["name LIKE"=>"%".$title."%"],["title LIKE"=>"%".$title."%"]);
				}
			}

		}
		$username = array();
		$like_amount = array();
		$comment_amount = array();
		$liked = array();

		foreach ($list_courses as $courses) {
			$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
			$like_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $courses->id_title],'like_course')->row('like_amount');
			$comment_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $courses->id_title],'comment')->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
			}
		}
		
		
		if (!empty($title) || !empty($subject)) {
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'like_amount'	=> $like_amount,
				'comment_amount'=> $comment_amount,
				'liked'			=> $liked,
				'list_courses' 	=> $list_courses,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'main_view'  	=> 'course_view',
				'username_id'	=> $username_id,
				// 'slider'		=> $slider,
				// 'sld_img'		=> $sld_img,
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
				// 'slider'		=> $slider,
				// 'sld_img'		=> $sld_img,
					];
		}
		
		$this->load->view('templet', $data);
	}
	public function comment_up(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->course_model->comment_in();
			echo $result;
		}
	}
	public function getlesson(){
			$result=$this->course_model->GetJoin('course_title.*, user.name, user.username, course_title.id_user as user_id, course_title.id_title as title_id',['random_code'=>$this->input->post('random_code')])
					->join('user', 'user.id_user = course_title.id_user', 'left')
					->group_by('course_title.id_title')
					->get('course_title')->row();
			
			if ($result->user_id == $this->session->userdata('logged_id')) {
				$enroll_status = 'See Yours';
			}
			else if ($this->home_model->GetData(['id_user'=>$this->session->userdata('logged_id'),'id_title'=>$result->title_id],'enroll_course')->num_rows() > 0) {
				$enroll_status = 'Enrolled';
			}

			else{
				$enroll_status = 'Enroll';
			}
			echo $result->title.'|'.$result->thumbnail.'|'.$result->description.'|'.$result->name.'|'.$result->username.'|'.$enroll_status;
	}
	public function comment_delete(){ 
		if ($this->session->userdata('logged_in') == TRUE) {
			$result=$this->course_model->comment_del();
			echo $result;	
		}
	}
	public function detail_course(){
		$random_code = $this->uri->segment(2);
		if ($this->session->userdata('logged_in') == TRUE) {

		$step_number = $this->input->post('step_number');
		$id_user = $this->session->userdata('logged_id');
		
		
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		if (!empty($id_title)) {
			
		
		$getcheckcontent = $this->course_model->GetData(['id_title'=> $id_title],'course_content')->num_rows();
		$getcheckstatus = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('status');
		if ($getcheckcontent > 0 && $getcheckstatus == 1) {
			
		
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		
		$list_content = '';
		$getcontent = '';
		$step = '';
		
		$list_comment_2top= $this->home_model->GetLimitData('*',['id_title' => $id_title,'reply_id' => '0'],2,0,'comment')->result(); #blm top

		$getmaker = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row();
		$getuser_in = $this->auth_model->GetUser(['id_user' => $id_user])->row();
		
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
			$username[$comment->id_user] = $this->auth_model->GetUser(['id_user' => $comment->id_user])->row('username');
			$like_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $comment->id_comment,'type' => '2'],'like_comment')->row('like_amount');
			$dislike_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $comment->id_comment,'type' => '4'],'like_comment')->row('like_amount');
			$reply_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_comment) as reply_amount',['reply_id' => $comment->id_comment],'comment')->row('reply_amount');

			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_comment' => $comment->id_comment,'id_user'=>$id_user,'type'=>'2'],'like_comment')->row('id_comment');
				$disliked[] = $this->home_model->GetData(['id_comment' => $comment->id_comment,'id_user'=>$id_user,'type'=>'4'],'like_comment')->row('id_comment');
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
			'getuser_in'			=> $getuser_in,
			// array
			'username' 				=> $username,
			'like_amount' 			=> $like_amount,
			'dislike_amount' 		=> $dislike_amount,
			'reply_amount' 			=> $reply_amount, 
			'liked'					=> $liked, 	
			'disliked'				=> $disliked,
		];
		$this->load->view('lesson_view', $data);
		}
		else if($getcheckstatus == 0){
		$this->session->set_flashdata('notif_failed','Maaf, course ini masih dalam pengembangan');
		redirect('');
		}
		else{
			redirect('eror404');
		}
		}
		else{
			redirect('eror404');
		}
	}else{
		$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu untuk menikmati pembelajaran');
		$this->session->set_flashdata('show_login', 'login');
		$this->session->set_flashdata('redirect', 'lesson/'.$random_code);
		redirect('');
	}

	}
	public function edit_publish(){
		$random_code = $this->input->post('random_code');
		$id_title = $this->home_model->GetData(['random_code'=>$random_code],'course_title')->row('id_title');
		$status = $this->input->post('status');
		if ($status == 'Publish Now') {
			$sts = '1';
			$this->course_model->enroll_announce($id_title);
		}
		else{
			$sts = '0';	
			$this->home_model->Delete(['get_id'=>$id_title,'type'=>'course_title'],'notification');
		}

		$getcontent = $this->home_model->GetData(['id_title'=>$id_title],'course_content');
		if ($getcontent->num_rows() > 0) {
			$result = $this->home_model->Update(['id_title'=>$id_title],['status'=>$sts],'course_title');
		}
		else{
			$result = FALSE;
		}
		if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
			
	}
}

/* End of file course.php */
/* Location: ./application/controllers/course.php */