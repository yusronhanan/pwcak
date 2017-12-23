<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

// type action  like = 0 , comment = 1 

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
              'type_action'           => 0, #type like = 0
              // 'reply_comment'      => , #buat comment
              // 'text_comment'       => , #buat comment
              // 'status'          	  => ,
              'created_at'            => $now,
        );
        $this->db->insert('user_action', $data);
        }
		
        if ($this->db->affected_rows() > 0) {
        	$like_amount = $this->GetLikeAmount(['id_title' => $id_title])->row('like_amount');
            return $like_amount;
        } else {
            return "false";
        }

	}
	public function GetData($where,$table)
    {
      return $this->db->where($where)->get($table);
    }
    public function GetLikeAmount($where)
    {
      return $this->db->select('COUNT(id_action) as like_amount')->where($where)->get('user_action');
    }

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */