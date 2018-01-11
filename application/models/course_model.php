<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

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
    
        $query = $this->db->where(['id_title'=> $id_title,'id_user'=>$user_id])
                          ->get('enroll_course');
        
        
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
              'id_user'            => $user_id,
              'created_at'         => $now,
        );
            
             $this->db->insert('enroll_course', $enroll);
             $id_enroll =  $this->home_model->GetData(['id_title'=> $id_title,'id_user'=>$user_id],'enroll_course')->row('id_enroll');
             $insert_notif = array(
              'get_id'                 => $id_enroll,
              'id_user'                => $id_usermaker,
              'type'                   => 'enroll_course',
              'created_at'             => $now,
        
            );
        
         $this->db->insert('notification', $insert_notif);

        
      
            }
        }
    }
    
	public function GetListCourses($keyword){
		// courses/search course course list
		if (empty($keyword)) {
		return $this->db
			->limit(15,0)
            ->where('status', '1')
            ->get('course_title')
            ->result();
		}
		else{
		return $this->db
			->where($keyword)
            ->where('status', '1')
			->limit(15,0) 
            ->get('course_title')
            ->result();
		}
	}
    public function GetListCoursesInfinite($keyword,$start){
        if (empty($keyword)) {
        return $this->db
        ->where('status', '1')
            ->limit(6,$start)
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->where('status', '1')
            ->limit(6,$start) 
            ->get('course_title')
            ->result();
        }
    }
    public function GLCMyAccount($keyword){
        $id_user = $this->session->userdata('logged_id');
        if (empty($keyword)) {
        return $this->db
            ->where('id_user', $id_user)
            ->limit(15,0)
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->where('id_user', $id_user)
            ->limit(15,0) 
            ->get('course_title')
            ->result();
        }
    }
    public function GLCUserAccount($keyword,$id_user){
        $user_in = $this->session->userdata('logged_id');
        if ($id_user == $user_in) {
        if (empty($keyword)) {
        return $this->db
            ->where('id_user', $id_user)
            ->where('status !=', '2')
            ->limit(15,0)
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->where('id_user', $id_user)
            ->where('status !=', '2')
            ->limit(15,0) 
            ->get('course_title')
            ->result();
        }
        }
        else{
        if (empty($keyword)) {
        return $this->db
            ->where('id_user', $id_user)
            ->where('status', '1')
            ->limit(15,0)
            ->get('course_title')
            ->result();
        }
        else{
        return $this->db
            ->where($keyword)
            ->where('id_user', $id_user)
            ->where('status', '1')
            ->limit(15,0) 
            ->get('course_title')
            ->result();
        }
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
		return $this->db->where('type', 'subject')->order_by('code','ASC')->get('config')->result();
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
     public function comment_in(){
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d H:i:s');
    $user_id = $this->session->userdata('logged_id');
    $username = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
    $id_title = $this->input->post('id_title');
    $id_usermaker = $this->course_model->GetData(['id_title'=> $id_title],'course_title')->row('id_user');
    
    $text_comment = $this->input->post('text_comment');
    $subject = $this->input->post('subject');
    $reply_id = $this->input->post('reply_comment');
            $data=array(              
              'id_title'              => $id_title,
              'id_user'               => $user_id,
              'subject'               => $subject,
              'text_comment'          => $text_comment,
              'reply_id'              => $reply_id,
              'created_at'            => $now,
        );
        $this->db->insert('comment', $data);
        $timestamp = strtotime($now);
        $time = timespan($timestamp, $now) . ' ago';
        // notif
        $for_id = array();
        $insert_notif = array();
    if ($reply_id == '0') #comment on course 
    {
        $getcomment = $this->home_model->GetData(['id_title' => $id_title,'reply_id' => $reply_id],'comment')->result();
        if ($user_id != $id_usermaker) {
        $for_id[] = $id_usermaker;
    }
        foreach ($getcomment as $comment) {
                if (!in_array($comment->id_user, $for_id)){
                    if ($user_id != $comment->id_user) {
                        $for_id[] = $comment->id_user;
                    }
            
        }
        }

    }
    else 
    {
        $getcomment = $this->home_model->GetData(['id_title' => $id_title,'reply_id'=>$reply_id],'comment')->result();
        $id_replyid = $this->home_model->GetData(['id_comment' => $reply_id],'comment')->row('id_user');
        if ($user_id != $id_replyid) {
        $for_id[] = $id_replyid;
        }
        foreach ($getcomment as $comment) {
                if (!in_array($comment->id_user, $for_id)){
                    if ($user_id != $comment->id_user) {
                        $for_id[] = $comment->id_user;
                    }
            
        }
        }

    }
        if (!empty($for_id)) {

        $id_comment =  $this->home_model->GetData(['id_title'=> $id_title,'id_user'=> $user_id,'reply_id'=> $reply_id,'subject'=> $subject,'text_comment'=> $text_comment,'created_at'=> $now,],'comment')->row('id_comment');

        for($i = 0; $i < count($for_id); $i++)
        {
            $insert_notif[] = array(
              'get_id'                 => $id_comment,
              'id_user'                => $for_id[$i],
              'type'                   => 'comment',
              'created_at'             => $now,
            );
        }
         $this->db->insert_batch('notification', $insert_notif);
     }
    // notif end
        if ($this->db->affected_rows() > 0) {

            if ($reply_id != '0') {
            $reply_amount = $this->home_model->GetSelectData('COUNT(id_comment) as comment_amount',['id_title' => $id_title,'reply_id'=>$reply_id],'comment')->row('comment_amount');
                $id_comment = $this->course_model->GetData(['subject'=> $subject,'text_comment'=>$text_comment,'created_at'=>$now,'reply_id'=>$reply_id,'id_user'=>$user_id],'comment')->row('id_comment');
                return $subject.'|'.$username.'|'.$text_comment.'|'.$time.'|'.$reply_amount.'|'.$id_comment.'|'.$user_id;
            }
            else {
                $id_comment = $this->course_model->GetData(['subject'=> $subject,'text_comment'=>$text_comment,'created_at'=>$now,'reply_id'=>$reply_id,'id_user'=>$user_id],'comment')->row('id_comment');
                return $subject.'|'.$username.'|'.$text_comment.'|'.$time.'|'.$id_comment.'|'.$user_id;
            }
        } else {
            return "false";
        }

  }
  public function enroll_announce($id_title){
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d H:i:s');    
    $user_id = $this->session->userdata('logged_id');
    $user_maker = $this->GetData(['id_title'=>$id_title],'course_title')->row('id_user');
    $getenrolled = $this->GetData(['id_title'=>$id_title],'enroll_course')->result();
    $getsubscribed = $this->GetData(['for_id'=>$user_maker],'subscribe')->result();
    $for_id = array();
    $insert_notif = array();
    foreach ($getenrolled as $enroll) {
                if (!in_array($enroll->id_user, $for_id)){
                    if ($user_id != $enroll->id_user) {
                        $for_id[] = $enroll->id_user;
                    }
            
        }
    }
    foreach ($getsubscribed as $subs) {
                if (!in_array($subs->id_user, $for_id)){
                    if ($user_id != $subs->id_user) {
                        $for_id[] = $subs->id_user;
                    }
            
        }
    }
    if (!empty($for_id)) {
    for($i = 0; $i < count($for_id); $i++)
        {
            $insert_notif[] = array(
              'get_id'                 => $id_title,
              'id_user'                => $for_id[$i],
              'type'                   => 'course_title',
              'created_at'             => $now,
            );
        }
         $this->db->insert_batch('notification', $insert_notif);
     }
  }

  public function comment_del(){ //delete comment, dsb
                $id_comment = $this->input->post('id_comment');
                $this->db->where(['id_comment'=>$id_comment])
                ->delete('comment');
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
    public function GetJoin($select,$where)
    {
      return $this->db->select($select)->where($where);
    }
    public function GetListDiscuss($where){
      return $this->db->select('comment.*, user.username, course_title.random_code, course_title.title, comment.created_at as comment_created')
            ->where($where)
            ->join('user', 'comment.id_user = user.id_user')
            ->join('course_title', 'comment.id_title = course_title.id_title')
            ->group_by('id_comment')
            ->get('comment')
            ->result();
    }
}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */