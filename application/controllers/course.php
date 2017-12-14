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
		foreach ($list_courses as $courses) {
			$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
		}
		if (!empty($title) || !empty($subject)) {
				$data = [
				'list_subject'		=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'main_view'  	=> 'course_view',
					];
		}
		else{
				$data = [
				'list_subject'		=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'main_view' 	=> 'course_view',
					];
		}
		
		$this->load->view('template', $data);
	}

	public function detail_course(){
		if ($this->session->userdata('logged_in') == TRUE) {
		$id_title = $this->uri->segment(3);
		$id_course = $this->uri->segment(3);
		$id_user = $this->uri->segment(3);
		$data['det'] = $this->course_model->GetDetailTitle($id_title);
		$data['detail'] = $this->course_model->GetDetailCourse($id_course);
		$data['name'] = $this->course_model->GetDetailUser($id_user);

		$this->load->view('lesson_view', $data);
	}else{
		redirect('home');
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