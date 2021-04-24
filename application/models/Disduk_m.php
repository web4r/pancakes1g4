<?php

class Disduk_m extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('tm_akte')->result();
    }

    public function save_akte($data)
    {
        return $this->db->insert('tm_akte', $data);
    }

    public function delete_akte($id_akte_kelahiran)
    {
        $result = $this->db->delete('tm_akte', array('id_akte_kelahiran' => $id_akte_kelahiran));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdAkte($id_akte_kelahiran)
    {
        $this->db->select('*');
        $this->db->from('tm_akte');
        $this->db->where('tm_akte.id_akte_kelahiran', $id_akte_kelahiran);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_akte($id_akte_kelahiran, $data)
    {
        return $this->db->where('id_akte_kelahiran', $id_akte_kelahiran)->update('tm_akte', $data);
    }
}
