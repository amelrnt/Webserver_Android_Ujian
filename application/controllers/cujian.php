<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cujian extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function login(){
		if($_POST){
			$uname = $_POST['username'];
			$pass = $_POST['password'];
			if($uname=="admin" && $pass=="admin"){
				$array = array('akses' => 1 , );
				$this->session->set_userdata($array);
				$this->index();
			}
		}else{
		$this->load->view('config');
		$this->load->view('login');
		}
	}
	public function index($param = null)
	{
		if($this->session->userdata('akses')== FALSE){
			$this->login();
		}else{
		$this->load->model('adminmod');
		$data['paket']=$this->adminmod->ambilPaket();
		$data['version']=$this->adminmod->detailData('tbl_versi','id_ver',1);
		// print_r($data['version']['version']);
		if(isset($param)){
			$data['msg']=$param['msg'];
			$data['alert']=$param['alert'];
			$this->load->view('config');
			$this->load->view('index',$data);
			$this->load->view('input_web');
			$this->load->view('input_mobile');
			$this->load->view('input_jaringan');
			$this->load->view('input_algoritma');
			$this->load->view('input_basisdata');
			$this->load->view('input_objek');
			$this->load->view('input_gui');
			
		}else{
			$this->load->view('config');
			$this->load->view('index',$data);
			$this->load->view('input_web');
			$this->load->view('input_mobile');
			$this->load->view('input_jaringan');
			$this->load->view('input_algoritma');
			$this->load->view('input_basisdata');
			$this->load->view('input_objek');
			$this->load->view('input_gui');

		}
	}
	}

	function tess(){
		$this->load->model('adminmod');
		$data = $this->adminmod->jumlahsoal(1,1);
		print_r(count($data));
	}
	// public function input($kategori){
	// 	$this->load->model('adminmod');
	// 	if($_POST){
	// 		switch ($kategori) {
	// 			case 'web': $type=1; break;
	// 			case 'mobile': $type=2; break;
	// 			case 'jaringan': $type=3; break;
	// 			case 'algoritma': $type=4; break;
	// 			case 'basisdata': $type=5; break;
	// 			case 'objek': $type=6; break;
	// 			case 'gui': $type=7; break;
				
	// 			default:
	// 				$type = 0;
	// 				break;
	// 		}

	// 		$cek = $this->adminmod->jumlahsoal($type,$_POST['paket']);

	// 		if(!isset($_POST['key'])){
	// 			$data['msg']="Jawaban belum dipilih";
	// 			$data['alert']="danger";
	// 			$this->index($data);
	// 		}else{
							
	// 			if(count($cek)>19){
	// 				$data['msg']="Soal lebih dari 20!";
	// 				$data['alert']="danger";
	// 				$this->index($data);
	// 			}else{
	// 				$data=array(
	// 					'soal'=>$_POST['pertanyaan'],
	// 					'pil_a'=>$_POST['pil_a'],
	// 					'pil_b'=>$_POST['pil_b'],
	// 					'pil_c'=>$_POST['pil_c'],
	// 					'pil_d'=>$_POST['pil_d'],
	// 					'jwban'=>$_POST['key'],
	// 					'kategori'=>$type,
	// 					'paket'=>$_POST['paket']
	// 					);
	// 				$this->adminmod->tambahData("tbl_soal",$data);
	// 				$data['msg']="Soal berhasil ditambahkan.";
	// 				$data['alert']="success";
	// 				$this->index($data);
	// 			}
	// 		}
	// 	}
			

	// }

	// public function input($kategori){
	// 	$this->load->model('adminmod');
	// 	if($_POST){
	// 		switch ($kategori) {
	// 			case 'web': $type=1; break;
	// 			case 'mobile': $type=2; break;
	// 			case 'jaringan': $type=3; break;
	// 			case 'algoritma': $type=4; break;
	// 			case 'basisdata': $type=5; break;
	// 			case 'objek': $type=6; break;
	// 			case 'gui': $type=7; break;
				
	// 			default:
	// 				$type = 0;
	// 				break;
	// 		}

	// 		$cek = $this->adminmod->jumlahsoal($type,$_POST['paket']);

	// 		if(!isset($_POST['key'])){
	// 			$data['msg']="Jawaban belum dipilih";
	// 			$data['alert']="danger";
	// 			$this->index($data);
	// 		}else{
							
	// 			if(count($cek)>19){
	// 				$data['msg']="Soal lebih dari 20!";
	// 				$data['alert']="danger";
	// 				$this->index($data);
	// 			}else{
	// 				$data=array(
	// 					'soal'=>$_POST['pertanyaan'],
	// 					'pil_a'=>$_POST['pil_a'],
	// 					'pil_b'=>$_POST['pil_b'],
	// 					'pil_c'=>$_POST['pil_c'],
	// 					'pil_d'=>$_POST['pil_d'],
	// 					'jwban'=>$_POST['key'],
	// 					'kategori'=>$type,
	// 					'paket'=>$_POST['paket']
	// 					);
	// 				$this->adminmod->tambahData("tbl_soal",$data);
	// 				$data['msg']="Soal berhasil ditambahkan.";
	// 				$data['alert']="success";
	// 				$this->index($data);
	// 			}
	// 		}
	// 	}
			

	// }
	public function input($kategori){
		$this->load->model('adminmod');
		if($_POST){
			if($kategori=="web"){		
				if(isset($_FILES)){
				// $gambar=basename($_FILES["filegambar"]["name"],".jpg");
				// $target="uploads/";
				// $target=$target.basename( $_FILES['filegambar']['name']);
 				
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"1",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"1",
					'paket'=>$_POST['paket']
					);
				}
			}
			else if($kategori=="mobile"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					// 'gambar'=>$gambar,
					'kategori'=>"2",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"2",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=="jaringan"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"3",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"3",
					'paket'=>$_POST['paket']
					);
			}
			}
			else if($kategori=="algoritma"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"4",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"4",
					'paket'=>$_POST['paket']
					);
				}
			}
			else if($kategori=="basisdata"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"5",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"5",
					'paket'=>$_POST['paket']
					);
				}
			}
			else if($kategori=="objek"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"6",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"6",
					'paket'=>$_POST['paket']
					);
				}
			}
			else if($kategori=="gui"){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"7",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"7",
					'paket'=>$_POST['paket']
					);
				}
			}
			$this->adminmod->tambahData("tbl_soal",$data);
			$data['msg']="Soal berhasil ditambahkan.";
			$data['alert']="success";
			$this->index($data);

		}
	}


	public function banksoal($param){
		$this->load->model('adminmod');
		$data['paket']=$this->adminmod->ambilPaket();
		if($param=="all"){
		$data['soal']=$this->adminmod->tampilData('tbl_soal');
		$this->load->view('config');
		$this->load->view('banksoal',$data);
		}else if($param=="web"){
			$where=array('kategori'=>1);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="mobile"){
			$where=array('kategori'=>2);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="jaringan"){
			$where=array('kategori'=>3);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="algoritma"){
			$where=array('kategori'=>4);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="basisdata"){
			$where=array('kategori'=>5);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="objek"){
			$where=array('kategori'=>6);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
		}else if($param=="gui"){
			$where=array('kategori'=>7);
			$data['soal']=$this->adminmod->dataFilter('tbl_soal',$where);
			$this->load->view('config');
			$this->load->view('banksoal',$data);
	}
}
	public function tambahpaket(){
		if($_POST){
			$this->load->model('adminmod');
			$data = array(
					'paket'=>"",
					'nama_paket'=>$_POST['namapaket']
				);
			$this->adminmod->tambahData('tbl_paket',$data);
			$data['msg']="Paket berhasil dibuat.";
			$data['alert']="success";
			$this->index($data);
			redirect('http://localhost:8080/Webserver_Android_Ujian/');
		}
	}

	function sukses(){
		$data['msg']="Import Berhasil";
		$data['alert']="success";
		$this->index($data);
	}

	public function editsoal($kategori,$id){
		$this->load->model('adminmod');
		//$data['reading']=$this->adminmod->tampilData('tbl_reading');
		if(isset($_POST['submit'])){
		if ($kategori=='1') {
			if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"1",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"1",
					'paket'=>$_POST['paket']
					);
				}
		}else if($kategori=='2'){
			if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"2",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"2",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=='3'){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"3",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"3",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=='4'){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"4",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"4",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=='5'){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"5",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"5",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=='6'){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"6",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"6",
					'paket'=>$_POST['paket']
					);
				}
			}else if($kategori=='7'){
				if(isset($_FILES)){
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"7",
					'paket'=>$_POST['paket']
					);	
				}else{
				$data=array(
					'soal'=>$_POST['pertanyaan'],
					'pil_a'=>$_POST['pil_a'],
					'pil_b'=>$_POST['pil_b'],
					'pil_c'=>$_POST['pil_c'],
					'pil_d'=>$_POST['pil_d'],
					'jwban'=>$_POST['key'],
					'kategori'=>"7",
					'paket'=>$_POST['paket']
					);
				}
			}
		
		$this->adminmod->updateData('tbl_soal','id',$id,$data);
			$data['msg']="Soal berhasil di edit.";
			$data['alert']="success";
			$this->index($data);
			redirect(base_url('index.php/cujian/banksoal/all'));
		}
		$data['paket']=$this->adminmod->ambilPaket();
		$where=array('id'=>$id);
		$data['edit']=$this->adminmod->dataFilter('tbl_soal',$where);
		$data['id']=$id;
		$this->load->view('config');
		if($kategori==1){
			$this->load->view('md_web',$data);
		}else if($kategori==2){
			$this->load->view('md_mobile',$data);
		}else if($kategori==3){
			$this->load->view('md_jaringan',$data);
		}else if($kategori==4){
			$this->load->view('md_algoritma',$data);
		}else if($kategori==5){
			$this->load->view('md_basisdata',$data);
		}else if($kategori==6){
			$this->load->view('md_objek',$data);
		}else if($kategori==7){
			$this->load->view('md_gui',$data);
		
	
}
}
	public function hapussoal($id){
		$this->load->model('adminmod');
		$this->adminmod->hapusData('tbl_soal','id',$id);
		$data['msg']="Soal dihapus.";
		$data['alert']="danger";
		$this->index($data);
	}

	public function hapusPaket(){
		$this->load->model('adminmod');
		if(isset($_POST['submit'])){
			$idpkt = $_POST['paket'];
			$this->adminmod->hapusData("tbl_soal","paket",$idpkt);
			// $this->adminmod->hapusData("paket",$idpkt);
			$this->adminmod->hapusData("tbl_paket","paket",$idpkt);
			$data['msg']="Data berhasil di hapus.";
			$data['alert']="success";
			$this->index($data);
		}
	}

	public function setupdate(){
		$this->load->model('adminmod');
		if(isset($_POST['submit'])){
			$data=array(
				'version'=>$_POST['version'],
				'detail'=>$_POST['paket']
			);
		$this->adminmod->updateData('tbl_versi','id_ver','1',$data);
		$data['msg']="Update berhasil di atur.";
		$data['alert']="success";
		$this->index($data);	
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->login();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */