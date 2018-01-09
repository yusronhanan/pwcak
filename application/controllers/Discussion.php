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
		$list_discuss = $this->home_model->GetData(['reply_id'=>'0'],'comment')->result();
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
		$user_login =  $this->auth_model->GetUser(['id_user' => $id_user])->row();
		$random_code = $this->uri->segment(2);
	
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);

		$id_usermaker = $getcourse->row('id_user');
		
		$list_content = '';
		$getcontent = '';
		
		$list_comment= $this->home_model->GetData(['id_title' => $id_title, 'reply_id' => '0'],'comment')->result();
		$list_reply_comment= $this->home_model->GetData(['id_title' => $id_title, 'reply_id !=' => '0'],'comment')->result();

		$getmaker = $this->auth_model->GetUser(['id_user' => $id_usermaker])->row();
		
		
		$username = array(); #comment
		$avaa = array(); 
		$like_amount = array(); #comment type 2
		$dislike_amount = array(); #comment  type 4
		$reply_amount = array(); #comment (reply comment) type 3
		$liked = array(); #comment type 2
		$disliked = array(); #comment type 4

		$subscribed = array();
		$subs_amount = array();
		
		foreach ($list_comment as $comment) {
			$username[$comment->id_user] = $this->auth_model->GetUser(['id_user' => $comment->id_user])->row('username');
			$avaa[$comment->id_user] = $this->auth_model->GetUser(['id_user' => $comment->id_user])->row('photo');
			$like_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $comment->id_comment,'type' => '2'],'like_comment')->row('like_amount');
			$dislike_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $comment->id_comment,'type' => '4'],'like_comment')->row('like_amount');
			$reply_amount[$comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_comment) as reply_amount',['reply_id' => $comment->id_comment],'comment')->row('reply_amount');

			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_comment' => $comment->id_comment,'id_user'=>$id_user,'type'=>'2'],'like_comment')->row('id_comment');
				$disliked[] = $this->home_model->GetData(['id_comment' => $comment->id_comment,'id_user'=>$id_user,'type'=>'4'],'like_comment')->row('id_comment');
			}
		}
		foreach ($list_reply_comment as $reply_comment) {
			$username[$reply_comment->id_user] = $this->auth_model->GetUser(['id_user' => $reply_comment->id_user])->row('username');
			$avaa[$reply_comment->id_user] = $this->auth_model->GetUser(['id_user' => $reply_comment->id_user])->row('photo');
			$like_amount[$reply_comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $reply_comment->id_comment,'type' => '2'],'like_comment')->row('like_amount');
			$dislike_amount[$reply_comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $reply_comment->id_comment,'type' => '4'],'like_comment')->row('like_amount');
			$reply_amount[$reply_comment->id_comment] = $this->home_model->GetSelectData('COUNT(id_comment) as reply_amount',['reply_id' => $reply_comment->id_comment],'comment')->row('reply_amount');

			
			if ($this->session->userdata('logged_in') == TRUE) {
				$liked[] = $this->home_model->GetData(['id_comment' => $reply_comment->id_comment,'id_user'=>$id_user,'type'=>'2'],'like_comment')->row('id_comment');
				$disliked[] = $this->home_model->GetData(['id_comment' => $reply_comment->id_comment,'id_user'=>$id_user,'type'=>'4'],'like_comment')->row('id_comment');
			}
		}
		
		
		if ($this->session->userdata('logged_in') == TRUE) {
			$subscribed[] = $this->home_model->GetData(['id_user'=>$id_user,'for_id'=>$id_usermaker],'subscribe')->row('for_id');
			$subs_amount[$id_usermaker] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $id_usermaker])->row('subs_amount');
		}

		

		$data = [
			'title_info' 			=> $getcourse->row(),
			'maker_info'			=> $getmaker,
			'list_comment'			=> $list_comment,
			'list_reply_comment'	=> $list_reply_comment,
			
			'list_subject'			=> $this->course_model->GetSubject(),
			
			'username_id'			=> $username_id,
			'user_login'			=> $user_login,
			// array
			'username' 				=> $username,
			'avaa'					=> $avaa,
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