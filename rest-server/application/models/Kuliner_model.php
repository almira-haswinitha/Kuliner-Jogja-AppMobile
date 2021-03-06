<?php

class Kuliner_model extends CI_Model
{
    public function getDatakuliner($id_resto = null)
    {
        if($id_resto === null){
            return $this->db->get('kuliner')->result_array();
        } else {
            return $this->db->get_where('kuliner',['id_resto' => $id_resto])->result_array();
        }
    }

    public function deleteDatakuliner($id_resto)
    {
        $this->db->delete('kuliner', ['id_resto' => $id_resto]);
        return $this->db->affected_rows();
    }

    public function createdDatakuliner($data)
    {
        $this->db->insert('kuliner',$data);
        return $this->db->affected_rows();
    }

    public function updateDatakuliner($data, $id_resto)
    {
        $this->db->update('kuliner', $data, ['id_resto' => $id_resto]);
        return $this->db->affected_rows();
    }
}
?>