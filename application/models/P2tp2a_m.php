<?php

class P2tp2a_m extends CI_Model
{
    public function get_kat_kekerasan()
    {
        return $this->db->get('tm_kat_kekerasan')->result();
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('tm_p2tp2a');
        $this->db->join('tm_kat_kekerasan', 'tm_kat_kekerasan.id_kat_kekerasan = tm_p2tp2a.id_kat_kekerasan', 'inner');
        $query = $this->db->get()->result();
        return $query;
    }

    public function save($data)
    {
        return $this->db->insert('tm_p2tp2a', $data);
    }

    public function delete($id_p2tp2a)
    {
        $result = $this->db->delete('tm_p2tp2a', array('id_p2tp2a' => $id_p2tp2a));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getById($id_p2tp2a)
    {
        $this->db->select('*');
        $this->db->from('tm_p2tp2a');
        $this->db->join('tm_kat_kekerasan', 'tm_kat_kekerasan.id_kat_kekerasan = tm_p2tp2a.id_kat_kekerasan', 'inner');
        $this->db->where('tm_p2tp2a.id_p2tp2a', $id_p2tp2a);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update($id_p2tp2a, $data)
    {
        return $this->db->where('id_p2tp2a', $id_p2tp2a)->update('tm_p2tp2a', $data);
    }
}
