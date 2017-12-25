<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['user'] = $this->admin_model->get_data_user();
		// $data['course'] = $this->admin_model->get_data_course();

		
		$this->load->library('pagination');

		    $config['base_url'] = base_url().'index.php/admin/index';
			$config['total_rows'] = $this->admin_model->total();
			$config['per_page'] = 5;
			$config['uri_segment'] =3;
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open']="<li>";
			$config['next_tagl_close']="</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] ="<li>";
			$config['first_tagl_close'] ="</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			$start = $this->uri->segment(3,0);

			$rows = $this->admin_model->get_data_course($config['per_page'],$start);

			$data['course'] = $rows;
			$data['pagination'] = $this->pagination->create_links();
			$data['start'] = $start;
			$this->load->view('admin_view',$data);
	}

	// public function get_user(){
	// 	if($this->session->userdata('admin_login')==TRUE){
	// 		$data['main_view'] = 'admin_view';
	// 		$data['user'] = $this->admin_model->get_data_admin();
	// 		$this->load->view('template',$data);
	// 	}
	// }

	// public function get_course(){
	// 	if($this->session->userdata('admin_login') == TRUE){
	// 		$data['main_view'] = 'admin_view';

	// 		$this->load->view('template',$data);
	// 	}
	// }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */