<?php
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->library('session');
        $this->load->model(array('m_user'));
        
    }
    function index() {
		if($this->session->userdata('hb_logged_in')){
			redirect('Jurnal');
		}
        $this->load->view('login');
    }
	
	
	function proses() {
		if ($this->input->post('username')){ //cek if form submited
			$u = $this->input->post('username'); //get username
			$pw = $this->input->post('password'); //get password
			$row = $this->m_user->check_user_account($u,$pw); //get user
			if (count($row)){ //if user exist then do below
				$data=array(
					'username' => $row['username'],
					'hb_logged_in' => TRUE
				);
				$this->session->set_userdata($data); //set session data
				redirect('Jurnal');
			}else{
				redirect('Login');
			}
		}else{
			redirect('Login');			
		}
        // $this->form_validation->set_rules('username', 'username', 'required|trim');
        // $this->form_validation->set_rules('password', 'password', 'required|trim');
        // if ($this->form_validation->run() == FALSE) {
            // $this->load->view('login');
        // } else {
            // $usr = $this->input->post('username');
            // $psw = $this->input->post('password');
            // $u = $usr;
            // $p = md5 ($psw);
            // $cek = $this->accountmodel->check_user_account($u, $p);
            // if ($cek->num_rows() > 0) {
                // //login berhasil, buat session
                // foreach ($cek->result() as $qad) {
                    // $sess_data['username'] = $qad->username;
                    // $sess_data['password'] = $qad->password;
                    // $this->session->set_userdata($sess_data);
					// echo "$qad->username; $qad->password";
                // }
                // //redirect('Admin');
            // } else {
                // $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                // redirect('login');
            // }
        // }
    }
    function logout() {
		$data = array(
			'username',
			'hb_logged_in'
		);
		$this->session->unset_userdata($data);
		echo  $this->session->userdata('hb_logged_in');		
        redirect('Login');
    }
}