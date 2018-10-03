<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('jurnalModel');
		
		if(!$this->session->userdata('hb_logged_in')){
			redirect('Login');
		}
	}

	public function index()
	{
		$data['dataJurnal'] = $this->jurnalModel->selectAll();
		$this->load->view('dataJurnal',$data);
	}

	public function tambahJurnal(){
		$this->load->view('formUpload');

	}

	public function prosesUpload(){
			$data['judul'] = $this->input->post('judul');
			$data['pengarang'] = $this->input->post('pengarang');
			$data['tahun'] = $this->input->post('tahun');
			$data['keyword'] = $this->input->post('keyword');
			$data['abstrak'] = $this->input->post('abstrak');

			print_r($_FILES);

			 $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'pdf|docx|doc|PDF';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);

                        $this->load->view('formUpload', $error);
                }
                else
                {
                    $data2 = array('upload_data' => $this->upload->data());
                   

                    $data['file'] = $data2['upload_data']['file_name'];
                    $this->jurnalModel->insertJurnal($data);

					redirect(site_url('Jurnal'));
                }
			
	}
	
	public function prosesHapus()
        {
                $idtodelete=$this->input->post('kdJurnal');

                $this->jurnalModel->deleteJurnal($idtodelete);
                redirect(site_url('Jurnal'));
        }

	public function tampilJurnal(){
		$data['dataJurnal'] = $this->jurnalModel->selectAll();
		$this->load->view('dataJurnal',$data);
	}
}
