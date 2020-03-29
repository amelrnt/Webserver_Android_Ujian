<?php

class Adminmod extends CI_Model{

    function tambahData($namaTabel,$data){
        $this->db->insert($namaTabel,$data);
    }

    function tampilData($namaTabel){
        $this->db->select()->from($namaTabel);
        $query=$this->db->get();
        return $query->result_array();
    }

    function dataFilter($namaTabel,$where){
        $this->db->select()->from($namaTabel)->where($where);
        $query=$this->db->get();
        return $query->result_array();
    }

    function updateData($namaTabel,$primaryKey,$key,$data){
        $this->db->where($primaryKey,$key);
        $this->db->update($namaTabel,$data);
    }

    function detailData($namaTabel,$primaryKey,$key){
        $this->db->select()->from($namaTabel)->where($primaryKey,$key);
        $query = $this->db->get();
        return $query->first_row('array');
    }

    function hapusData($tbl,$key,$id){
        $this->db->where($key,$id);
        $this->db->delete($tbl);
    }

    function tampilCari($tbl,$key,$id){
        $where=$key." like '%".$id."%'";
        $this->db->select();
        $this->db->from($tbl)->where($where);
        $query=$this->db->get();
        return $query->result_array();
    }

    function ambilPaket(){
        $this->db->select()->from('tbl_paket');
        $query = $this->db->get();
        return $query->result_array();
    }

    function ambilJumlahRecord($namaTabel){
        $this->db->select()->from($namaTabel);
        $jumlah=$this->db->count_all_results();
        return $jumlah;
    }

    function jumlahsoal($kategori,$paket){
        $this->db->select()->from('tbl_soal')->where(array('kategori'=>$kategori,'paket'=>$paket));
        $return = $this->db->get();
        return $return->result_array();
    }
}