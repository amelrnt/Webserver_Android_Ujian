<?php
	class Wsmodel extends CI_Model{

		function getVersion(){
			$this->db->select()->from('tbl_versi');
			$ver = $this->db->get();
			return $ver->first_row('array');
		}

		function getSoal($paket){
			$this->db->select()->from('tbl_soal')->where('paket',$paket);
			// $query = $this->db->get('tbl_soal',20);
			$soal = $this->db->order_by("id","desc")->get();
			return $soal->result_array();
		}

		// function getFileGambar($paket){
		// 	// $this->db->distinct()-> select( 'gambar')->from('tbl_soal')->where(array('paket'=>$paket));
		// 	// $result = $this->db->get();
		// 	$query = "SELECT DISTINCT gambar FROM tbl_soal WHERE paket =".$paket." AND gambar IS NOT NULL ORDER BY gambar DESC";
		// 	$result = $this->db->query($query);
		// 	return $result->result_array();
		// }
	}
?>