<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$data['dataJurnal'] = $this->jurnalModel->selectAll();
		$this->load->view('huser',$data);
	}
}
