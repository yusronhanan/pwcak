<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
	}
	public function add_course_content(){
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
        if($this->session->userdata('logged_in') == TRUE){
        $check = $this->GetContent(['id_title'=>$this->input->post('id_title'),'step_number'=>$this->input->post('step_number')]);
        if($check->num_rows()>0)
        {
            $data = array(
            'id_title'           => $this->input->post('id_title'),
            // 'id_user'            => $user_id,
            'step_title'         => $this->input->post('step_title'),
            // 'step_number'        => $this->input->post('step_number'),
            'content'            => $this->input->post('content'),
            'last_update'        => $now,
            );
            $whereupdate = ['id_title'=>$this->input->post('id_title'),'step_number'=>$this->input->post('step_number')];
        $this->db->where($whereupdate)
                ->update('course_content', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
        }
        else
        {
           $data = array(
            'id_title'           => $this->input->post('id_title'),
            'id_user'            => $user_id,
            'step_title'         => $this->input->post('step_title'),
            'step_number'        => $this->input->post('step_number'),
            'content'            => $this->input->post('content'),
            'created_at'         => $now,
            'last_update'        => $now,
            );

        $this->db->insert('course_content', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        } 
    }
        
   		
   	   } else{
        return "NOT_LOGIN";
    	}
	}
	public function add_course_title($thumbnail){
		
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
        $random_code= random_string('alnum',11);
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
            'random_code'        => $random_code,
            );

        $this->db->insert('course_title', $data);

      
        if ($this->db->affected_rows() > 0) {
            return $this->GetData(['random_code'=>$random_code, 'created_at' => $now],'course_title')->row('random_code');
        } else {
            return FALSE;
        }
   		
   	   } else{
        return "NOT_LOGIN";
    	}
	}
    public function edit_course_title(){
        
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('logged_id');
        
        $data = array(
            'title'              => $this->input->post('coursename'),
            'subject'            => $this->input->post('subject'),
            'description'        => $this->input->post('description'),
            // 'thumbnail'          => $thumbnail['file_name'],
            // 'thumbnail'           => 'e2.jpg',
            'last_update'        => $now,
            );

        $this->db->where('id_title',$this->input->post('id_title'))
                ->update('course_title', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
       
    }
    public function edit_course_thumbnail($thumbnail){
        
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('logged_id');
        
        $data=array(
              'thumbnail'           => $thumbnail['file_name'],
              'last_update'         => $now,
        );

        $this->db->where('id_title',$this->input->post('id_title'))
                ->update('course_title', $data);

      
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
       
    }
    
    public function upvisitor($id_title){
        $visitor_last = (int) $this->GetData(['id_title'=>$id_title],'course_title')->row('visitor');
        $visitor_new = $visitor_last + 1;
        $data=array(
              'visitor'           => $visitor_new,
        );

        $this->db->where('id_title',$id_title)
                ->update('course_title', $data);

      
        // if ($this->db->affected_rows() > 0) {
        //     return TRUE;
        // } else {
        //     return FALSE;
        // }
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
    public function GetListContent($where){
        return $this->db
            ->where($where)
            ->order_by('step_number', 'ASC')
            ->get('course_content')
            ->result();
        }
    
    public function check_content($id_title){
        $query = $this->db->where('id_title', $id_title)
                          ->get('course_content');
     
        if($query->num_rows()>0)
        {
            return true; 
        }
        else
        {
            return false;
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

public function GetDetailCourse($id_course){
         $id_course = $this->uri->segment(3);
         return $this->db->where('id_course',$id_course)
                         ->get('course_content')
                         
                         ->row();
     }
      public function GetDetailTitle($id_title){
         $id_course = $this->uri->segment(3);
         return $this->db->where('id_title',$id_title)
                         ->get('course_title')
                         
                         ->row();
     }
     public function GetDetailUser($id_user){
         $id_user = $this->uri->segment(3);
         return $this->db->where('id_user',$id_user)
                         ->get('user')
                         
                         ->row();
     }
     // public function GetIdCourse(){
     //     return $this->db->get('course_content')
     //                     ->result();
     // }

     public function GetLastStep($where) {
        return $this->db->where($where)->order_by('step_number', 'desc')->get('course_content')->row('step_number');
    }
    public function GetFirstStep($where) {
        return $this->db->where($where)->order_by('step_number', 'asc')->get('course_content')->row('step_number');
    }
    public function GetNextStep($where) {
        return $this->db->where($where)->order_by('step_number')->limit(1,0)->get('course_content')->row('step_number');
    }
    public function GetBeforeStep($where) {
        return $this->db->where($where)->order_by('step_number', 'desc')->limit(1,0)->get('course_content')->row('step_number');
    }
    

    public function GetData($where,$table)
    {
      return $this->db->where($where)->get($table);
    }
}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */