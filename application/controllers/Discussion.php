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
		// $sld_img = $this->home_model->GetData(['type'=> 'slide image'],'config')->row('img');
		// $slider = $this->home_model->GetData(['type'=>'slide'],'config')->result();
		$user_id = $this->session->userdata('logged_id');
		
		$username_id = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');

		$title = $this->input->get('title');
		$subject = $this->input->get('subject');
		if (empty($title) && empty($subject)) {
		$list_discuss = $this->course_model->GetListDiscuss(['reply_id'=>'0'],'','');
		}
		else if (empty($title)) {
			if ($subject == "") {
				$list_discuss = $this->course_model->GetListDiscuss(['reply_id'=>'0'],'','');
			}
			else{
				$list_discuss = $this->course_model->GetListDiscuss(['reply_id'=>'0'],["course_title.subject "=>$subject],'');
			}
		}
		else{
			if ($subject == "") {
				$list_discuss = $this->course_model->GetListDiscuss(['reply_id'=>'0'],["comment.subject LIKE"=>"%".$title."%"],["comment.text_comment LIKE"=>"%".$title]);
			}
			else{
				$list_discuss = $this->course_model->GetListDiscuss(['reply_id'=>'0'],["comment.subject LIKE"=>"%".$title."%", "course_title.subject" => $subject],["comment.text_comment LIKE"=>"%".$title]);
			}
			
		}

		$comment_amount = array();

		foreach ($list_discuss as $discuss) {
			$like_amount[$discuss->id_comment] = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_comment' => $discuss->id_comment],'like_comment')->row('like_amount');
			$comment_amount[$discuss->id_comment] = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['reply_id' => $discuss->id_comment],'comment')->row('comment_amount');
		}
		if (!empty($title) || !empty($subject)) {
			$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'main_view'  => 'discussion_view',
				'list_discuss' => $list_discuss,
				'username_id'	=> $username_id,
				// 'slider'		=> $slider,
				'title'		 	=> $title,	//search
				'subject'		=> $subject, //search
				'comment_amount' => $comment_amount,
				// 'sld_img'		=> $sld_img,
		 		];
		}
		else{
				$data = [
				'list_subject'	=> $this->course_model->GetSubject(),
				'main_view'  => 'discussion_view',
				'list_discuss' => $list_discuss,
				'username_id'	=> $username_id,
				// 'slider'		=> $slider,
				'comment_amount' => $comment_amount,
				// 'sld_img'		=> $sld_img,
		 		];

		}
				$this->load->view('templet', $data);
	}
	public function detail_discuss()
	{	$random_code = $this->uri->segment(2);

		if ($this->session->userdata('logged_in') == TRUE) {
		$id_user = $this->session->userdata('logged_id');
		$username_id = $this->auth_model->GetUser(['id_user' => $id_user])->row('username');
		$user_login =  $this->auth_model->GetUser(['id_user' => $id_user])->row();
				
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		if (!empty($id_title)) {
			
		
		$getcourse = $this->course_model->GetCourse(['id_title'=>$id_title]);
		$other_discuss= $this->home_model->GetOtherDiscuss($id_title);
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

		// $subscribed = array();
		// $subs_amount = array();
		
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
		
		
		// if ($this->session->userdata('logged_in') == TRUE) {
		// 	$subscribed[] = $this->home_model->GetData(['id_user'=>$id_user,'for_id'=>$id_usermaker],'subscribe')->row('for_id');
		// 	$subs_amount[$id_usermaker] = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $id_usermaker])->row('subs_amount');
		// }

		

		$data = [
			'title_info' 			=> $getcourse->row(),
			'maker_info'			=> $getmaker,
			'list_comment'			=> $list_comment,
			'list_reply_comment'	=> $list_reply_comment,
			'other_discuss'			=> $other_discuss,
			
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
		
			// 'subscribed'			=> $subscribed,
			// 'subs_amount'			=> $subs_amount,
		];
				
				$this->load->view('detail_discuss', $data);
	}
	else{
		redirect('eror404');
	}
	}
	else{
		$this->session->set_flashdata('notif_failed', 'Maaf, anda harus login terlebih dahulu');
		$this->session->set_flashdata('show_login', 'login');
		$this->session->set_flashdata('redirect', 'discuss/'.$random_code);
		redirect('');
	}
}
}

/* End of file qna.php */
/* Location: ./application/controllers/qna.php */