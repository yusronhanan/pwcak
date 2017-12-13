<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function add_course_content(){
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
        if($this->session->userdata('logged_in') == TRUE){
        $data = array(
            'id_title'		 	 => $this->input->post('id_title'),
            'id_user'    		 => $user_id,
            'step_title'		 => $this->input->post('step_title'),
            'step_number'		 => $this->input->post('step_number'),
            'content'		 	 => $this->input->post('content'),
            'created_at'		 => $now,
            'last_update'		 => $now,
            );

        $this->db->insert('course_content', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
   		
   	   } else{
        return "NOT_LOGIN";
    	}
	}
	public function add_course_title($thumbnail){
		
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
        if($this->session->userdata('logged_in') == TRUE){
        $data = array(
            'id_user'    		 => $user_id,
            'title'		 		 => $this->input->post('coursename'),
            'subject'		 	 => $this->input->post('subject'),
            'description'		 => $this->input->post('description'),
            'thumbnail'		 	 => $thumbnail['file_name'],
            // 'thumbnail'		 	 => 'e2.jpg',
            'created_at'		 => $now,
            'last_update'		 => $now,
            );

        $this->db->insert('course_title', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
   		
   	   } else{
        return "NOT_LOGIN";
    	}
	}
	public function GetListCourses($keyword){
		// courses/search course course list
		if (empty($keyword)) {
		return $this->db
			->limit(15,0)
			// ->order_by() 
            ->get('course_title')
            ->result();
		}
		else{
		return $this->db
			->where($keyword)
			->limit(15,0) 
			// ->order_by()
            ->get('course_title')
            ->result();
		}
	}
    public function GLCMyAccount($keyword){
        // courses on my account /search course course list
        $id_user = $this->session->userdata('logged_id');
        if (empty($keyword)) {
        return $this->db
            ->where('id_user', $id_user)
            ->limit(15,0)
            // ->order_by() 
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->where('id_user', $id_user)
            ->limit(15,0) 
            // ->order_by()
            ->get('course_title')
            ->result();
        }
    }


	public function GetSubject(){
		return $this->db->where('type', 'subject')->get('config')->result();
	}	

	public function GetCourse($where)
    {
      return $this->db->where($where)->get('course_title');
    }

    public function GetContent($where)
    {
      return $this->db->where($where)->get('course_content');
    }

}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */