<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infinitive extends CI_Controller {

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
			$like_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $courses->id_title],'like_course')->row('like_amount');
			$comment_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $courses->id_title],'comment')->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
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
				'main_view'  	=> 'infinitivescroll_view',
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
				'main_view' 	=> 'infinitivescroll_view',
				'username_id'	=> $username_id,
					];
		}
		
		$this->load->view('template', $data);
	}

	public function infinite(){
		$load_infinite = $this->input->post('load_infinite');
		if ($load_infinite == 'load_infinite') {
			$start = $this->input->post('start');

			$list_courses = '';
			$user_id = $this->session->userdata('logged_id');
			$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');

			$title = $this->input->get('title');
			$subject = $this->input->get('subject');
			if (empty($title) && empty($subject)) {
			$list_courses = $this->course_model->GetListCoursesInfinite('',$start);
			}
			else if (empty($title)) {
				if ($subject == "") {
					$list_courses = $this->course_model->GetListCoursesInfinite('',$start);
				}
				else{
					$list_courses = $this->course_model->GetListCoursesInfinite(["subject "=>$subject],$start);
				}
			}
			else{
				if ($subject == "") {
					$list_courses = $this->course_model->GetListCoursesInfinite(["title LIKE"=>"%".$title."%"],$start);
				}
				else{
					$list_courses = $this->course_model->GetListCoursesInfinite(["title LIKE"=>"%".$title."%", "subject" => $subject],$start);
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

			$output = '';
			// $result=$this->infinite_model->cout_infinite();
			if(!empty($list_courses)){
				
				
				foreach ($list_courses as $courses) {

					// if ($courses->type_notification == 'diskusi') {
					// 	$link = base_url().'page/detail_product/'.$courses->product_id;
					// }
					// else if ($courses->type_notification == 'order_waiting') {
					// 	$link = base_url().'Page/OrderAnda';
					// }
					// else if ($courses->type_notification == 'order_process') {
					// 	$link = base_url().'page/OrderAnda';
					// }
					
					if(array_key_exists($courses->id_user, $username)) {
					$usrnm =  $username[$courses->id_user];
					}
					if(array_key_exists($courses->id_title, $comment_amount)) {
                    $comments =  $comment_amount[$courses->id_title];
                    }

                    if(array_key_exists($courses->id_title, $like_amount)) {
                    $likes =  $like_amount[$courses->id_title];
                    }
                    $thumb = '';
                    if (!empty($liked)) {
                        if(in_array($courses->id_title, $liked)) {
                        $thumb = 'thumb_true';
                    }
                    }


				$output .= '
				 <div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="'. $courses->random_code .'"><img src="'. base_url() .'assets/images/'. $courses->thumbnail .'" width="350px" height="250px" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="'. $courses->random_code .'">'. $courses->title .'</a></h4>

				<h6>By  <a href="'. base_url() .''. $usrnm .'">
					'. $usrnm .'
				</a>, '. $courses->created_at .'</h6>
				<p>'. $courses->description .'</p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					
                    <h6><i class="fa fa-comment-o" aria-hidden="true"></i>'. $comments .'</h6>
					
                    <h6 id="'. $courses->random_code .'" class="thumb_in '. $thumb .'"><i class="fa fa-thumbs-up" aria-hidden="true"></i>'. $likes .'</h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="#" data-toggle="modal" data-target="#lesson" class="lesson_view" id="'. $courses->random_code .'"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>';	

				}
				// $output .= '<button class="btn btn-danger" id="load_infinite">LOAD PLEASE</button>';
			}
			else{
				$output .= '';
				}
			
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );
				$starttt = (int)$start+6; 
			echo $output.'|'.$starttt;

		}
		
	}
}

/* End of file infinitive.php */
/* Location: ./application/controllers/infinitive.php */