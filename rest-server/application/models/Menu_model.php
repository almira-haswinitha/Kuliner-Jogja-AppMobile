<?php

class menu_model extends CI_Model
{
    public function getdatamenu($id_menu = null)
    {
        if($id_menu === null){
            return $this->db->get('menu')->result_array();
        } else {
            return $this->db->get_where('menu',['id_menu' => $id_menu])->result_array();
        }
    }

    public function deletedatamenu($id_menu)
    {
        $this->db->delete('menu', ['id_menu' => $id_menu]);
        return $this->db->affected_rows();
    }

    public function createddatamenu($data)
    {
        $this->db->insert('menu',$data);
        return $this->db->affected_rows();
    }

    public function updatedatamenu($data, $id_menu)
    {
        $this->db->update('menu', $data, ['id_menu' => $id_menu]);
        return $this->db->affected_rows();
    }
}