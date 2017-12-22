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


	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		$user_id = $this->session->userdata('logged_id');
		$list_courses = '';

		$title = $this->input->get('title');
		$subject = $this->input->get('subject');

		if (empty($title) && empty($subject)) {
		$list_courses = $this->course_model->GLCMyAccount('');
		}
		else if (empty($title)) {
			if ($subject == "") {
				$list_courses = $this->course_model->GLCMyAccount("");
			}
			else{
				$list_courses = $this->course_model->GLCMyAccount(["subject "=>$subject]);
			}
		}
		else{
			if ($subject == "") {
				$list_courses = $this->course_model->GLCMyAccount(["title LIKE"=>"%".$title."%"]);
			}
			else{
				$list_courses = $this->course_model->GLCMyAccount(["title LIKE"=>"%".$title."%", "subject" => $subject]);
			}
			
		}
		$username = array();
		foreach ($list_courses as $courses) {
			$username[$courses->id_user] = $this->auth_model->GetUser(['id_user' => $courses->id_user])->row('username');
		}
		if (!empty($title) || !empty($subject)) {
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
					];
		}
		else{
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'username' 		=> $username,
				'list_courses' 	=> $list_courses,
				'user_info'		=> $this->auth_model->GetUser(['id_user' => $user_id])->row(),
					];
		}
		
		$this->load->view('account_view', $data);
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('home');
		}	
	}
	
	
	public function add_course(){
		if($this->input->post('done') || $this->input->post('newstep') || $this->input->post('save')){
			$this->submit_content();
			}
		else if($this->input->post('settingcourse')) {
			$this->editcourse_title();
		}
		else {
		$step_number = $this->input->post('step_number');
		if ($this->session->userdata('logged_in') == TRUE) {
		$id_user = $this->session->userdata('logged_id');
		
		$random_code = $this->uri->segment(3);
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		
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
			'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
			'getcontent'			=> $getcontent,
			'step'					=> $step,
			'list_content'			=> $list_content,		
			'last'					=> $lastid,
			'list_subject'			=> $this->course_model->GetSubject(),
			
			// 'list_subject'		=> $this->course_model->GetSubject(),

		];

		$this->load->view('add_course_view',$data);
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda bukan course maker dari course ini.');
			redirect('myaccount');
		}
		
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
			redirect('home');
		}
		
		}
	
	}
	public function submit_content(){
			$this->form_validation->set_rules('id_title', 'ID Title', 'trim|required');
			$this->form_validation->set_rules('step_title', 'Step Title', 'required');
			$this->form_validation->set_rules('step_number','Step Number','trim|required');
			$this->form_validation->set_rules('content','Content','required');

			if($this->form_validation->run() == TRUE){
				if($this->course_model->add_course_content() == TRUE){
					$random_code = $this->course_model->GetData(['id_title'=>$this->input->post('id_title')],'course_title')->row('random_code');
						
						$lastnumber = (int) $this->course_model->GetLastStep(['id_title'=>$this->input->post('id_title')]);
						$newnumber = $lastnumber + 1; 
						// $this->session->set_flashdata('notif_success','Anda sukses menambah step baru');
						// $this->session->set_flashdata('new_step', $newnumber);
						// redirect('myaccount/add_course/'.$random_code);

						
						$id_title = $this->input->post('id_title');
						$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

						$id_usermaker = $getcourse->row('id_user');
						$lastid = (int) $this->course_model->GetLastStep(['id_title'=>$id_title]);
						$list_content = $this->course_model->GetListContent(['id_title' => $id_title, 'id_user' => $id_usermaker]);
						$getcontent = '';
						$getname = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row('name');
						
					if (!empty($this->input->post('newstep'))) {
						
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
						'getcontent'			=> $getcontent,
						'step'					=> $newnumber,
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'list_subject'		=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);

					}
					else if (!empty($this->input->post('save'))) {
						$this->session->set_flashdata('notif_success','Anda sukses menyimpan data');
						// redirect('myaccount/add_course/'.$random_code);
						$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'list_subject'		=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
						
					}
					else{
						$this->session->set_flashdata('notif_success','Anda sukses menambahkan menyimpan course anda');
					
						redirect('myaccount');	
					}

					

				}else if($this->course_model->add_course_content() == FALSE) {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('myaccount');
				}
				else{
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('home');
				}
			}
			else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('myaccount/add_course/'.$this->input->post('id_title'));
			}
	}

	public function edit_user(){
		if($this->input->post('submit')) {

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
					redirect('myaccount');
				}else{
					
					$this->session->set_flashdata('notif_failed','Maaf anda gagal update data anda, silahkan coba lagi!');
					redirect('myaccount');
				}
			}else{
				$this->session->set_flashdata('notif', validation_errors());
				redirect('myaccount');
			}
		}
	}
	public function newcourse_title(){

		if($this->input->post('submit')){

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
					redirect('myaccount');
				}
				else if ($result == "NOT_LOGIN"){
					$this->session->set_flashdata('notif_failed','Maaf, anda harus login terlebih dahulu');
					redirect('home');
				}
				else {
					$this->session->set_flashdata('notif_success','Anda sukses menambah course baru');
					redirect('myaccount/add_course/'.$result);
				}
			
			}  
			else{
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('myaccount');
                }
		}else{
					$this->session->set_flashdata('notif',validation_errors());
					redirect('myaccount');

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
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
				else {
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan saat update. Coba lagi');
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);
				}
			
			
		}else{
					$this->session->set_flashdata('notif',validation_errors());
					$getcontent = $this->course_model->GetContent(['id_title' => $id_title, 'step_number' => $this->input->post('step_number')])->row();
						$data = [
						'title_info' 			=> $getcourse->row('title').'|'.$getname.'|'.$id_title.'|'.$random_code.'|'.$getcourse->row('description').'|'.$getcourse->row('subject'),
						'getcontent'			=> $getcontent,
						'step'					=> $this->input->post('step_number'),
						'list_content'			=> $list_content,		
						'last'					=> $lastid,
						'list_subject'			=> $this->course_model->GetSubject(),
						
						// 'list_subject'		=> $this->course_model->GetSubject(),

					];
						
						$this->load->view('add_course_view',$data);

			}
		

		}
	}
	

	

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */