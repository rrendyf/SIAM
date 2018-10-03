<?php
class M_user extends CI_Model {
	function __construct() {
		parent::__construct();
	}    
	/*function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("tbuser");
    }
    function semua() {
        return $this->db->get("tbuser");
    }
    function getLoginData($usr, $psw) {
        $u = $usr;
        $p = md5($psw);
        $q_cek_login = $this->db->get_where('tbuser', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = '';
                    $sess_data['username'] = $qad->username;
                    $sess_data['nama'] = $qad->nama;
                    $this->session->set_userdata($sess_data);
                }
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
        }
    }*/
	
	// cek keberadaan user di sistem
	// cek keberadaan user di sistem
	function check_user_account($u, $pw){
		// $this->db->where("username", $username);
        // $this->db->where("password", $password);
        // return $this->db->get("user");
        $this->db->where('username', $u);
        $this->db->where('password', md5($pw));
        $this->db->limit(1);
        $Q = $this->db->get('tbuser');
        if ($Q->num_rows() > 0) {
            $row = $Q->row_array();
            return $row;
        } else {
            return array();
        }
	}

// mengambil data user tertentu
	function get_user($id_user){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);

		return $this->db->get();
	}

	function selectAll(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}
}
