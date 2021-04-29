<?php

class Bkpp_m extends CI_Model
{
    public function get_bkpp_pusat()
    {
        return $this->db->get('tm_bkpp_pusat')->result();
    }

    public function save_bkpp_pusat($data)
    {
        return $this->db->insert('tm_bkpp_pusat', $data);
    }

    public function delete_bkpp_pusat($id_bkpp_pusat)
    {
        $result = $this->db->delete('tm_bkpp_pusat', array('id_bkpp_pusat' => $id_bkpp_pusat));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_pusat($id_bkpp_pusat)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_pusat');
        $this->db->where('tm_bkpp_pusat.id_bkpp_pusat', $id_bkpp_pusat);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_pusat($id_bkpp_pusat, $data)
    {
        return $this->db->where('id_bkpp_pusat', $id_bkpp_pusat)->update('tm_bkpp_pusat', $data);
    }

    /**
     * golongan
     */

    public function get_bkpp_golongan()
    {
        return $this->db->get('tm_bkpp_golongan')->result();
    }

    public function save_bkpp_golongan($data)
    {
        return $this->db->insert('tm_bkpp_golongan', $data);
    }

    public function delete_bkpp_golongan($id_bkpp_golongan)
    {
        $result = $this->db->delete('tm_bkpp_golongan', array('id_bkpp_golongan' => $id_bkpp_golongan));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_golongan($id_bkpp_golongan)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_golongan');
        $this->db->where('tm_bkpp_golongan.id_bkpp_golongan', $id_bkpp_golongan);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_golongan($id_bkpp_golongan, $data)
    {
        return $this->db->where('id_bkpp_golongan', $id_bkpp_golongan)->update('tm_bkpp_golongan', $data);
    }

    /**
     * kabupaten
     */

    public function get_bkpp_kabupaten()
    {
        return $this->db->get('tm_bkpp_kabupaten')->result();
    }

    public function save_bkpp_kabupaten($data)
    {
        return $this->db->insert('tm_bkpp_kabupaten', $data);
    }

    public function delete_bkpp_kabupaten($id_bkpp_kabupaten)
    {
        $result = $this->db->delete('tm_bkpp_kabupaten', array('id_bkpp_kabupaten' => $id_bkpp_kabupaten));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_kabupaten($id_bkpp_kabupaten)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_kabupaten');
        $this->db->where('tm_bkpp_kabupaten.id_bkpp_kabupaten', $id_bkpp_kabupaten);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_kabupaten($id_bkpp_kabupaten, $data)
    {
        return $this->db->where('id_bkpp_kabupaten', $id_bkpp_kabupaten)->update('tm_bkpp_kabupaten', $data);
    }

    /**
     * kabupaten golongan
     */

    public function get_bkpp_kab_gol()
    {
        return $this->db->get('tm_bkpp_kab_gol')->result();
    }

    public function save_bkpp_kab_gol($data)
    {
        return $this->db->insert('tm_bkpp_kab_gol', $data);
    }

    public function delete_bkpp_kab_gol($id_bkpp_kab_gol)
    {
        $result = $this->db->delete('tm_bkpp_kab_gol', array('id_bkpp_kab_gol' => $id_bkpp_kab_gol));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_kab_gol($id_bkpp_kab_gol)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_kab_gol');
        $this->db->where('tm_bkpp_kab_gol.id_bkpp_kab_gol', $id_bkpp_kab_gol);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_kab_gol($id_bkpp_kab_gol, $data)
    {
        return $this->db->where('id_bkpp_kab_gol', $id_bkpp_kab_gol)->update('tm_bkpp_kab_gol', $data);
    }


    /**
     * camat
     */

    public function get_bkpp_camat()
    {
        return $this->db->get('tm_bkpp_camat')->result();
    }

    public function save_bkpp_camat($data)
    {
        return $this->db->insert('tm_bkpp_camat', $data);
    }

    public function delete_bkpp_camat($id_bkpp_camat)
    {
        $result = $this->db->delete('tm_bkpp_camat', array('id_bkpp_camat' => $id_bkpp_camat));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_camat($id_bkpp_camat)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_camat');
        $this->db->where('tm_bkpp_camat.id_bkpp_camat', $id_bkpp_camat);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_camat($id_bkpp_camat, $data)
    {
        return $this->db->where('id_bkpp_camat', $id_bkpp_camat)->update('tm_bkpp_camat', $data);
    }

    /**
     * desa
     */

    public function get_bkpp_desa()
    {
        return $this->db->get('tm_bkpp_desa')->result();
    }

    public function save_bkpp_desa($data)
    {
        return $this->db->insert('tm_bkpp_desa', $data);
    }

    public function delete_bkpp_desa($id_bkpp_desa)
    {
        $result = $this->db->delete('tm_bkpp_desa', array('id_bkpp_desa' => $id_bkpp_desa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdbkpp_desa($id_bkpp_desa)
    {
        $this->db->select('*');
        $this->db->from('tm_bkpp_desa');
        $this->db->where('tm_bkpp_desa.id_bkpp_desa', $id_bkpp_desa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_bkpp_desa($id_bkpp_desa, $data)
    {
        return $this->db->where('id_bkpp_desa', $id_bkpp_desa)->update('tm_bkpp_desa', $data);
    }
}
