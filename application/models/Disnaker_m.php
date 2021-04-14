<?php

class Disnaker_m extends CI_Model
{


    /**
     * TPAK
     */

    public function get_all_tpak()
    {
        return $this->db->get('tm_tpak')->result();
    }

    public function get_total_pria()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_tpak")->result();
    }

    public function get_total_wanita()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_tpak")->result();
    }
    public function get_total_akhir()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_tpak")->result();
    }


    public function save_tpak($data)
    {
        return $this->db->insert('tm_tpak', $data);
    }

    public function delete_tpak($id_tpak)
    {
        $result = $this->db->delete('tm_tpak', array('id_tpak' => $id_tpak));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdTpak($id_tpak)
    {
        $this->db->select('*');
        $this->db->from('tm_tpak');
        $this->db->where('tm_tpak.id_tpak', $id_tpak);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_tpak($id_tpak, $data)
    {
        return $this->db->where('id_tpak', $id_tpak)->update('tm_tpak', $data);
    }
}
