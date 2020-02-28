<?php
class Export extends CI_Controller{
	 function __construct(){
        parent::__construct();
        $this->load->model('adminmod');
    }
	function export_paket(){
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=laporan.xls");
		$where = array( 
			'paket' => $this->input->post('paket')
		);
		$data['paket'] = $this->adminmod->dataFilter('tbl_soal',$where);
		$this->load->view('export',$data);
	}
}