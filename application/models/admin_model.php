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

	public function get_data_user(){
		return $this->db->order_by('id_user','ASC')
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
}
