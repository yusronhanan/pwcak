<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		 $this->load->helper('date');
	}

	

	public function get_data_user($limit,$mulai){
		return $this->db->limit($limit,$mulai)
						->order_by('id_user','ASC')	
				        ->get('user')
				        ->result();
	}

	public function get_data_course($limit,$start){
		return $this->db->limit($limit,$start)
		                ->order_by('id_title','ASC')
		                ->get('course_title')
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
			'bio' => $this->input->post('bio')
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
			$link = NULL;
		}
		

        $now = date('Y-m-d H:i:s');
		$data = array(
			'id_user' => 0,
			'subject' =>  $sub,
			'text' => $text,
			'link' => $link,
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
