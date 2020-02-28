<?php
class Wservice extends CI_Controller{

	function CheckVersion(){
		$this->load->model('adminmod');
		$result['versi']=$this->adminmod->tampilData('tbl_versi');
		echo json_encode($result);
	}

	function SetUpdate($paket){
		$this->load->model('wsmodel');
		header('Content-type: application/json');
		echo json_encode($this->wsmodel->getSoal($paket));
	}

	function updatesoal($paket){
		$this->load->model('wsmodel');
		$result['tbl_soal']=$this->wsmodel->getSoal($paket);
		echo json_encode($result);
	}

	// function getFile($paket){
	// 	$this->load->model('wsmodel');
	// 	$result['filename']=$this->wsmodel->getFileGambar($paket);
	// 	echo json_encode($result);
	// }

	function updatePaket(){
		$this->load->model('adminmod');
		$result['tbl_paket']=$this->adminmod->tampilData('tbl_paket');
		echo json_encode($result);
	}
}
?>