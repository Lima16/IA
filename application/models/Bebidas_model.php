<?php

class Bebidas_model  extends CI_Model
{
    public function __construct()	{
        $this->load->database();
    }
    public function insert($data) {
        return $this->db->insert('bebidas',$data);
    }
    public function update($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('bebidas', $data);
    }
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bebidas');
    }
    public function selectAll()
    {
        $sql = "select * from bebidas as t ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectByID($id)
    {
        $sql = "select * from bebidas as t where  t.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}