<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

// type action 0 - like , 1 - comment , 2 

	public function __construct()
	{
		parent::__construct();
		
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
	

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */