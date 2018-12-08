<?php

class Clientes_model  extends CI_Model
{
    public function __construct()	{
        $this->load->database();
    }
    public function insert($data) {
        return $this->db->insert('cliente',$data);
    }
    public function update($id,$data) {
        $this->db->where('id', $id);
        return $this->db->update('cliente', $data);
    }
    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('cliente');
    }
    public function selectAll()
    {
        $sql = "select * from cliente as t ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectByID($id)
    {
        $sql = "select * from cliente as t where  t.id = {$this->db->escape_like_str($id)} ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


   public function selectByEmailSenha($email, $senha)
    {
        $sql = "select * from cliente as s where  s.email LIKE '{$this->db->escape_like_str($email)}' AND s.senha LIKE '{$this->db->escape_like_str($senha)}' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}