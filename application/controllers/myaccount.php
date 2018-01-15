<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}


	// public function index()
	// {
	// 	if ($this->session->userdata('logged_in') == TRUE) {
	// 	$user_id = $this->session->userdata('logged_id');
	// 	$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
	// 	$enrolled = $this->home_model->GetData(['id_user'=>$user_id],'enroll_course');
	// 	$list_courses = '';

	// 	$title = $this->input->get('title');
	// 	$subject = $this->input->get('subject');

	// 	if (empty($title) && empty($subject)) {
	// 	$list_courses = $this->course_model->GLCMyAccount('');
	// 	}
	// 	else if (empty($title)) {
	// 		if ($subject == "") {
	// 			$list_courses = $this->course_model->GLCMyAccount("");
	// 		}
	// 		else{
	// 			$list_courses = $this->course_model->GLCMyAccount(["subject "=>$subject]);
	// 		}
	// 	}
	// 	else{
	// 		if ($subject == "") {
	// 			$list_courses = $this->course_model->GLCMyAccount(["title LIKE"=>"%".$title."%"]);
	// 		}
	// 		else{
	// 			$list_courses = $this->course_model->GLCMyAccount(["title LIKE"=>"%".$title."%", "subject" => $subject]);
	// 		}
			
	// 	}
	// 	$username = array();
	// 	$like_amount = array();
	// 	$comment_amount = array();
	// 	$liked = array();

	// 	$subscribed = array();
	// 	$subs_amount = array();

	// 	foreach ($list_courses as $courses) {
	// 		$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
	// 		$like_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $courses->id_title],'like_course')->row('like_amount');
	// 		$comment_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $courses->id_title],'comment')->row('comment_amount');
	// 		if ($this->session->userdata('logged_in') == TRUE) {
	// 			$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
	// 		}
	// 	}
	// 	if ($this->session->userdata('logged_in') == TRUE) {
	// 		$subs_amount[$user_id] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $user_id])->row('subs_amount');
	// 	}
		
	// 	if (!empty($title) || !empty($subject)) {
	// 			$data = [
	// 			'list_subject'	=> $this->course_model->GetSubject(),
	// 			'like_amount'	=> $like_amount,
	// 			'comment_amount'=> $comment_amount,
	// 			'liked'			=> $liked,
	// 			'username' 		=> $username,
	// 			'list_courses' 	=> $list_courses,
	// 			'enroll'		=> $enrolled,
	// 			'title'		 	=> $title,	//search
	// 			'subject'		=> $subject, //search
	// 			'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
	// 			// 'subscribed'	=> $subscribed,
	// 			'subs_amount'	=> $subs_amount,
	// 			'username_id'	=> $username_id,
	// 				];
	// 	}
	// 	else{
	// 			$data = [
	// 			'list_subject'	=> $this->course_model->GetSubject(),
	// 			'like_amount'	=> $like_amount,
	// 			'comment_amount'=> $comment_amount,
	// 			'liked'			=> $liked,
	// 			'username' 		=> $username,
	// 			'list_courses' 	=> $list_courses,
	// 			'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
	// 			// 'subscribed'	=> $subscribed,
	// 			'subs_amount'	=> $subs_amount,
	// 			'username_id'	=> $username_id,
	// 			'main_view'		=> 'acc_view',
	// 				];
	// 	}
	// 	$this->load->view('templet', $data);
	// 	}
	// 	else{
	// 		$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
	// 		redirect('');
	// 	}	
	// }
	
	
	public function add_course(){
		if($this->input->post('done') || $this->input->post('newstep') || $this->input->post('save')){
			$this->submit_content();
			}
		else if($this->input->post('settingcourse')) {
			$this->editcourse_title();
		}
		else if ($this->input->post('editthumbnail')) {
			$this->editcourse_thumbnail();	
		}
		else {
		$step_number = $this->input->post('step_number');
		if ($this->session->userdata('logged_in') == TRUE) {
		$id_user = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');
		$random_code = $this->uri->segment(2);
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		$getuser_in = $this->auth_model->GetUser(['id_user' => $id_user])->row();
		$list_content = '';
		$getcontent = '';
		$step = '';
		if ($id_user == $id_usermaker) {
		$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');
		
		$check_content = $this->course_model->check_content($id_title);
		$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
		$firstid = (int) $this->course_model->GetFirstStep(['id_title'=>$id_title]);


		if (empty($step_number)) {
			if ($check_content == true)  { #step_num exist default 1
				$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $firstid])->row();
				$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
				$step = $firstid;
			}
			else{ #step_num don't exist
				// $getcontent = $this->course_model->GetContent(['id_title' => $id_title])->row();	
				$step = '1';
			}
		}
		else { #step num by input post
			$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $step_number])->row();
			$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
			$step = $step_number;
		}

		$data = [
			'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
			'getcontent'			=> $getcontent,
			'step'					=> $step,
			'list_content'			=> $list_content,		
			'last'					=> $lastid,
			'getuser_in'			=> $getuser_in,
			'list_subject'			=> $this->course_model->GetSubject(),

		];

		$this->load->view('add_course_view',$data);
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda bukan course maker dari course ini.');
			redirect('/'.$username_id);
		}
		
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('');
		}
		
		}
	
	}
	public function submit_content(){
			$id_user = $this->session->userdata('logged_id');
			$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');
						
			$this->form_validation->set_rules('id_title', 'ID Title', 'trim|required');
			$this->form_validation->set_rules('step_title', 'Step Title', 'required');
			$this->form_validation->set_rules('step_number','Step Number','trim|required');
			$this->form_validation->set_rules('content','Content','required');

			if($this->form_validation->run() == TRUE){
				if($this->course_model->add_course_content() == TRUE){
					$random_code = $this->course_model->GetData(['id_title'=>$this->input->post('id_title')],'course_title')->row('random_code');
						
						$lastnumber = (int) $this->course_model->GetLastStep(['id_title'=>$this->input->post('id_title')]);
						$newnumber = $lastnumber + 1; 

						
						$id_title = $this->input->post('id_title');
						$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

						$id_usermaker = $getcourse->row('id_user');
						$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
						$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
						$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$getcontent = '';
						$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');
						
					if (!empty($this->input->post('newstep'))) {
						
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $newnumber,
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'		    => $this->course_model->GetSubject(),
					];
						
						$this->load->view('add_course_view',$data);

					}
					else if (!empty($this->input->post('save'))) {
						$this->session->set_flashdata('notif_success','Anda sukses menyimpan data');
						$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
						$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();

						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'		=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
						
					}
					else{
						$this->session->set_flashdata('notif_success','Anda sukses menambahkan menyimpan course anda');
					
						redirect('/'.$username_id);	
					}

					

				}else if($this->course_model->add_course_content() == FALSE) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('/'.$username_id);
				}
				else{
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('');
				}
			}
			else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('add_course/'.$this->input->post('id_title'));
			}
	}
	public function delete_content(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$id_user = $this->session->userdata('logged_id');
		
			$id_content = $this->uri->segment(3);
			
			$check = $this->home_model->GetData(['id_course'=>$id_content],'course_content')->row('id_user');

			if ($id_user == $check) {
				$id_title = $this->home_model->GetData(['id_course'=>$id_content],'course_content')->row('id_title');
					$random_code = $this->home_model->GetData(['id_title'=>$id_title],'course_title')->row('random_code');
				$result = $this->home_model->Delete(['id_course'=>$id_content],'course_content');
				if ($result == true) {
					$this->session->set_flashdata('notif_success','Anda berhasil menghapus content');
					redirect('add_course/'.$random_code,'refresh');
				}
				else{
					$this->session->set_flashdata('notif_failed','Maaf, Anda gagal menghapus content');
				redirect('add_course/'.$random_code,'refresh');
				}
			 }		 
		}
	}
	public function edit_user(){
		if($this->input->post('submit')) {
			$id_user = $this->session->userdata('logged_id');
			$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','trim|required');
			// $this->form_validation->set_rules('username','Username','trim|required');
			// $this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('bio','Bio','required');

			if($this->form_validation->run() == TRUE){
				if($this->auth_model->edit_user()==TRUE)
				{
					
					$this->session->set_flashdata('notif_success','Selamat, Anda telah berhasil update data anda!');
					
						redirect('/'.$username_id);
				}else{
					
					$this->session->set_flashdata('notif_failed','Maaf anda gagal update data anda, silahkan coba lagi!');
					redirect('/'.$username_id);
				}
			}else{
				$this->session->set_flashdata('notif', validation_errors());
				redirect('/'.$username_id);
			}
		}
	}

	public function editphoto(){
		$id_user = $this->session->userdata('logged_id');
			$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');

				$config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']  = '2000';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('photoprofile')){
  
				$result = $this->auth_model->editphoto($this->upload->data());
				if($result == false) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('/'.$username_id);
				}
				else {
					$this->session->set_flashdata('notif_success','Anda sukses mengedit foto profile');
					redirect('/'.$username_id);
				}
			
			}  
			else{
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('/'.$username_id);
                }
	}
	public function newcourse_title(){

		if($this->input->post('submit')){
			$id_user = $this->session->userdata('logged_id');
			$username_id = $this->session->userdata('username');
			$this->form_validation->set_rules('coursename', 'Course Name', 'required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			$this->form_validation->set_rules('description','Description','required');

			if($this->form_validation->run() == TRUE){
				$config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']  = '2000';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('thumbnail')){

                // $this->upload->data()  
				$result = $this->course_model->add_course_title($this->upload->data());
				if($result == FALSE) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('/'.$username_id);
				}
				else if ($result == "NOT_LOGIN"){
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('');
				}
				else {
					$this->session->set_flashdata('notif_success','Anda sukses menambah course baru');
					redirect('add_course/'.$result);
				}
			
			}  
			else{
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('/'.$username_id);
                }
		}else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('/'.$username_id);

			}
		}

		}

	public function editcourse_title(){

			$this->form_validation->set_rules('coursename', 'Course Name', 'required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			$this->form_validation->set_rules('description','Description','required');

						$id_title = $this->input->post('id_title');
						$random_code = $this->course_model->GetData(['id_title'=>$id_title],'course_title')->row('random_code');
						
						$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
						$id_usermaker = $getcourse->row('id_user');
						$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
						$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
						$getcontent = '';
						$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');

			if($this->form_validation->run() == TRUE){

						$result = $this->course_model->edit_course_title();
					if($result == TRUE) {
					$this->session->set_flashdata('notif_success','Anda sukses update data course');
					$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
					$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
				else {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan saat update. Coba lagi');
					$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
					$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'			=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
			
			
		}else{
					$this->session->set_flashdata('notif',validation_errors());
					$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
					$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,	
						'getuser_in'			=> $getuser_in,	
						'last'					=> $lastid,
						'list_subject'			=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);

			}
		

		}
		public function editcourse_thumbnail(){

						$id_title = $this->input->post('id_title');
						$random_code = $this->course_model->GetData(['id_title'=>$id_title],'course_title')->row('random_code');
						$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

						$id_usermaker = $getcourse->row('id_user');
						$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
						$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
						$getcontent = '';
						$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');

						$config['upload_path'] = './assets/images';
                		$config['allowed_types'] = 'jpg|png';
                		$config['max_size']  = '2000';
                
                		$this->load->library('upload', $config);
                		$this->upload->initialize($config);
                if ($this->upload->do_upload('photothumbnail')){

						$result = $this->course_model->edit_course_thumbnail($this->upload->data());
					if($result == TRUE) {
					$this->session->set_flashdata('notif_success','Anda sukses update thumbnail course');
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
					$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
					$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'			=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
				else {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan saat update thumbnail. Coba lagi');
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
					$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
					$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
			}  
			else{
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
				$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
				$getuser_in = $this->auth_model->GetUser(['id_user' => $this->session->userdata('logged_id')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject').'|'.$getcourse->row('thumbnail').'|'.$getcourse->row('status'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'getuser_in'			=> $getuser_in,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
                }
		

		}
		public function user_profile($usrnm){
		$username = $usrnm;
		$user_id = $this->auth_model->GetUser(['username' => $username])->row('id_user');
		$userid_in = $this->session->userdata('logged_id');
		$enrolled = $this->home_model->GetEnrolled($user_id);
		$subscription = $this->home_model->GetSubscribed($user_id);
		if (empty($user_id)) {
			redirect('eror404');
		}
		else{

		// if ($user_id == $userid_in) {
		// 	$this->index();
		// }
		// else{

		$other_user = $this->home_model->GetOtherUser($user_id);
		$other_courses = $this->home_model->GetOtherCourses($user_id);
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
			$like_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $courses->id_title],'like_course')->row('like_amount');
			$comment_amount[$courses->id_title] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $courses->id_title],'comment')->row('comment_amount');
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_title'=>$courses->id_title,'id_user'=>$user_id,],'like_course')->row('id_title');
			}
		}

		if ($this->session->userdata('logged_in') == TRUE) {
			// foreach ($list_user as $user) { tinggal ganti for id => $user->id_user
			$subscribed[] = $this->home_model->GetData(['id_user'=>$userid_in,'for_id'=>$user_id],'subscribe')->row('for_id');
			$subs_amount[$user_id] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $user_id])->row('subs_amount');
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
				'username_id'	=> $usrnm,
				'enroll'		=> $enrolled,
				'other_courses' => $other_courses,
				'other_user'    => $other_user,
				'subsrciption'   => $subscription,
				'main_view'		=> 'acc_view',
				
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
				'username_id'	=> $usrnm,
				
				'enroll'		=> $enrolled,
				'other_courses' => $other_courses,
				'other_user'    => $other_user,
				'subscription'   => $subscription,
				'main_view'		=> 'acc_view',
				
					];
		}
		
		$this->load->view('templet', $data);
	}
}
	public function about_us(){
		$data = [
		'main_view'		=> 'aboutus_view',
				
					];
		$this->load->view('templet', $data);
	}
	}
	

	

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */