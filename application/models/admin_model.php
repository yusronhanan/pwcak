<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	// public function cek(){

	// 	$emailadmin = $this->input->post('email');
	// 	$password = $this->input->post('password');

	// 	$query=$this->db->where('email',$emaildmin)
	// 	                ->where('password',$password)
	// 	                ->get('user');
	// 	if($query->num_rows()>0){
	// 		$data=array(
	// 			'username' => $useradmin,
	// 		    'logged_in' => TRUE,
	// 		    'role' => $query->row()->role = 1
	// 		);
	// 		$this->session->set_userdata('logged_in');
	// 		return TRUE;
	// 	}else{
	// 		return FALSE;
	// 	}


	// }

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

	public function editpick($id_title){
		$id_title = $this->uri->segment(3);
		$data=array(
			'verified' => 1 );

		$this->db->where('id_title',$id_title)
				 ->update('course_title',$data);

				 if($this->db->affected_rows()>0){
				 	return TRUE;
				 }else{
				 	return FALSE;
				 }

	}
	public function uneditpick($id_title){
		$id_title = $this->uri->segment(3);
		$data=array(
			'verified' => 0 );

		$this->db->where('id_title',$id_title)
				 ->update('course_title',$data);

				 if($this->db->affected_rows()>0){
				 	return TRUE;
				 }else{
				 	return FALSE;
				 }

	}
}
