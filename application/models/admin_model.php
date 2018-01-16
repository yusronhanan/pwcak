<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		 $this->load->helper('date');
	}

	
	public function top_user(){
		// by subscribe
		$query = 'SELECT user.*, (SELECT COUNT(*) FROM subscribe WHERE subscribe.for_id = user.id_user) AS tot_subs FROM user  ORDER BY tot_subs DESC LIMIT 5';
		return $this->db->query($query)->result();
	}
	public function top_course(){
		// by like
		return $this->db->select('user.*, course_title.*,course_title.status as status_course, (SELECT COUNT(*) FROM like_course WHERE like_course.id_title = course_title.id_title) AS tot_likecourse')
						->limit(5,0)
						->join('user', 'user.id_user = course_title.id_user')
		                ->order_by('tot_likecourse','DESC')
		                ->group_by('id_title')
		                ->get('course_title')
		                ->result();
	}
	public function top_discussion(){
		// by reply
		return $this->db->select('course_title.random_code, course_title.title, user.name, user.username, C.*, C.subject as subjectcom, (SELECT COUNT(case when C.id_comment = B.reply_id then 1 end) FROM comment B WHERE B.reply_id != 0) AS tot_comment')

						->where('reply_id',0)
						->limit(5,0)
						->join('course_title', 'course_title.id_title = C.id_title')
						->join('user', 'C.id_user = user.id_user')
						->order_by('tot_comment','DESC')
						->group_by('C.id_comment')
						->get('comment C')
						// ->get('comment B')
						->result();
	}
	public function top_course_visitor(){
		// by visitor
		return $this->db->select('user.*, course_title.*,course_title.status as status_course')
						->limit(5,0)
						->join('user', 'user.id_user = course_title.id_user')
		                ->order_by('course_title.visitor','DESC')
		                ->group_by('id_title')
		                ->get('course_title')
		                ->result();
	}
	public function get_data_user($limit,$mulai,$where_user){
		if (!empty($where_user)) {
		return $this->db->limit($limit,$mulai)
						->where($where_user)
						->order_by('id_user','ASC')	
				        ->get('user')
				        ->result();	
		}
		else{
		return $this->db->limit($limit,$mulai)
						->order_by('id_user','ASC')	
				        ->get('user')
				        ->result();	
		}
		
	}
	public function get_data_broadcasts($limit,$mulai){
		return $this->db->limit($limit,$mulai)
						->order_by('created_at','DESC')	
				        ->get('broadcast')
				        ->result();
	}
	public function new_subject(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$id_user = $this->session->userdata('logged_id');
		$subject = $this->input->post('subject');
		$sbj = explode(',', $subject);
		$data=array();
		for($i = 0; $i < count($sbj); $i++)
        {
            $data[]=array(
			
			'id_user' => $id_user,
			'type' => 'subject',
			'text' => $sbj[$i],
			'created_at' => $now,
			'last_update' => $now,
			);
        }
         $this->db->insert_batch('config',$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	public function updateslider_img($img){
		date_default_timezone_set('Asia/Jakarta');
		$id_config = $this->input->post('id_slide'); 

		$now = date('Y-m-d H:i:s');
		$data = array(
			'img' =>  $img['file_name'],
			'last_update' => $now,
	);
	$this->db->where('id_config',$id_config)
			->update('config',$data);

	if($this->db->affected_rows()>0){
		return true;
	}else{
		return false;
	}
	}
	public function newtesti(){
		date_default_timezone_set('Asia/Jakarta'); 
		$now = date('Y-m-d H:i:s');
		$name = $this->input->post('nama');
		$profesi = $this->input->post('profesi');
		$testimoni = $this->input->post('testimoni');
		
		$tes = $testimoni.'|'.$name.'|'.$profesi;
		$data = array(
			'id_user' =>  $this->session->userdata('logged_id'),
			'type' => 'testimoni',
			'text'	=> $tes,
			'created_at' => $now,
			'last_update' => $now,
	);
	$this->db->insert('config',$data);
	if($this->db->affected_rows()>0){
		return true;
	}else{
		return false;
	}
	}

	public function get_data_course($limit,$start){
		return $this->db->select('user.*, course_title.*,course_title.status as status_course')
						->limit($limit,$start)
						->join('user', 'user.id_user = course_title.id_user')
		                ->order_by('id_title','ASC')
		                ->group_by('id_title')
		                ->get('course_title')
		                ->result();
	}

	public function get_data_discuss($limit,$start)
	{
	 return $this->db->select('course_title.random_code, course_title.title, user.name, user.username, comment.*, comment.subject as subjectcom')
						->where('reply_id',0)
						->limit($limit,$start)
						->join('course_title', 'course_title.id_title = comment.id_title')
						->join('user', 'comment.id_user = user.id_user')
						->group_by('id_comment')
						->get('comment')
						->result();
	}

	public function get_data_comment($limit,$start)
	{
		return $this->db->select('course_title.random_code, course_title.title, user.name, user.username, comment.*, comment.subject as subjectcom')
						->where('reply_id !=', 0)
						->limit($limit,$start)
						->join('course_title', 'course_title.id_title = comment.id_title')
						->join('user', 'comment.id_user = user.id_user')
						->group_by('id_comment')
						->get('comment')
						->result();
	}

	public function total(){
		return $this->db->from('course_title')
		                ->count_all_results();
	}

	public function total_user(){
		return $this->db->from('user')
		                ->count_all_results();
	}
	public function total_user_biasa(){
		return $this->db->where('role','0')->from('user')
		                ->count_all_results();
	}
	public function total_user_admin(){
		return $this->db->where('role','1')
						->from('user')
		                ->count_all_results();
	}
	public function total_comment(){
		return $this->db->where('reply_id !=', '0')
						->from('comment')
		                ->count_all_results();
	}
	public function total_discuss(){
		return $this->db->where('reply_id', '0')
						->from('comment')
		                ->count_all_results();
	}
	
	public function total_broadcast(){
		return $this->db->from('broadcast')
		                ->count_all_results();
	}
	
	public function delete_user($id_user){
		return $this->db->where('id_user',$id_user)
		                ->delete('user');

		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function delete_course($id_title){

		return $this->db->where('id_title',$id_title)
                        ->delete('course_title');

        if($this->db->affected_rows()>0){
        	return true;
        }else{
        	return false;
        }
	}

	public function get_detail_user(){
		$id_detail = $this->input->post('id');
		return $this->db->where('id_user',$id_detail)
						->get('user')
						->row();
	}

	public function get_detail_course(){
		$id_detail = $this->input->post('id');
		return $this->db->where('id_title',$id_detail)
						->get('course_title')
						->row();
	}

	public function update_user(){
		$id_user = $this->input->post('id');
		$data=array(
			
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'city' => $this->input->post('city'),
			'bio' => $this->input->post('bio'),
			'role' => $this->input->post('role')
		);
		$this->db->where('id_user',$id_user)
				 ->update('user',$data);

				 if($this->db->affected_rows()>0){
				 	return 'TRUE';
				 }else{
				 	return 'FALSE';
				 }

	}

	public function GetData($where,$table){
		return $this->db->where($where)->get($table)->row();
	}

	public function GetDataa($where,$table){
		return $this->db->where($where)->get($table)->result();
	}

	public function editpick(){
		$id_title = $this->input->post('id_title');	
		$pick= '';
		$query = $this->db->where(['id_title'=>$id_title])->get('course_title');
		if ($query->row('pick') == '0') {
			$pick = '1';
		}
		else{
			$pick = '0';
		}
		$data=array(
			'pick' => $pick 
		);
		$this->db->where('id_title',$id_title)
				 ->update('course_title',$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}

	}

	public function broadcast($thumbnail){
		date_default_timezone_set('Asia/Jakarta'); 
		$sub = $this->input->post('subject');
		$text = $this->input->post('text');
		$id_user = $this->input->post('id_user');
		$link = $this->input->post('link');
		$thumbnail = $thumbnail['file_name'];
		$id = $this->input->post('id_broadcast');

		if ($link == '') {
			$links = NULL;
		}
		else{
			$links = 'http://'.$link;
		}
		

        $now = date('Y-m-d H:i:s');
		$data = array(
			'id_user' => 0,
			'subject' =>  $sub,
			'text' => $text,
			'link' => $links,
			'thumbnail' => $thumbnail,
			'created_at' => $now,
	);
	$this->db->insert('broadcast',$data);
	$result= $this->db->where(['subject'=>$sub,'text'=>$text,'thumbnail'=>$thumbnail,'created_at' => $now,])
					  ->get('broadcast')
					  ->row('id_broadcast');

	$getuser = $this->db->get('user')
						->result();
		$for_id = array();
		$insert_notif = array();
    foreach ($getuser as $user) {
    	if(!in_array($user->id_user,$for_id)){
    		$for_id[] = $user->id_user;
    	}
    	
    }
    
    if(!empty($for_id)){
	

	for($i = 0; $i < count($for_id); $i++)
    {
	$insert_notif[] = array(

		'get_id' => $result,
		'id_user' => $for_id[$i],
		'type' => 'broadcast',
		'created_at' => $now
	);
}
	$this->db->insert_batch('notification',$insert_notif);
}
	if($this->db->affected_rows()>0){
		return true;
	}else{
		return false;
	}

	}
	// public function list_subject_update(){
		// $list_sbj = $this->input->post('list_subject');
		// $sbj = explode(',', $list_sbj);
		// for($i = 0; $i < count($sbj); $i++) {
		// $check = $this->db->where(['type'=>'subject','text'])->get('config');
		// }
	// }
	public function Delete($where,$table){
		$this->db->where($where)->delete($table);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	public function Update($where,$data,$table){
		$this->db->where($where)->update($table,$data);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
}
