<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {
// type action  like title course = 0 , comment title course = 1, like(thumb up) comment = 2, reply comment = 3,dislike thumb down comment 4, enroll course 5

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
        $this->load->helper('date');
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
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $visitor_last = (int) $this->GetData(['id_title'=>$id_title],'course_title')->row('visitor');
        $visitor_new = $visitor_last + 1;
    
        $user_id = $this->session->userdata('logged_id');
        $username = $this->session->userdata('username');
        $id_usermaker = $this->course_model->GetData(['id_title'=> $id_title],'course_title')->row('id_user');
    
        $query = $this->db->where(['id_title'=> $id_title,'from_id'=>$user_id,'for_id'=>$id_usermaker,'type_action'=>'5'])
                          ->get('user_action');
        
        
        if($query->num_rows() > 0)
        {
            $data=array(
              'visitor'           => $visitor_new,
        );
            $this->db->where('id_title',$id_title)
                ->update('course_title', $data);
        }
        else{
            if ($user_id != $id_usermaker) {
          $data=array(
              'visitor'           => $visitor_new,
        );      
            $this->db->where('id_title',$id_title)
                ->update('course_title', $data);
            $enroll=array(
              'id_title'           => $id_title,
              'from_id'            => $user_id,
              'from_username'      => $username,
              'for_id'             => $id_usermaker,
              'type_action'        => '5',
              'created_at'         => $now,
        );
            
             $this->db->insert('user_action', $enroll);
             $id_action =  $this->home_model->GetAction('*',['id_title'=> $id_title,'from_id'=>$user_id,'for_id'=>$id_usermaker,'type_action'=>'5'])->row('id_action');
             $insert_notif = array(
            'id_action' => $id_action,
            'for_id'    => $id_usermaker,
            );
        
         $this->db->insert('notification', $insert_notif);

        
      
            }
        }
        // else
        // {
        //     return false;
        // }
        
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
    public function GetListCoursesInfinite($keyword,$start){
        if (empty($keyword)) {
        return $this->db
            ->limit(6,$start)
            // ->order_by() 
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->limit(6,$start) 
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
    public function GLCUserAccount($keyword,$id_user){
        // courses on my account /search course course list
        // $id_user = $this->session->userdata('logged_id');
      
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
     public function comment_in(){
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d H:i:s');
    $user_id = $this->session->userdata('logged_id');
    $username = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
    $id_title = $this->input->post('id_title');
    $id_usermaker = $this->course_model->GetData(['id_title'=> $id_title],'course_title')->row('id_user');
    
    $type_comment = $this->input->post('type_comment');
    $text_comment = $this->input->post('text_comment');
    $subject = $this->input->post('subject');
    $reply_comment = $this->input->post('reply_comment');
    if (empty($reply_comment)) {
        $reply_id = NULL;
    }
    else {
        $reply_id = $reply_comment;
    }
    
    // $query = $this->GetData(['id_title'=>$id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action');
        
            $data=array(              
              'id_title'              => $id_title,
              'from_id'               => $user_id,
              'from_username'         => $username,
              'for_id'                => $id_usermaker,
              'type_action'           => $type_comment, #1/3
              'reply_id'              => $reply_id, #buat comment
              'subject'               => $subject,
              'text_comment'          => $text_comment, #buat comment
              // 'status'             => ,
              'created_at'            => $now,
        );
        $this->db->insert('user_action', $data);
        $timestamp = strtotime($now);
        $nowstr = strtotime($now);
             
        $time = timespan($timestamp, $now) . ' ago';
        // notif
        $for_id = array();
        $insert_notif = array();
    if ($type_comment == '1') #comment on course 
    {
        $getcomment = $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '1'])->result();
        if ($user_id != $id_usermaker) {
        $for_id[] = $id_usermaker;
    }
        foreach ($getcomment as $comment) {
                if (!in_array($comment->from_id, $for_id)){
                    if ($user_id != $comment->from_id) {
                        $for_id[] = $comment->from_id;
                    }
            
        }
        }

    }
    else if($type_comment == '3') #comment reply comment
    {
        $getcomment = $this->home_model->GetAction('*',['id_title' => $id_title,'type_action' => '3','reply_id'=>$reply_id])->result();
        $id_replyid = $this->home_model->GetAction('*',['id_action' => $reply_id])->row('from_id');
        if ($user_id != $id_replyid) {
        $for_id[] = $id_replyid;
        }
        foreach ($getcomment as $comment) {
                if (!in_array($comment->from_id, $for_id)){
                    if ($user_id != $comment->from_id) {
                        $for_id[] = $comment->from_id;
                    }
            
        }
        }

    }
        if (!empty($for_id)) {

        $id_action =  $this->home_model->GetAction('*',['id_title'=> $id_title,'from_id'=> $user_id,'from_username'=> $username,'for_id'=> $id_usermaker,'type_action'=> $type_comment,'reply_id'=> $reply_id,'subject'=> $subject,'text_comment'=> $text_comment,'created_at'=> $now,])->row('id_action');

        for($i = 0; $i < count($for_id); $i++)
        {
            $insert_notif[] = array(
            'id_action' => $id_action,
            'for_id'    => $for_id[$i]
            );
        }
         $this->db->insert_batch('notification', $insert_notif);
     }
    // notif end
        if ($this->db->affected_rows() > 0) {

            if ($type_comment == '3') {
            // 0 subject,1 username, 2 text_comment, 3 created at, 4 total reply comment,5 id action
                $reply_amount = $this->home_model->GetAction('COUNT(id_action) as comment_amount',['id_title' => $id_title,'reply_id'=>$reply_id,'type_action' => '3'])->row('comment_amount');
                $id_action = $this->course_model->GetData(['subject'=> $subject,'text_comment'=>$text_comment,'created_at'=>$now,'reply_id'=>$reply_id,'from_id'=>$user_id],'user_action')->row('id_action');
                return $subject.'|'.$username.'|'.$text_comment.'|'.$time.'|'.$reply_amount.'|'.$id_action.'|'.$user_id;
            }
            else if($type_comment == '1'){
                $id_action = $this->course_model->GetData(['subject'=> $subject,'text_comment'=>$text_comment,'created_at'=>$now,'reply_id'=>$reply_id,'from_id'=>$user_id],'user_action')->row('id_action');
                return $subject.'|'.$username.'|'.$text_comment.'|'.$time.'|'.$id_action.'|'.$user_id;
            }
        } else {
            return "false";
        }

  }
  public function action_del(){ //delete comment, dsb
                $id_action = $this->input->post('id_action');
                $this->db->where(['id_action'=>$id_action])
                ->delete('user_action');
                if ($this->db->affected_rows() > 0) {
                return "true";
                }
                else{
                return "false";
                }
        }
  
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