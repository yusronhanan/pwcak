<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

// type action  like title course = 0 , comment title course = 1, like comment = 2, reply comment = 3

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course_model');
		$this->load->model('auth_model');
		$this->load->model('home_model');
	}
	public function GetListPCourses(){
		// popular course list
		return $this->db
			// ->select()
            // ->where('dumm',$dumm)
            ->limit(3,0) 
            ->get('course_title')
            ->result();

            // ->where('product_order_detail.status','Proses Kirim')
            // ->or_where('product_order.user_id',$user_id)
            // ->where('product_order_detail.status','Pesanan ditujukan ke Merchant')
            // ->join('product_order_detail', 'product_order.id = product_order_detail.order_id')
            // ->order_by('product_order_detail.last_update', 'DESC')
	}
	
	public function GetListRCourses(){
		// random course list
		return $this->db
			->limit(6,0) 
            ->get('course_title')
            ->result();
	}
	public function thumb_up(){
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('logged_id');
		$username = $this->auth_model->GetUser(['id_user' => $user_id])->row('username');
		$random_code = $this->input->post('random_code');
		$id_title = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_title');
		$for_id = $this->course_model->GetData(['random_code'=> $random_code],'course_title')->row('id_user');

		$query = $this->GetData(['id_title'=>$id_title,'from_id'=>$user_id,'type_action'=>'0'],'user_action');
        if ($query->num_rows() > 0) {
           $this->db->where(['id_title'=>$id_title,'from_id'=>$user_id,'type_action'=>'0'])
           			->delete('user_action');
        } 
         else {
            $data=array(              
              'id_title'           	  => $id_title,
              'from_id'           	  => $user_id,
              'from_username'         => $username,
              'for_id'				  => $for_id,
              'type_action'           => 0, #type like = 0
              // 'reply_comment'      => , #buat comment
              // 'text_comment'       => , #buat comment
              // 'status'          	  => ,
              'created_at'            => $now,
        );
        $this->db->insert('user_action', $data);
        }
		
        if ($this->db->affected_rows() > 0) {
        	$like_amount = $this->home_model->GetAction('COUNT(id_action) as like_amount',['id_title' => $id_title,'type_action' => '0'])->row('like_amount');
            return $like_amount;
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
    

    $query = $this->GetData(['from_id'=>$user_id,'for_id'=>$for_id],'user_subscribe');
        if ($query->num_rows() > 0) {
           $this->db->where(['from_id'=>$user_id,'for_id'=>$for_id])
                ->delete('user_subscribe');
        } 
         else {
            $data=array(              
              'from_id'               => $user_id,
              'for_id'                => $for_id,
              'from_username'         => $from_username,
              'for_username'          => $for_username,
              'created_at'            => $now,
        );
        $this->db->insert('user_subscribe', $data);
        }
    
        if ($this->db->affected_rows() > 0) {
          $subs_amount = $this->home_model->GetSubscribe('COUNT(id_subscribe) as subs_amount',['for_id' => $for_id])->row('subs_amount');
            return $subs_amount;
        } else {
            return "false";
        }

  }
  public function subscribe(){
      $user_id = $this->session->userdata('logged_id');
      $mini_notif = $this->input->post('mini_notif');
      if (!empty($mini_notif)) {
       if (count($this->unseen_subscribe()) > 15) {
          return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              // ->limit(15,0)
              ->get('user_subscribe')
              ->result();
      }
      else{
        return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              ->limit(15,0)
              ->get('user_subscribe')
              ->result();
      }
      }
      else{
        return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              // ->limit(15,0)
              ->get('user_subscribe')
              ->result();
            }
      }
  public function notification(){
      $user_id = $this->session->userdata('logged_id');
      $mini_notif = $this->input->post('mini_notif');
      if (!empty($mini_notif)) {
       if (count($this->unseen_notification()) > 15) {
          return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              // ->limit(15,0)
              ->get('user_action')
              ->result();
      }
      else{
        return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              ->limit(15,0)
              ->get('user_action')
              ->result();
      }
      }
      else{
        return $this->db->where('for_id',$user_id)
              ->order_by('created_at','DESC')
              // ->limit(15,0)
              ->get('user_action')
              ->result();
            }
      }
    

  public function unseen_notification(){
      $user_id = $this->session->userdata('logged_id');
      return $this->db->where('for_id',$user_id)
              ->where('status','0')
              ->order_by('created_at','DESC')
              ->get('user_action')
              ->result();
      }

      public function unseen_subscribe() #notif
      {
      $user_id = $this->session->userdata('logged_id');
      return $this->db->where('for_id',$user_id)
              ->where('status','0')
              ->order_by('created_at','DESC')
              ->get('user_subscribe')
              ->result();
      }
  public function nullNotification(){
        $userid = $this->session->userdata('logged_id');
        $this->db->where('for_id',$userid)
                 ->where('status','0')
                 ->update('user_action', array('status' => '1'));

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function nullNotifSubscribe(){
      $userid = $this->session->userdata('logged_id');
        $this->db->where('for_id',$userid)
                 ->where('status','0')
                 ->update('user_subscribe', array('status' => '1'));

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

	public function GetData($where,$table)
    {
      return $this->db->where($where)->get($table);
    }
    public function GetAction($select,$where)
    {
      return $this->db->select($select)->where($where)->get('user_action');
    }
    public function GetSubscribe($select,$where)
    {
      return $this->db->select($select)->where($where)->get('user_subscribe');
    }
    

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */