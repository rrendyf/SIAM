<?php 
	class jurnalModel extends CI_Model{
		
		function __construct(){
			parent::__construct();
		}

		//fungsi untuk menambahkan data
		function insertJurnal($data){
			$this->db->insert('tbjurnal', $data);
		}
		
		function deleteJurnal($title){
			$this->db->where('kdJurnal',$title);
			$this->db->delete('tbjurnal');
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('tbjurnal');
			$this->db->order_by('kdJurnal');

			return $this->db->get()->result();
		}
	}
?>