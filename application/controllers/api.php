<?php
class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('version_model');
        $this->load->model('soal_model');
        $this->load->model('paket_model');
    }

    public function __destruct()
    {
        header('Content-type: application/json');
    }

    function check_version()
    {
		echo json_encode($this->version_model->first());
	}

	function update_soal($paket)
    {
		echo json_encode($this->soal_model->find(['paket' => $paket], 'id'));
	}

	function update_paket()
    {
        echo json_encode($this->paket_model->findAll());
	}
}