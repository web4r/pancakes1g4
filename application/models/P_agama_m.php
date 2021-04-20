<?php

class P_agama_m extends CI_Model
{
    public function get_jaksa()
    {
        return $this->db->get('tm_agama_jaksa')->result();
    }

    public function save_jaksa($data)
    {
        return $this->db->insert('tm_agama_jaksa', $data);
    }

    public function delete_jaksa($id_agama_jaksa)
    {
        $result = $this->db->delete('tm_agama_jaksa', array('id_agama_jaksa' => $id_agama_jaksa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getById($id_agama_jaksa)
    {
        $this->db->select('*');
        $this->db->from('tm_agama_jaksa');
        $this->db->where('tm_agama_jaksa.id_agama_jaksa', $id_agama_jaksa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_jaksa($id_agama_jaksa, $data)
    {
        return $this->db->where('id_agama_jaksa', $id_agama_jaksa)->update('tm_agama_jaksa', $data);
    }


    public function get_hakim()
    {
        return $this->db->get('tm_agama_hakim')->result();
    }

    public function save_hakim($data)
    {
        return $this->db->insert('tm_agama_hakim', $data);
    }

    public function delete_hakim($id_agama_hakim)
    {
        $result = $this->db->delete('tm_agama_hakim', array('id_agama_hakim' => $id_agama_hakim));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getByIdHakim($id_agama_hakim)
    {
        $this->db->select('*');
        $this->db->from('tm_agama_hakim');
        $this->db->where('tm_agama_hakim.id_agama_hakim', $id_agama_hakim);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_hakim($id_agama_hakim, $data)
    {
        return $this->db->where('id_agama_hakim', $id_agama_hakim)->update('tm_agama_hakim', $data);
    }
}
