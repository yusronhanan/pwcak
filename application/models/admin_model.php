<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
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

	public function editpick($id_title){
		$query = $this->db->where(['id_title'=>$id_title])->get('course_title');		
		$pick= 0;
		if ($query->row('pick') == 0) {
			$pick = 1;
		}
		else{
			$pick = 0;
		}
		$data=array(
			'pick' => $pick 
		);
		$this->db->where('id_title',$id_title)
				 ->update('course_title',$data);
				 return TRUE;

	}

	public function broadcast($foto){
		date_default_timezone_set('Asia/Jakarta'); 
		$sub = $this->input->post('subject');
        $now = date('Y-m-d H:i:s');
		$data = array(
			'id_broadcast' => NULL,
			'id_user' => NULL,
			'subject' =>  $this->input->post('subject'),
			'text' => $this->input->post('text'),
			'link' => NULL,
			'thumbnail' => $foto['file_name'],
			'created_at' => $now,
	);
	$this->db->insert('broadcast',$data);

	$id_broadcast = $this->admin_model->GetData(['subject' => $sub],'broadcast')->row('id_broadcast');
	$notif = array(
		'get_id' => $id_broadcast,
		'id_user' => 0,
		'type' => 'broadcast',
		'created_at' => $now
	);
	$this->db->insert('notification',$notif);
	if($this->db->affected_rows()>0){
		return true;
	}else{
		return false;
	}

	}
	
}
