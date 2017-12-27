<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sql_penting extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function index(){

	}
	public function sepuluh_terbanyak(){
		$query ='SELECT *, COUNT(id_title) as total from user_action WHERE type_action = 3 GROUP BY id_title
		ORDER BY created_at DESC
		LIMIT 10';
	}
}

/* End of file sql_penting.php */
/* Location: ./application/models/sql_penting.php */