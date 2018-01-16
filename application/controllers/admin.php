<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('course_model');
		$this->load->model('home_model');
		$this->load->helper('date');
	}

	public function index()
	{
		if($this->session->userdata('role_admin') == 1){
		$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		// $data['user'] = $this->admin_model->get_data_user();
		// // $data['course'] = $this->admin_model->get_data_course();

		$data['main_view'] = 'dashboard1';
		$this->load->view('tempadmin',$data);
		}else{
			redirect('');
		}
	}
	public function admin_login()
	{
		if($this->session->userdata('role_admin') != 1 && $this->session->userdata('logged_in_admin') != TRUE){
		$this->load->view('loginadm_view');
		}
		else{
			redirect('admin');
		}
	}
	public function report_top()
	{
		if($this->session->userdata('role_admin') == 1 && $this->session->userdata('logged_in_admin') == TRUE){
			$id_user = $this->session->userdata('logged_id_admin');
		$data = [
		'user' 		=> $this->admin_model->top_user(),
		'course'			=> $this->admin_model->top_course(),
		'course_visitor' => $this->admin_model->top_course_visitor(),
		'discuss' 	=> $this->admin_model->top_discussion(),
		'main_view'	=> 'report_topview',
		'user_login' => $this->home_model->GetData(['id_user'=> $id_user],'user')->row(),
 		];
		$this->load->view('tempadmin',$data);
		}
		else{
			redirect('admin');
		}
	}

	public function get_user(){
		if($this->session->userdata('role_admin') == 1){
		// if($this->session->userdata('admin_login')==TRUE){
			$where_user = $this->input->get('filter');
			if (empty($where_user)) {
				$count_users = $this->admin_model->total_user();
				$where= '';
				$data['filter'] = '';
				// $base_urll = base_url().'/admin/get_user';
			}
			else{
				if ($where_user == 'Admin') {
				$where= ['role'=>'1'];	
				$count_users = $this->admin_model->total_user_admin();
				$data['filter'] = 'Admin';
				// $base_urll = base_url().'/admin/get_user?filter=Admin';
				}
				else if ($where_user == 'User') {
				$where= ['role'=>'0'];
				$count_users = $this->admin_model->total_user_biasa();	
				$data['filter'] = 'User';
				// $base_urll = base_url().'/admin/get_user?filter=User';
				}
				else{
				$where= '';	
				$data['filter'] = '';
				$count_users = $this->admin_model->total_user();
				// $base_urll = base_url().'/admin/get_user';
				}
				
			}
			$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		
			$data['main_view'] = 'datauser_view';

			$this->load->library('pagination');
			$config['page_query_string'] = TRUE;
		    $config['base_url'] = base_url().'/admin/get_user?filter='.$this->input->get('filter', TRUE);
			$config['total_rows'] = $count_users;
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			// $mulai = $this->uri->segment(3,0);
			$mulai = $this->input->get('per_page');

			$rows = $this->admin_model->get_data_user($config['per_page'],$mulai,$where);

			$data['user'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['mulai'] = $mulai;
			$this->load->view('tempadmin',$data);
		// }
		}else{
			redirect('');
		}
	}

	public function get_course(){
		if($this->session->userdata('role_admin') == 1){
		// if($this->session->userdata('admin_login') == TRUE){
			$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
			$data['main_view'] = 'datacourse_view';
			$this->load->library('pagination');

		    $config['base_url'] = base_url().'/admin/get_course';
			$config['total_rows'] = $this->admin_model->total();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_course($config['per_page'],$start);

			$data['course'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			$this->load->view('tempadmin',$data);

		// }
		}else{
			redirect('');
		}
	}

	public function get_discuss(){
		if($this->session->userdata('role_admin') == 1){
		// if($this->session->userdata('admin_login')==TRUE){
			$id_user = $this->session->userdata('logged_id_admin');
			$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		
			$data['main_view'] = 'datadiscuss_view';

			$this->load->library('pagination');

		    $config['base_url'] = base_url().'/admin/get_discuss';
			$config['total_rows'] = $this->admin_model->total_discuss();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_discuss($config['per_page'],$start);

			$data['discuss'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			$this->load->view('tempadmin',$data);
		// }
		}else{
			redirect('');
		}
	}

	public function get_comment(){
		if($this->session->userdata('role_admin') == 1){
		// if($this->session->userdata('admin_login')==TRUE){
			$id_user = $this->session->userdata('logged_id_admin');
			$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		
			$data['main_view'] = 'datacomment_view';

			$this->load->library('pagination');

		    $config['base_url'] = base_url().'/admin/get_comment';
			$config['total_rows'] = $this->admin_model->total_comment();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_comment($config['per_page'],$start);

			$data['comment'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			$this->load->view('tempadmin',$data);
		// }
		}else{
			redirect('');
		}
	}


	public function user_delete(){
		if($this->session->userdata('role_admin') == 1){
		$id_user=$this->uri->segment(3);
 		if($this->admin_model->delete_user($id_user)==TRUE){
 				redirect('admin/get_user');
 		}else{
 				redirect('admin');
 		}
 	}else{
			redirect('');
		}
}

	public function course_delete(){
		if($this->session->userdata('role_admin') == 1){
		$id_title=$this->uri->segment(3);
 		if($this->admin_model->delete_course($id_title)==TRUE){
 				redirect('admin/get_course');
 		}else{
 				redirect('admin');
 		}
 	}else{
			redirect('');
		}
 }

 	public function logout_admin(){
 		// $this->session->sess_destroy();
 			$this->session->unset_userdata('logged_id_admin');
	 		$this->session->unset_userdata('role_admin');
	 		$this->session->unset_userdata('username_admin');
	 		$this->session->unset_userdata('logged_in_admin');
 		redirect('admin_login');
 	}

 	public function detUser(){
 		if($this->session->userdata('role_admin')==1){
 		    $data 	= $this->admin_model->get_detail_user();

			echo $data->id_user."|".$data->email."|".$data->username."|".$data->city."|".$data->bio."|".$data->name."|".$data->photo."|".$data->role;
		}
		else{
			redirect('admin_login');
		}
	}

	public function detCourse(){
 		if($this->session->userdata('role_admin')==1){
 		    $data = $this->admin_model->get_detail_course();
			echo $data->id_title."|".$data->title."|".$data->subject."|".$data->created_at."|".$data->thumbnail."|".$data->description."|".$data->visitor."|".$data->random_code;
		}
		else{
			$this->session->set_flashdata('notif_failed','Anda telah logout sebelumnya');
			redirect('');
		}
	}

	public function updateUser(){
		if($this->session->userdata('role_admin')==1){

			$result = $this->admin_model->update_user();
			if($result == 'TRUE'){
			$data = $this->admin_model->GetData(array("id_user"=>$this->input->post('id')),'user');
			echo $data->id_user."|".$data->email."|".$data->username."|".$data->city."|".$data->bio."|".$data->role;
		    }else{
		    	echo 'FALSE';
		    }
		}else{
			redirect('');
		}
	}

	public function edit_pick(){
		if($this->session->userdata('role_admin')==1){
			// $unedit = 
			$result = $this->admin_model->editpick();
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function delete_broadcast(){
		$delete_in_notif = $this->admin_model->Delete(['get_id'=>$this->input->post('id_broadcast')],'notification');
		$result = $this->admin_model->Delete(['id_broadcast'=>$this->input->post('id_broadcast')],'broadcast');

			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
	}

	public function broadcast()
	{
		if($this->session->userdata('role_admin')==1){
		$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();

		$data['main_view'] = 'broadcast_view';

		$this->load->library('pagination');

		    $config['base_url'] = base_url().'admin/broadcast';
			$config['total_rows'] = $this->admin_model->total_broadcast();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$mulai = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_broadcasts($config['per_page'],$mulai);

			$data['broadcastt'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['mulai'] = $mulai;
		$this->load->view('tempadmin',$data);
		}
	}

	public function slider() {
		if($this->session->userdata('role_admin')==1){
		$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		$data['slider_image'] = $this->home_model->GetData(['type'=> 'slide image'],'config')->row();
		$data['list_quote'] = $this->home_model->GetData(['type'=> 'slide'],'config')->result();

		$data['main_view'] = 'slider_adm.php';
		$this->load->view('tempadmin', $data);
		}
	}


	public function testi() {
		if($this->session->userdata('role_admin')==1){
		$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		
		$data['list_testi'] = $this->home_model->GetData(['type'=> 'testimoni'],'config')->result();

		$data['main_view'] = 'testimonial_adm.php';
		$this->load->view('tempadmin', $data);
		}
	}

	public function subject() {
		if($this->session->userdata('role_admin')==1){
		$id_user = $this->session->userdata('logged_id_admin');
		$data['user_login'] = $this->home_model->GetData(['id_user'=> $id_user],'user')->row();
		$data['list_subject'] = $this->home_model->GetData(['type'=> 'subject'],'config')->result();

		$data['main_view'] = 'subject_view.php';
		$this->load->view('tempadmin', $data);
		}
	}
	public function getsubject(){
		if($this->session->userdata('role_admin')==1){
 		    $data 	= $this->home_model->GetData(['id_config'=>$this->input->post('id_sbj')],'config');
			echo $data->row('id_config')."|".$data->row('text');
		}
	}
	public function gettesti(){
		if($this->session->userdata('role_admin')==1){
 		    $data 	= $this->home_model->GetData(['id_config'=>$this->input->post('id_testi')],'config');
			$tes = explode('|', $data->row('text'));
			echo $data->row('id_config')."|".$tes[1]."|".$tes[2]."|".$tes[0];
		}
	}
	public function edittesti(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$name = $this->input->post('name');
		$profesi = $this->input->post('profesi');
		$testimoni = $this->input->post('testimoni');
		
		$tes = $testimoni.'|'.$name.'|'.$profesi;
		$result = $this->admin_model->Update(['id_config'=>$this->input->post('id_testi')],['text'=>$tes,'last_update'=>$now],'config');

			if($result == TRUE){
			$this->session->set_flashdata('notif_success','Anda sukses update testimoni');
			redirect('admin/testi');
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
			redirect('admin/testi');	
		}
	}
	public function newtesti(){

		$result = $this->admin_model->newtesti();

			if($result == TRUE){
			$this->session->set_flashdata('notif_success','Anda sukses menambah testimoni');
			redirect('admin/testi');
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
			redirect('admin/testi');	
		}
	}
	public function deletetesti(){

		
			$result = $this->admin_model->Delete(['id_config'=>$this->input->post('id_testi')],'config');

			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
	}
	public function getslider(){
		if($this->session->userdata('role_admin')==1){
 		    $data 	= $this->home_model->GetData(['id_config'=>$this->input->post('id_quote')],'config');
 		    $qt = explode('|', $data->row('text'));
 		    $link = substr($qt[2], 7); 
			echo $qt[0]."|".$qt[1]."|".$link;
		}
	}
	public function getbroadcast(){
		if($this->session->userdata('role_admin')==1){
 		    $data 	= $this->home_model->GetData(['id_broadcast'=>$this->input->post('id_broadcast')],'broadcast')->row();
 		    $link="";
 		    if ($data->link != NULL) {
 		    $link = substr($data->link, 7);
 		    }
 		    else{
 		    $link = '';
 		    }
 		    echo $data->subject."|".$data->text."|".$link;
		}
	}
	public function updateslider(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$text_1 = $this->input->post('text_1');
		$text_2 = $this->input->post('text_2');
		$text_link = $this->input->post('text_link');
		$qts = $text_1.'|'.$text_2.'|http://'.$text_link;
		$result = $this->admin_model->Update(['id_config'=>$this->input->post('id_quote')],['text'=>$qts,'last_update'=>$now],'config');

			if($result == TRUE){
			$this->session->set_flashdata('notif_success','Anda sukses update slider');
			redirect('admin/slider');
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
			redirect('admin/slider');	
		}
	}
	public function updateslider_img(){
				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '5000';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('slider_image')){

				$data = $this->admin_model->updateslider_img($this->upload->data());
				if($data == false){
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('admin/slider');
				}
				else {
					$this->session->set_flashdata('notif_success','Anda sukses mengedit slider image');
					redirect('admin/slider');
				}
				
				}else{
				    $this->session->set_flashdata('notif', $this->upload->display_errors());
				    redirect('admin/slider');
				}
	}
	public function updatesubject(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$sbjjs = $this->home_model->GetData(['id_config'=>$this->input->post('id_sbj')],'config')->row('text');
		$update_course = $this->admin_model->Update(['subject'=>$sbjjs],['subject'=>$this->input->post('text_sbj')],'course_title');

		$result = $this->admin_model->Update(['id_config'=>$this->input->post('id_sbj')],['text'=>$this->input->post('text_sbj'),'last_update'=>$now],'config');

			if($result == TRUE){
				$data 	= $this->home_model->GetData(['id_config'=>$this->input->post('id_sbj')],'config');
				echo $data->row('text');
			}
			else{
				echo 'false';
			}
	}
	public function deletesubject(){
		$sbjjs = $this->home_model->GetData(['id_config'=>$this->input->post('id_sbj')],'config')->row('text');
		$check = $this->home_model->GetData(['subject'=>$sbjjs],'course_title');

		if ($check->num_rows() > 0 || $sbjjs == 'Other') {
			echo 'false';
		}
		else{
			$result = $this->admin_model->Delete(['id_config'=>$this->input->post('id_sbj')],'config');

			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function submit_sbj(){
		$result = $this->admin_model->new_subject();
		if ($result == true) {
		$this->session->set_flashdata('notif_success','Anda sukses menambah subject baru');
			redirect('admin/subject');
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
			redirect('admin/subject');	
		}

		
	}

	public function delete_user(){
		if($this->session->userdata('role_admin')==1){
			$id_user = $this->input->post('id_user');
			$comment = $this->admin_model->Delete(['id_user'=>$id_user],'comment');
			$notif = $this->admin_model->Delete(['id_user'=>$id_user],'notification');
			$subscribe = $this->admin_model->Delete(['id_user'=>$id_user],'subscribe');
			$like_course = $this->admin_model->Delete(['id_user'=>$id_user],'like_course');
			$like_comment = $this->admin_model->Delete(['id_user'=>$id_user],'like_comment');
			$enroll = $this->admin_model->Delete(['id_user'=>$id_user],'enroll_course');
			$course_title = $this->admin_model->Delete(['id_user'=>$id_user],'course_title');
			$content = $this->admin_model->Delete(['id_user'=>$id_user],'course_content');
			$broadcast = $this->admin_model->Delete(['id_user'=>$id_user],'broadcast');
			$result = $this->admin_model->Delete(['id_user'=>$id_user],'user');

			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function delete_discuss(){
		if($this->session->userdata('role_admin')==1){
		$id_comment = $this->input->post('id_comment');	
		$check = $this->admin_model->GetData(['id_comment'=>$id_comment],'comment');
// >num_rows()
		if($check->reply_id == '0'){
		$comment = $this->admin_model->Delete(['reply_id'=>$id_comment],'comment');
		$like_comment = $this->admin_model->Delete(['id_comment'=>$id_comment],'like_comment');
		$comment = $this->admin_model->Delete(['id_comment'=>$id_comment],'comment');
		}
		else{
		$comment = $this->admin_model->Delete(['id_comment'=>$id_comment],'comment');
		}

		if($comment == TRUE){
			echo 'true';
		}else{
			echo 'false';
		}

	}
}

	public function delete_course(){
		if($this->session->userdata('role_admin')==1){
			$id_title = $this->input->post('id_title');
			$comment = $this->admin_model->Delete(['id_title'=>$id_title],'comment');
			$like_course = $this->admin_model->Delete(['id_title'=>$id_title],'like_course');
			$like_comment = $this->admin_model->Delete(['id_title'=>$id_title],'like_comment');
			$enroll = $this->admin_model->Delete(['id_title'=>$id_title],'enroll_course');
			$content = $this->admin_model->Delete(['id_title'=>$id_title],'course_content');
			$result = $this->admin_model->Delete(['id_title'=>$id_title],'course_title');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	
	public function banned_user(){
		if($this->session->userdata('role_admin')==1){
			$id_user = $this->input->post('id_user');
			$status = $this->input->post('status');
			if ($status == 'fa fa-times') {
				$banned = '1';
			}
			else{
				$banned = '0';	
			}
			$result = $this->admin_model->Update(['id_user'=>$id_user],['status'=>$banned],'user');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function banned_course(){
		if($this->session->userdata('role_admin')==1){
			$id_title = $this->input->post('id_title');
			$status = $this->input->post('status');
			if ($status == 'fa fa-times') {
				$banned = '2';
			}
			else{
				$banned = '1';	
			}
			$result = $this->admin_model->Update(['id_title'=>$id_title],['status'=>$banned],'course_title');
			if($result == TRUE){
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
	}
	public function submit_B()
	{
		if($this->session->userdata('role_admin') == 1){
			if($this->input->post('submit') == TRUE){

				$this->form_validation->set_rules('subject','Subject','required|trim');
				$this->form_validation->set_rules('text','Text','required|trim');

				if($this->form_validation->run() == TRUE){

				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '2000';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('thumbnail')){

				$data = $this->admin_model->broadcast($this->upload->data());
				if($data == false){
					$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
					redirect('admin/broadcast');
				}
				else {
					$this->session->set_flashdata('notif_success','Anda sukses mengedit foto profile');
					redirect('admin/broadcast');
				}
				
				}else{
				    $this->session->set_flashdata('notif_failed', $this->upload->display_errors());
				    redirect('admin/broadcast');
				}

			}else{
				$this->session->set_flashdata('notif',validation_errors());
				redirect('admin/broadcast');
			}
		
		}
	}
}
			public function editbroadcast(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$subject = $this->input->post('subject');
		$text = $this->input->post('text');
		if ($this->input->post('link') == '') {
			$link = NULL;
		}
		else{
			$link = 'http://'.$this->input->post('link');
		}
		
		$id_broadcast = $this->input->post('id_broadcast');
		
		$result_notif = $this->admin_model->Update(['get_id'=>$id_broadcast,'type'=>'broadcast'],['status'=>'0','created_at'=>$now],'notification');
		$result = $this->admin_model->Update(['id_broadcast'=>$id_broadcast],['text'=>$text,'link'=>$link,'subject'=>$subject,'created_at'=>$now],'broadcast');

			if($result == TRUE){
			$this->session->set_flashdata('notif_success','Anda sukses update broadcast');
			redirect('admin/broadcast');
		}
		else{
			$this->session->set_flashdata('notif_failed','Maaf, ada kesalahan. Coba lagi');
			redirect('admin/broadcast');	
		}
				}


}



/* End of file admin.php */
/* Location: ./application/controllers/admin.php */