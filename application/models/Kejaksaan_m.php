<?php

class Kejaksaan_m extends CI_Model
{

    public function get_jaksa()
    {
        return $this->db->get('tm_jaksa')->result();
    }

    public function save_jaksa($data)
    {
        return $this->db->insert('tm_jaksa', $data);
    }

    public function delete_jaksa($id_jaksa)
    {
        $result = $this->db->delete('tm_jaksa', array('id_jaksa' => $id_jaksa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getById($id_jaksa)
    {
        $this->db->select('*');
        $this->db->from('tm_jaksa');
        $this->db->where('tm_jaksa.id_jaksa', $id_jaksa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_jaksa($id_jaksa, $data)
    {
        return $this->db->where('id_jaksa', $id_jaksa)->update('tm_jaksa', $data);
    }

    public function get_hakim()
    {
        return $this->db->get('tm_hakim')->result();
    }

    public function save_hakim($data)
    {
        return $this->db->insert('tm_hakim', $data);
    }

    public function delete_hakim($id_hakim)
    {
        $result = $this->db->delete('tm_hakim', array('id_hakim' => $id_hakim));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getByIdHakim($id_hakim)
    {
        $this->db->select('*');
        $this->db->from('tm_hakim');
        $this->db->where('tm_hakim.id_hakim', $id_hakim);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_hakim($id_hakim, $data)
    {
        return $this->db->where('id_hakim', $id_hakim)->update('tm_hakim', $data);
    }
}
