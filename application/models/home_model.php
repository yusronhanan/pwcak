<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');
	}
	public function GetListPCourses(){
		// popular course list
		return $this->db->limit(3,0) 
            ->get('course_title')
            ->result();
	}
	
	public function GetListRCourses(){
		return $this->db
			      ->limit(6,0) 
            ->get('course_title')
            ->result();
	}

  public function GetCourseVerified()
  {
    return $this->db
                ->where('verified',1)
                ->limit(9,0)
                ->get('course_title')
                ->result();
  }
	public function thumb_up(){  #like course
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
		$username = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
		$random_code = $this->input->post('random_code');
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$for_id = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_user');

		$query = $this->GetData(['id_title'=>$id_title,'id_user'=>$user_id],'like_course');
        if ($query->num_rows() > 0) {
    
          $this->db->where(['get_id'=>$query->row('id_likecourse'), 'id_user'=>$user_id])
                ->delete('notification');
           $this->db->where(['id_title'=>$id_title,'id_user'=>$user_id])
           			->delete('like_course');
        } 
         else {
            $data=array(              
              'id_title'           	  => $id_title,
              'id_user'           	  => $user_id,
              'created_at'            => $now,
        );
        $this->db->insert('like_course', $data);
        $id_likecourse= $this->GetData(['id_title'=>$id_title,'id_user'=>$user_id],'like_course')->row('id_likecourse');
        if ($for_id != $user_id) {
        $notif = array(              
              'get_id'                 => $id_likecourse,
              'id_user'                => $for_id,
              'type'                    => 'like_course',
              'created_at'              => $now,
        );
         $this->db->insert('notification', $notif);
          
        }
        }
		
        if ($this->db->affected_rows() > 0) {
        	$like_amount = $this->home_model->GetSelectData('COUNT(id_likecourse) as like_amount',['id_title' => $id_title], 'like_course')->row('like_amount');
            return $like_amount;
        } else {
            return "false";
        }

	}
  public function thumb_comment(){
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d H:i:s');
    $user_id = $this->session->userdata('logged_id');
    $username = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
    // $random_code = $this->input->post('random_code');
    $reply_id = $this->input->post('id_comment');
    
    $id_title = $this->input->post('id_title');
    $type_action = $this->input->post('type_action');
    $type_delete = $this->input->post('type_delete'); #if click like, dislike delete, and reverse
    $for_id = $this->course_model->GetData(['id_comment'=>$reply_id],'comment')->row('id_user');

    $query = $this->GetData(['id_title'=>$id_title,'id_user'=>$user_id,'type'=>$type_action,'id_comment' => $reply_id],'like_comment');
        if ($query->num_rows() > 0) {
           $this->db->where(['get_id'=>$query->row('id_likecomment'),'id_user'=>$user_id])
                ->delete('notification');
           $this->db->where(['id_title'=>$id_title,'id_user'=>$user_id,'type'=>$type_action,'id_comment' => $reply_id])
                ->delete('like_comment');
        } 
         else {
            $data=array(              
              'id_title'              => $id_title,
              'id_comment'            => $reply_id,
              'id_user'               => $user_id,
              'type'                  => $type_action, #type like = 0
              'created_at'            => $now,
        );
        $this->db->insert('like_comment', $data);
        $id_likecomment= $this->GetData(['id_title'=>$id_title,'id_user'=>$user_id,'type'=>$type_action,'id_comment' => $reply_id],'like_comment')->row('id_likecomment');
        if ($for_id != $user_id) {
        $notif = array(              
              'get_id'                  => $id_likecomment,
              'id_user'                 => $for_id,
              'type'                    => 'like_comment',
              'created_at'              => $now,
        );
         $this->db->insert('notification', $notif);
          
        }
        }
    
        if ($this->db->affected_rows() > 0) {
          $id_likecomment_delete = $this->GetData(['id_title'=>$id_title,'id_user'=>$user_id,'type'=>$type_delete,'id_comment' => $reply_id],'like_comment')->row('id_likecomment');
          $this->db->where(['get_id'=>$id_likecomment_delete])
                ->delete('notification');
          $this->db->where(['id_title'=>$id_title,'id_user'=>$user_id,'type'=>$type_delete,'id_comment' => $reply_id])
                ->delete('like_comment');
          $like_amount = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_title'=>$id_title,'type'=>'2','id_comment' => $reply_id],'like_comment')->row('like_amount'); 
          $dislike_amount = $this->home_model->GetSelectData('COUNT(id_likecomment) as like_amount',['id_title'=>$id_title,'type'=>'4','id_comment' => $reply_id],'like_comment')->row('like_amount');
            return $like_amount.'|'.$dislike_amount;
        } else {
            return "false";
        }
  }
  
  public function subs_up(){
    date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    $now = date('Y-m-d H:i:s');
    $user_id = $this->session->userdata('logged_id');
    $from_username = $this->course_model->GetData(['id_user'=> $user_id],'user')->row('username');
    
    $for_id = $this->input->post('id_user');
    $for_username = $this->course_model->GetData(['id_user'=> $for_id],'user')->row('username');
    

    $query = $this->GetData(['id_user'=>$user_id,'for_id'=>$for_id],'subscribe');
        if ($query->num_rows() > 0) {
           $this->db->where(['id_user'=>$user_id,'for_id'=>$for_id])
                ->delete('subscribe');
        } 
         else {
            $data=array(              
              'id_user'               => $user_id,
              'for_id'                => $for_id,
              'created_at'            => $now,
        );
        $this->db->insert('subscribe', $data);
        $id_subscribe= $this->GetData(['id_user'=>$user_id,'for_id'=>$for_id],'subscribe')->row('id_subscribe');
        $notif = array(              
              'get_id'                  => $id_subscribe,
              'id_user'                 => $for_id,
              'type'                    => 'subscribe',
              'created_at'              => $now,
        );
         $this->db->insert('notification', $notif);
         
        }
    
        if ($this->db->affected_rows() > 0) {
          $subs_amount = $this->home_model->GetSelectData('COUNT(id_subscribe) as subs_amount',['id_user' => $for_id],'subscribe')->row('subs_amount');
            return $subs_amount;
        } else {
            return "false";
        }

  }
  // public function subscribe(){
  //     $user_id = $this->session->userdata('logged_id');
  //     $mini_notif = $this->input->post('mini_notif');
  //     if (!empty($mini_notif)) {
  //      if (count($this->unseen_subscribe()) > 15) {
  //         return $this->db->where('for_id',$user_id)
  //             ->order_by('created_at','DESC')
  //             // ->limit(15,0)
  //             ->get('subscribe')
  //             ->result();
  //     }
  //     else{
  //       return $this->db->where('for_id',$user_id)
  //             ->order_by('created_at','DESC')
  //             ->limit(15,0)
  //             ->get('subscribe')
  //             ->result();
  //     }
  //     }
  //     else{
  //       return $this->db->where('for_id',$user_id)
  //             ->order_by('created_at','DESC')
  //             // ->limit(15,0)
  //             ->get('subscribe')
  //             ->result();
  //           }
  //     }
  public function notification(){
      $user_id = $this->session->userdata('logged_id');
      $mini_notif = $this->input->post('mini_notif');
      if (!empty($mini_notif)) {
       if (count($this->unseen_notification()) > 15) {
          return $this->db->where('id_user',$user_id)
              ->order_by('created_at','DESC')
              ->get('notification')
              ->result();
      }
      else{
        return $this->db->where('id_user',$user_id)
                 ->limit(15,0)
              ->order_by('created_at','DESC')
              ->get('notification')
              ->result();
      }
      }
      else{
        return $this->db->where('id_user',$user_id)
              ->order_by('created_at','DESC')
              ->get('notification')
              ->result();
            }
      }
    

  public function unseen_notification(){
      $user_id = $this->session->userdata('logged_id');
      return $this->db->where('id_user',$user_id)
              ->where('status','0')
              ->get('notification')
              ->result();
      }

      // public function unseen_subscribe() #notif
      // {
      // $user_id = $this->session->userdata('logged_id');
      // return $this->db->where('for_id',$user_id)
      //         ->where('status','0')
      //         ->order_by('created_at','DESC')
      //         ->get('subscribe')
      //         ->result();
      // }
  public function nullNotification(){
        $userid = $this->session->userdata('logged_id');
        $this->db->where('id_user',$userid)
                 ->where('status','0')
                 ->update('notification', array('status' => '1'));

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    // public function nullNotifSubscribe(){
    //   $userid = $this->session->userdata('logged_id');
    //     $this->db->where('for_id',$userid)
    //              ->where('status','0')
    //              ->update('subscribe', array('status' => '1'));

    //     if ($this->db->affected_rows() > 0) {
    //         return TRUE;
    //     } else {
    //         return FALSE;
    //     }
    // }

    // public function GetDiscussTerbanyak($id_title,$limit){
    //   $query = 'SELECT *, COUNT(reply_id) as total from user_action WHERE type_action = 3 AND WHERE id_title = '.$id_title.' GROUP BY id_title
    // ORDER BY id_action DESC LIMIT '.$limit;
    // }
	public function GetData($where,$table)
    {
      return $this->db->where($where)->get($table);
    }
    public function GetSelectData($select,$where,$table)
    {
      return $this->db->select($select)->where($where)->get($table);
    }
    public function GetLimitData($select,$where,$limit,$start,$table)
    {
      return $this->db->select($select)->where($where)->limit($limit,$start)->get($table);
    }
    public function GetSubscribe($select,$where)
    {
      return $this->db->select($select)->where($where)->get('subscribe');
    }
    

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */