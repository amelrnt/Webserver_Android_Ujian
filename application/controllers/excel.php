
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Excel extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    }
    public function index()
    {
        $this->load->view('excel');
    }
    public function upload(){
        $fileName = time().$_FILES['file']['name'];
        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
        $data['msg']="Data berhasil diimpor.";
        $data['alert']="success";
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/'.$media['file_name'];
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Data Tidak Bisa D impor "'.$e->getMessage());
                // die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "id"=> $rowData[0][0],
                    "soal"=> $rowData[0][1],
                    "pil_a"=> $rowData[0][2],
                    "pil_b"=> $rowData[0][3],
                    "pil_c"=> $rowData[0][4],
                    "pil_d"=> $rowData[0][5],
                    "jwban"=> $rowData[0][6],
                    "tipe"=> $rowData[0][7],
                    "paket"=> set_value("paket")

                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("tbl_soal",$data);
                delete_files($media['file_path']);
                
                     
            }
        redirect('cujian/sukses');
            // $this->index($data);
    }
}