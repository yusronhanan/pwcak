<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');	
	}
	public function index()
	{
		$user_id = $this->session->userdata('logged_id');
		$list_discuss = $this->home_model->GetData(['type_action'=>'1'],'user_action')->result();
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
				$data = [
				'main_view'  => 'discussion_view',
				'list_discuss' => $list_discuss,
				'username_id'	=> $username_id,
		 		];
				$this->load->view('templet', $data);
	}
	public function detail_discuss()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
		$id_user = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');
		
		$random_code = $this->uri->segment(2);
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		
		$list_content = '';
		$getcontent = '';
		
		$list_comment= $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '1'])->result(); #blm top
		$list_reply_comment= $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '3'])->result(); #blm top

		// $list_comment_3= $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '3'])->result();
		$getmaker = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row();
		
		
		$username = array(); #comment
		$like_amount = array(); #comment type 2
		$dislike_amount = array(); #comment  type 4
		$reply_amount = array(); #comment (reply comment) type 3
		$liked = array(); #comment type 2
		$disliked = array(); #comment type 4

		$subscribed = array();
		$subs_amount = array();
		
		foreach ($list_comment as $comment) {
			$username[$comment->from_id] = $this->auth_model->GetUser(['id_user' => $comment->from_id])->row('username');
			$like_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['reply_id' => $comment->id_action,'type_action' => '2'])->row('like_amount');
			$dislike_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as dislike_amount',['reply_id' => $comment->id_action,'type_action' => '4'])->row('dislike_amount');
			$reply_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as reply_amount',['reply_id' => $comment->id_action,'type_action' => '3'])->row('reply_amount');
			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'2'],'user_action')->row('reply_id');
				$disliked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'4'],'user_action')->row('reply_id');
			}
		}
		foreach ($list_reply_comment as $comment) {
			$username[$comment->from_id] = $this->auth_model->GetUser(['id_user' => $comment->from_id])->row('username');
			$like_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as like_amount',['reply_id' => $comment->id_action,'type_action' => '2'])->row('like_amount');
			$dislike_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as dislike_amount',['reply_id' => $comment->id_action,'type_action' => '4'])->row('dislike_amount');
			// $reply_amount[$comment->id_action] = $this->home_model->GetAction('COUNT(id_action) as reply_amount',['reply_id' => $comment->id_action,'type_action' => '3'])->row('reply_amount');
			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'2'],'user_action')->row('reply_id');
				$disliked[] = $this->home_model->GetData(['reply_id' => $comment->id_action,'from_id'=>$id_user,'type_action'=>'4'],'user_action')->row('reply_id');
			}
		}
		
		if ($this->session->userdata('logged_in') == TRUE) {
			// foreach ($list_user as $user) { tinggal ganti for id => $user->id_user
			$subscribed[] = $this->home_model->GetData(['from_id'=>$id_user,'for_id'=>$id_usermaker],'user_subscribe')->row('for_id');
			// $subs_amount[$user->id_user] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $user->id_user])->row('subs_amount');
			$subs_amount[$id_usermaker] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $id_usermaker])->row('subs_amount');
		// }
				
		}

		

		$data = [
			'title_info' 			=> $getcourse->row(),
			'maker_info'			=> $getmaker,
			'list_comment'			=> $list_comment,
			'list_reply_comment'	=> $list_reply_comment,
			
			'list_subject'			=> $this->course_model->GetSubject(),
			
			'username_id'			=> $username_id,
			// 'user_info'				=> $this->auth_model->GetUser(['id_user' => $id_user])->row(),
				
			// array
			'username' 				=> $username,
			'like_amount' 			=> $like_amount,
			'dislike_amount' 		=> $dislike_amount,
			'reply_amount' 			=> $reply_amount, 
			'liked'					=> $liked, 	
			'disliked'				=> $disliked,
		
			'subscribed'			=> $subscribed,
			'subs_amount'			=> $subs_amount,
		];
				
				$this->load->view('detail_discuss', $data);
	}
	else{
		$this->session->set_flashdata('notif_failed', 'Maaf, anda harus login terlebih dahulu');
		redirect('');
	}
}
}

/* End of file qna.php */
/* Location: ./application/controllers/qna.php */