<?php

class Pn_m extends CI_Model
{

    public function get_pn_jaksa()
    {
        return $this->db->get('tm_pn_jaksa')->result();
    }

    public function save_jaksa($data)
    {
        return $this->db->insert('tm_pn_jaksa', $data);
    }

    public function delete_jaksa($id_pn_jaksa)
    {
        $result = $this->db->delete('tm_pn_jaksa', array('id_pn_jaksa' => $id_pn_jaksa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdPn($id_pn_jaksa)
    {
        $this->db->select('*');
        $this->db->from('tm_pn_jaksa');
        $this->db->where('tm_pn_jaksa.id_pn_jaksa', $id_pn_jaksa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_jaksa($id_pn_jaksa, $data)
    {
        return $this->db->where('id_pn_jaksa', $id_pn_jaksa)->update('tm_pn_jaksa', $data);
    }



    public function get_pn_hakim()
    {
        return $this->db->get('tm_pn_hakim')->result();
    }

    public function save_hakim($data)
    {
        return $this->db->insert('tm_pn_hakim', $data);
    }

    public function delete_hakim($id_pn_hakim)
    {
        $result = $this->db->delete('tm_pn_hakim', array('id_pn_hakim' => $id_pn_hakim));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getByIdPnHakim($id_pn_hakim)
    {
        $this->db->select('*');
        $this->db->from('tm_pn_hakim');
        $this->db->where('tm_pn_hakim.id_pn_hakim', $id_pn_hakim);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_hakim($id_pn_hakim, $data)
    {
        return $this->db->where('id_pn_hakim', $id_pn_hakim)->update('tm_pn_hakim', $data);
    }
}
