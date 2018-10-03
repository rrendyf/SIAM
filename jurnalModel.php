<?php 
	/**
	* file name : PetugasModel.php
	* locatin : ./application/model
	*/
	class jurnalModel extends CI_Model{
		
		function __construct(){
			parent::__construct();
			//$this->load->database();
		}

		//fungsi untuk menambahkan data
		function insertJurnal($data){
			$this->db->insert('tbjurnal', $data);
		}
	}
?>