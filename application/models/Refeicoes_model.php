<?php

class Refeicoes_model  extends CI_Model
{
    public function __construct()	{
        $this->load->database();
    }
    public function insert($data) {
        return $this->db->insert('refeicoes',$data);
    }
    public function update($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('refeicoes', $data);
    }
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('refeicoes');
    }
    public function selectAll()
    {
        $sql = "select * from refeicoes as t ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectByID($id)
    {
        $sql = "select * from refeicoes as t where  t.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}