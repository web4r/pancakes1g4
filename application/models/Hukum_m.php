<?php

class Hukum_m extends CI_Model
{

    public function get_lapas()
    {
        return $this->db->get('tm_lapas')->result();
    }

    public function save_lapas($data)
    {
        return $this->db->insert('tm_lapas', $data);
    }

    public function delete_lapas($id_lapas)
    {
        $result = $this->db->delete('tm_lapas', array('id_lapas' => $id_lapas));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdlapas($id_lapas)
    {
        $this->db->select('*');
        $this->db->from('tm_lapas');
        $this->db->where('tm_lapas.id_lapas', $id_lapas);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_lapas($id_lapas, $data)
    {
        return $this->db->where('id_lapas', $id_lapas)->update('tm_lapas', $data);
    }

    /**
     * pendidikan
     */

    public function get_lapas_pendidikan()
    {
        return $this->db->get('tm_lapas_pendidikan')->result();
    }

    public function save_lapas_pendidikan($data)
    {
        return $this->db->insert('tm_lapas_pendidikan', $data);
    }

    public function delete_lapas_pendidikan($id_lapas_pendidikan)
    {
        $result = $this->db->delete('tm_lapas_pendidikan', array('id_lapas_pendidikan' => $id_lapas_pendidikan));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdlapas_pendidikan($id_lapas_pendidikan)
    {
        $this->db->select('*');
        $this->db->from('tm_lapas_pendidikan');
        $this->db->where('tm_lapas_pendidikan.id_lapas_pendidikan', $id_lapas_pendidikan);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_pendidikan($id_lapas_pendidikan, $data)
    {
        return $this->db->where('id_lapas_pendidikan', $id_lapas_pendidikan)->update('tm_lapas_pendidikan', $data);
    }


    /**
     * usia
     */

    public function get_lapas_usia()
    {
        return $this->db->get('tm_lapas_usia')->result();
    }

    public function save_lapas_usia($data)
    {
        return $this->db->insert('tm_lapas_usia', $data);
    }

    public function delete_lapas_usia($id_lapas_usia)
    {
        $result = $this->db->delete('tm_lapas_usia', array('id_lapas_usia' => $id_lapas_usia));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdlapas_usia($id_lapas_usia)
    {
        $this->db->select('*');
        $this->db->from('tm_lapas_usia');
        $this->db->where('tm_lapas_usia.id_lapas_usia', $id_lapas_usia);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_usia($id_lapas_usia, $data)
    {
        return $this->db->where('id_lapas_usia', $id_lapas_usia)->update('tm_lapas_usia', $data);
    }


    /**
     * usia
     */

    public function get_lapas_kasus()
    {
        return $this->db->get('tm_lapas_kasus')->result();
    }

    public function save_lapas_kasus($data)
    {
        return $this->db->insert('tm_lapas_kasus', $data);
    }

    public function delete_lapas_kasus($id_lapas_kasus)
    {
        $result = $this->db->delete('tm_lapas_kasus', array('id_lapas_kasus' => $id_lapas_kasus));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdlapas_kasus($id_lapas_kasus)
    {
        $this->db->select('*');
        $this->db->from('tm_lapas_kasus');
        $this->db->where('tm_lapas_kasus.id_lapas_kasus', $id_lapas_kasus);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_kasus($id_lapas_kasus, $data)
    {
        return $this->db->where('id_lapas_kasus', $id_lapas_kasus)->update('tm_lapas_kasus', $data);
    }
}
