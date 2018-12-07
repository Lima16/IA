<?php

class Pedidos_model  extends CI_Model
{
    public function __construct()	{
        $this->load->database();
    }
    public function insert($data) {
        return $this->db->insert('pedidos',$data);
    }
    public function update($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('pedidos', $data);
    }
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pedidos');
    }
    public function selectAll()
    {
        $sql = "select * from pedidos as t ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectByID($id)
    {
        $sql = "select * from pedidos as t where  t.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}