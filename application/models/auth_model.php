<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	
	public function authentication(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role = $this->GetUser(['email'=>$email])->row('role');
        $id = $this->GetUser(['email'=>$email])->row('id_user');
        $username = $this->GetUser(['email'=>$email])->row('username');
        

        $query = $this->GetUser(['email'=>$email,'password'=>$password]);
        if ($query->num_rows() > 0) {
            $data = [
                'logged_id'     => $id,
                'role'         => $role,
                'username'      => $username,
                'logged_in'     => TRUE,
            ];
            $this->session->set_userdata( $data );
            return TRUE;
        } 
         else {
            return FALSE;
        }
    }
    public function register_user(){

        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $random_code= random_string('alnum',20);

        $data=array(

            'id_user'            => NULL,
            'name'               => $this->input->post('name'),
            'email'              => $this->input->post('email'),
            'username'           => $this->input->post('username'),
            'password'           => $this->input->post('password'),
            'city'               => $this->input->post('city'),
            'bio'                => $this->input->post('bio'),
            'created_at'         => $now,
            'last_update'        => $now,
            'hash_validation'    => $random_code,
        );

        $this->db->insert('user',$data);

        if($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function edit_user(){
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $id_user = $this->session->userdata('logged_id');
        $data=array(

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            // 'username' => $this->input->post('username'),
            // 'password' => $this->input->post('password'),
            'city' => $this->input->post('city'),
            'bio' => $this->input->post('bio'),
            'last_update'        => $now,
        );

        $this->db->where('id_user',$id_user)
                ->update('user', $data);

        if($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
    public function editphoto($photo){
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $id_user = $this->session->userdata('logged_id');
        $data=array(
              'photo'               => $photo['file_name'],
              'last_update'         => $now,
        );

        $this->db->where('id_user',$id_user)
                 ->update('user', $data);

        if($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

	public function GetUser($where)
    {
      return $this->db->where($where)->get('user');
    }

    public function GetAllData($table){
    return $this->db->get($table)->result();
}
}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */