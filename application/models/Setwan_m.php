<?php

class Setwan_m extends CI_Model
{
    public function get_partai()
    {
        return $this->db->get('tm_setwan_partai')->result();
    }

    public function save_partai($data)
    {
        return $this->db->insert('tm_setwan_partai', $data);
    }

    public function delete_partai($id_setwan_partai)
    {
        $result = $this->db->delete('tm_setwan_partai', array('id_setwan_partai' => $id_setwan_partai));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdpartai($id_setwan_partai)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_partai');
        $this->db->where('tm_setwan_partai.id_setwan_partai', $id_setwan_partai);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_partai($id_setwan_partai, $data)
    {
        return $this->db->where('id_setwan_partai', $id_setwan_partai)->update('tm_setwan_partai', $data);
    }


    /**
     * komisi
     */


    public function get_komisi()
    {
        return $this->db->get('tm_setwan_komisi')->result();
    }

    public function save_komisi($data)
    {
        return $this->db->insert('tm_setwan_komisi', $data);
    }

    public function delete_komisi($id_setwan_komisi)
    {
        $result = $this->db->delete('tm_setwan_komisi', array('id_setwan_komisi' => $id_setwan_komisi));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdkomisi($id_setwan_komisi)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_komisi');
        $this->db->where('tm_setwan_komisi.id_setwan_komisi', $id_setwan_komisi);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_komisi($id_setwan_komisi, $data)
    {
        return $this->db->where('id_setwan_komisi', $id_setwan_komisi)->update('tm_setwan_komisi', $data);
    }

    /**
     * prov partai
     */


    public function get_prov_partai()
    {
        return $this->db->get('tm_setwan_prov_partai')->result();
    }

    public function save_prov_partai($data)
    {
        return $this->db->insert('tm_setwan_prov_partai', $data);
    }

    public function delete_prov_partai($id_setwan_prov_partai)
    {
        $result = $this->db->delete('tm_setwan_prov_partai', array('id_setwan_prov_partai' => $id_setwan_prov_partai));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdprov_partai($id_setwan_prov_partai)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_prov_partai');
        $this->db->where('tm_setwan_prov_partai.id_setwan_prov_partai', $id_setwan_prov_partai);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_prov_partai($id_setwan_prov_partai, $data)
    {
        return $this->db->where('id_setwan_prov_partai', $id_setwan_prov_partai)->update('tm_setwan_prov_partai', $data);
    }

    /**
     * prov komisi
     */


    public function get_prov_komisi()
    {
        return $this->db->get('tm_setwan_prov_komisi')->result();
    }

    public function save_prov_komisi($data)
    {
        return $this->db->insert('tm_setwan_prov_komisi', $data);
    }

    public function delete_prov_komisi($id_setwan_prov_komisi)
    {
        $result = $this->db->delete('tm_setwan_prov_komisi', array('id_setwan_prov_komisi' => $id_setwan_prov_komisi));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdprov_komisi($id_setwan_prov_komisi)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_prov_komisi');
        $this->db->where('tm_setwan_prov_komisi.id_setwan_prov_komisi', $id_setwan_prov_komisi);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_prov_komisi($id_setwan_prov_komisi, $data)
    {
        return $this->db->where('id_setwan_prov_komisi', $id_setwan_prov_komisi)->update('tm_setwan_prov_komisi', $data);
    }

    /**
     * kab partai
     */


    public function get_kab_partai()
    {
        return $this->db->get('tm_setwan_kab_partai')->result();
    }

    public function save_kab_partai($data)
    {
        return $this->db->insert('tm_setwan_kab_partai', $data);
    }

    public function delete_kab_partai($id_setwan_kab_partai)
    {
        $result = $this->db->delete('tm_setwan_kab_partai', array('id_setwan_kab_partai' => $id_setwan_kab_partai));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdkab_partai($id_setwan_kab_partai)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_kab_partai');
        $this->db->where('tm_setwan_kab_partai.id_setwan_kab_partai', $id_setwan_kab_partai);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_kab_partai($id_setwan_kab_partai, $data)
    {
        return $this->db->where('id_setwan_kab_partai', $id_setwan_kab_partai)->update('tm_setwan_kab_partai', $data);
    }

    /**
     * kab komisi
     */


    public function get_kab_komisi()
    {
        return $this->db->get('tm_setwan_kab_komisi')->result();
    }

    public function save_kab_komisi($data)
    {
        return $this->db->insert('tm_setwan_kab_komisi', $data);
    }

    public function delete_kab_komisi($id_setwan_kab_komisi)
    {
        $result = $this->db->delete('tm_setwan_kab_komisi', array('id_setwan_kab_komisi' => $id_setwan_kab_komisi));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdkab_komisi($id_setwan_kab_komisi)
    {
        $this->db->select('*');
        $this->db->from('tm_setwan_kab_komisi');
        $this->db->where('tm_setwan_kab_komisi.id_setwan_kab_komisi', $id_setwan_kab_komisi);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_kab_komisi($id_setwan_kab_komisi, $data)
    {
        return $this->db->where('id_setwan_kab_komisi', $id_setwan_kab_komisi)->update('tm_setwan_kab_komisi', $data);
    }
}
