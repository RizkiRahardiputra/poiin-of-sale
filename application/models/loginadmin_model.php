<?php 

class loginadmin_model extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	public function addpengelolaPengelola()
    {
        $datapengelol = [
            "id" => $this->input->post('id', true),
            "fullname" => $this->input->post('fullname', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
            // "kelasproduct" => $this->input->post('kelasproduct', true),
            // "alamatsupplier" => $this->input->post('alamatsupplier', true)

        ];

        $this->db->insert('akun', $datapengelol);
    }
	
}