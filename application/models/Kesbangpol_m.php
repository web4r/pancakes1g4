<?php

class Kesbangpol_m extends CI_Model
{
    public function get_desa()
    {
        return $this->db->get('tm_kesbangpol_desa')->result();
    }

    public function save_desa($data)
    {
        return $this->db->insert('tm_kesbangpol_desa', $data);
    }

    public function delete_desa($id_kesbangpol_desa)
    {
        $result = $this->db->delete('tm_kesbangpol_desa', array('id_kesbangpol_desa' => $id_kesbangpol_desa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddesa($id_kesbangpol_desa)
    {
        $this->db->select('*');
        $this->db->from('tm_kesbangpol_desa');
        $this->db->where('tm_kesbangpol_desa.id_kesbangpol_desa', $id_kesbangpol_desa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_desa($id_kesbangpol_desa, $data)
    {
        return $this->db->where('id_kesbangpol_desa', $id_kesbangpol_desa)->update('tm_kesbangpol_desa', $data);
    }

    /**
     * pangkat
     */

    public function get_pangkat()
    {
        return $this->db->get('tm_kesbangpol_pangkat')->result();
    }

    public function save_pangkat($data)
    {
        return $this->db->insert('tm_kesbangpol_pangkat', $data);
    }

    public function delete_pangkat($id_kesbangpol_pangkat)
    {
        $result = $this->db->delete('tm_kesbangpol_pangkat', array('id_kesbangpol_pangkat' => $id_kesbangpol_pangkat));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdpangkat($id_kesbangpol_pangkat)
    {
        $this->db->select('*');
        $this->db->from('tm_kesbangpol_pangkat');
        $this->db->where('tm_kesbangpol_pangkat.id_kesbangpol_pangkat', $id_kesbangpol_pangkat);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_pangkat($id_kesbangpol_pangkat, $data)
    {
        return $this->db->where('id_kesbangpol_pangkat', $id_kesbangpol_pangkat)->update('tm_kesbangpol_pangkat', $data);
    }

    /**
     * pengurus
     */

    public function get_pengurus()
    {
        return $this->db->get('tm_kesbangpol_pengurus')->result();
    }

    public function save_pengurus($data)
    {
        return $this->db->insert('tm_kesbangpol_pengurus', $data);
    }

    public function delete_pengurus($id_kesbangpol_pengurus)
    {
        $result = $this->db->delete('tm_kesbangpol_pengurus', array('id_kesbangpol_pengurus' => $id_kesbangpol_pengurus));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdpengurus($id_kesbangpol_pengurus)
    {
        $this->db->select('*');
        $this->db->from('tm_kesbangpol_pengurus');
        $this->db->where('tm_kesbangpol_pengurus.id_kesbangpol_pengurus', $id_kesbangpol_pengurus);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_pengurus($id_kesbangpol_pengurus, $data)
    {
        return $this->db->where('id_kesbangpol_pengurus', $id_kesbangpol_pengurus)->update('tm_kesbangpol_pengurus', $data);
    }

    /**
     * partai
     */

    public function get_partai()
    {
        return $this->db->get('tm_kesbangpol_partai')->result();
    }

    public function save_partai($data)
    {
        return $this->db->insert('tm_kesbangpol_partai', $data);
    }

    public function delete_partai($id_kesbangpol_partai)
    {
        $result = $this->db->delete('tm_kesbangpol_partai', array('id_kesbangpol_partai' => $id_kesbangpol_partai));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdpartai($id_kesbangpol_partai)
    {
        $this->db->select('*');
        $this->db->from('tm_kesbangpol_partai');
        $this->db->where('tm_kesbangpol_partai.id_kesbangpol_partai', $id_kesbangpol_partai);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_partai($id_kesbangpol_partai, $data)
    {
        return $this->db->where('id_kesbangpol_partai', $id_kesbangpol_partai)->update('tm_kesbangpol_partai', $data);
    }

    /**
     * organisasi
     */

    public function get_organisasi()
    {
        return $this->db->get('tm_kesbangpol_organisasi')->result();
    }

    public function save_organisasi($data)
    {
        return $this->db->insert('tm_kesbangpol_organisasi', $data);
    }

    public function delete_organisasi($id_kesbangpol_organisasi)
    {
        $result = $this->db->delete('tm_kesbangpol_organisasi', array('id_kesbangpol_organisasi' => $id_kesbangpol_organisasi));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdorganisasi($id_kesbangpol_organisasi)
    {
        $this->db->select('*');
        $this->db->from('tm_kesbangpol_organisasi');
        $this->db->where('tm_kesbangpol_organisasi.id_kesbangpol_organisasi', $id_kesbangpol_organisasi);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_organisasi($id_kesbangpol_organisasi, $data)
    {
        return $this->db->where('id_kesbangpol_organisasi', $id_kesbangpol_organisasi)->update('tm_kesbangpol_organisasi', $data);
    }
}
