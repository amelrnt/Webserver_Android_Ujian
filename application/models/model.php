<?php

class Model extends CI_Model
{
    protected $table_name;

    public function findAll()
    {
        $this->db->select()->from($this->table_name);
        return $this->db->get()->result_array();
    }

    public function find($where = array(), $order = null, $by = 'desc')
    {
        $this->db->select()->from('tbl_soal');

        foreach ($where as $key => $val) {
            $this->db->where($key, $val);
        }

        if ($order != null) {
            $this->db->order_by($order, $by);
        }

        return $this->db->get()->result_array();
    }

    public function first()
    {
        $this->db->select()->from($this->table_name);
        $ver = $this->db->get();
        return $ver->first_row('object');
    }
}
