<?php

class Dinsos_m extends CI_Model
{
    public function get_dinsos_kkm()
    {
        return $this->db->get('tm_dinsos_kkm')->result();
    }

    public function save_dinsos_kkm($data)
    {
        return $this->db->insert('tm_dinsos_kkm', $data);
    }

    public function delete_dinsos_kkm($id_dinsos_kkm)
    {
        $result = $this->db->delete('tm_dinsos_kkm', array('id_dinsos_kkm' => $id_dinsos_kkm));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_kkm($id_dinsos_kkm)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_kkm');
        $this->db->where('tm_dinsos_kkm.id_dinsos_kkm', $id_dinsos_kkm);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_kkm($id_dinsos_kkm, $data)
    {
        return $this->db->where('id_dinsos_kkm', $id_dinsos_kkm)->update('tm_dinsos_kkm', $data);
    }

    /**
     * pendidikan
     */

    public function get_dinsos_pendidikan()
    {
        return $this->db->get('tm_dinsos_pendidikan')->result();
    }

    public function save_dinsos_pendidikan($data)
    {
        return $this->db->insert('tm_dinsos_pendidikan', $data);
    }

    public function delete_dinsos_pendidikan($id_dinsos_pendidikan)
    {
        $result = $this->db->delete('tm_dinsos_pendidikan', array('id_dinsos_pendidikan' => $id_dinsos_pendidikan));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_pendidikan($id_dinsos_pendidikan)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_pendidikan');
        $this->db->where('tm_dinsos_pendidikan.id_dinsos_pendidikan', $id_dinsos_pendidikan);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_pendidikan($id_dinsos_pendidikan, $data)
    {
        return $this->db->where('id_dinsos_pendidikan', $id_dinsos_pendidikan)->update('tm_dinsos_pendidikan', $data);
    }

    /**
     * aktifitas
     */

    public function get_dinsos_aktifitas()
    {
        return $this->db->get('tm_dinsos_aktifitas')->result();
    }

    public function save_dinsos_aktifitas($data)
    {
        return $this->db->insert('tm_dinsos_aktifitas', $data);
    }

    public function delete_dinsos_aktifitas($id_dinsos_aktifitas)
    {
        $result = $this->db->delete('tm_dinsos_aktifitas', array('id_dinsos_aktifitas' => $id_dinsos_aktifitas));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_aktifitas($id_dinsos_aktifitas)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_aktifitas');
        $this->db->where('tm_dinsos_aktifitas.id_dinsos_aktifitas', $id_dinsos_aktifitas);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_aktifitas($id_dinsos_aktifitas, $data)
    {
        return $this->db->where('id_dinsos_aktifitas', $id_dinsos_aktifitas)->update('tm_dinsos_aktifitas', $data);
    }

    /**
     * sakit
     */

    public function get_dinsos_sakit()
    {
        return $this->db->get('tm_dinsos_sakit')->result();
    }

    public function save_dinsos_sakit($data)
    {
        return $this->db->insert('tm_dinsos_sakit', $data);
    }

    public function delete_dinsos_sakit($id_dinsos_sakit)
    {
        $result = $this->db->delete('tm_dinsos_sakit', array('id_dinsos_sakit' => $id_dinsos_sakit));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_sakit($id_dinsos_sakit)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_sakit');
        $this->db->where('tm_dinsos_sakit.id_dinsos_sakit', $id_dinsos_sakit);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_sakit($id_dinsos_sakit, $data)
    {
        return $this->db->where('id_dinsos_sakit', $id_dinsos_sakit)->update('tm_dinsos_sakit', $data);
    }

    /**
     * dmp
     */

    public function get_dinsos_dmp()
    {
        return $this->db->get('tm_dinsos_dmp')->result();
    }

    public function save_dinsos_dmp($data)
    {
        return $this->db->insert('tm_dinsos_dmp', $data);
    }

    public function delete_dinsos_dmp($id_dinsos_dmp)
    {
        $result = $this->db->delete('tm_dinsos_dmp', array('id_dinsos_dmp' => $id_dinsos_dmp));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_dmp($id_dinsos_dmp)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_dmp');
        $this->db->where('tm_dinsos_dmp.id_dinsos_dmp', $id_dinsos_dmp);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_dmp($id_dinsos_dmp, $data)
    {
        return $this->db->where('id_dinsos_dmp', $id_dinsos_dmp)->update('tm_dinsos_dmp', $data);
    }

    /**
     * dma
     */

    public function get_dinsos_dma()
    {
        return $this->db->get('tm_dinsos_dma')->result();
    }

    public function save_dinsos_dma($data)
    {
        return $this->db->insert('tm_dinsos_dma', $data);
    }

    public function delete_dinsos_dma($id_dinsos_dma)
    {
        $result = $this->db->delete('tm_dinsos_dma', array('id_dinsos_dma' => $id_dinsos_dma));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_dma($id_dinsos_dma)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_dma');
        $this->db->where('tm_dinsos_dma.id_dinsos_dma', $id_dinsos_dma);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_dma($id_dinsos_dma, $data)
    {
        return $this->db->where('id_dinsos_dma', $id_dinsos_dma)->update('tm_dinsos_dma', $data);
    }

    /**
     * jaj
     */

    public function get_dinsos_jaj()
    {
        return $this->db->get('tm_dinsos_jaj')->result();
    }

    public function save_dinsos_jaj($data)
    {
        return $this->db->insert('tm_dinsos_jaj', $data);
    }

    public function delete_dinsos_jaj($id_dinsos_jaj)
    {
        $result = $this->db->delete('tm_dinsos_jaj', array('id_dinsos_jaj' => $id_dinsos_jaj));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_jaj($id_dinsos_jaj)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_jaj');
        $this->db->where('tm_dinsos_jaj.id_dinsos_jaj', $id_dinsos_jaj);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_jaj($id_dinsos_jaj, $data)
    {
        return $this->db->where('id_dinsos_jaj', $id_dinsos_jaj)->update('tm_dinsos_jaj', $data);
    }

    /**
     * jta
     */

    public function get_dinsos_jta()
    {
        return $this->db->get('tm_dinsos_jta')->result();
    }

    public function save_dinsos_jta($data)
    {
        return $this->db->insert('tm_dinsos_jta', $data);
    }

    public function delete_dinsos_jta($id_dinsos_jta)
    {
        $result = $this->db->delete('tm_dinsos_jta', array('id_dinsos_jta' => $id_dinsos_jta));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_jta($id_dinsos_jta)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_jta');
        $this->db->where('tm_dinsos_jta.id_dinsos_jta', $id_dinsos_jta);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_jta($id_dinsos_jta, $data)
    {
        return $this->db->where('id_dinsos_jta', $id_dinsos_jta)->update('tm_dinsos_jta', $data);
    }

    /**
     * abk
     */

    public function get_dinsos_abk()
    {
        return $this->db->get('tm_dinsos_abk')->result();
    }

    public function save_dinsos_abk($data)
    {
        return $this->db->insert('tm_dinsos_abk', $data);
    }

    public function delete_dinsos_abk($id_dinsos_abk)
    {
        $result = $this->db->delete('tm_dinsos_abk', array('id_dinsos_abk' => $id_dinsos_abk));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinsos_abk($id_dinsos_abk)
    {
        $this->db->select('*');
        $this->db->from('tm_dinsos_abk');
        $this->db->where('tm_dinsos_abk.id_dinsos_abk', $id_dinsos_abk);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinsos_abk($id_dinsos_abk, $data)
    {
        return $this->db->where('id_dinsos_abk', $id_dinsos_abk)->update('tm_dinsos_abk', $data);
    }
}
