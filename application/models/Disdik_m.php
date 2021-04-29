<?php

class Disdik_m extends CI_Model
{

    public function get_disdik_apk()
    {
        return $this->db->get('tm_disdik_apk')->result();
    }

    public function save_disdik_apk($data)
    {
        return $this->db->insert('tm_disdik_apk', $data);
    }

    public function delete_disdik_apk($id_disdik_apk)
    {
        $result = $this->db->delete('tm_disdik_apk', array('id_disdik_apk' => $id_disdik_apk));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_apk($id_disdik_apk)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_apk');
        $this->db->where('tm_disdik_apk.id_disdik_apk', $id_disdik_apk);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_apk($id_disdik_apk, $data)
    {
        return $this->db->where('id_disdik_apk', $id_disdik_apk)->update('tm_disdik_apk', $data);
    }

    /**
     * disdik aps
     */

    public function get_disdik_aps()
    {
        return $this->db->get('tm_disdik_aps')->result();
    }

    public function save_disdik_aps($data)
    {
        return $this->db->insert('tm_disdik_aps', $data);
    }

    public function delete_disdik_aps($id_disdik_aps)
    {
        $result = $this->db->delete('tm_disdik_aps', array('id_disdik_aps' => $id_disdik_aps));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_aps($id_disdik_aps)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_aps');
        $this->db->where('tm_disdik_aps.id_disdik_aps', $id_disdik_aps);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_aps($id_disdik_aps, $data)
    {
        return $this->db->where('id_disdik_aps', $id_disdik_aps)->update('tm_disdik_aps', $data);
    }

    /**
     * apm
     */

    public function get_disdik_apm()
    {
        return $this->db->get('tm_disdik_apm')->result();
    }

    public function save_disdik_apm($data)
    {
        return $this->db->insert('tm_disdik_apm', $data);
    }

    public function delete_disdik_apm($id_disdik_apm)
    {
        $result = $this->db->delete('tm_disdik_apm', array('id_disdik_apm' => $id_disdik_apm));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_apm($id_disdik_apm)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_apm');
        $this->db->where('tm_disdik_apm.id_disdik_apm', $id_disdik_apm);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_apm($id_disdik_apm, $data)
    {
        return $this->db->where('id_disdik_apm', $id_disdik_apm)->update('tm_disdik_apm', $data);
    }

    /**
     * jenjang
     */

    public function get_disdik_jenjang()
    {
        return $this->db->get('tm_disdik_jenjang')->result();
    }

    public function save_disdik_jenjang($data)
    {
        return $this->db->insert('tm_disdik_jenjang', $data);
    }

    public function delete_disdik_jenjang($id_disdik_jenjang)
    {
        $result = $this->db->delete('tm_disdik_jenjang', array('id_disdik_jenjang' => $id_disdik_jenjang));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_jenjang($id_disdik_jenjang)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_jenjang');
        $this->db->where('tm_disdik_jenjang.id_disdik_jenjang', $id_disdik_jenjang);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_jenjang($id_disdik_jenjang, $data)
    {
        return $this->db->where('id_disdik_jenjang', $id_disdik_jenjang)->update('tm_disdik_jenjang', $data);
    }

    /**
     * sertifikat
     */

    public function get_disdik_sertifikat()
    {
        return $this->db->get('tm_disdik_sertifikat')->result();
    }

    public function save_disdik_sertifikat($data)
    {
        return $this->db->insert('tm_disdik_sertifikat', $data);
    }

    public function delete_disdik_sertifikat($id_disdik_sertifikat)
    {
        $result = $this->db->delete('tm_disdik_sertifikat', array('id_disdik_sertifikat' => $id_disdik_sertifikat));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_sertifikat($id_disdik_sertifikat)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_sertifikat');
        $this->db->where('tm_disdik_sertifikat.id_disdik_sertifikat', $id_disdik_sertifikat);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_sertifikat($id_disdik_sertifikat, $data)
    {
        return $this->db->where('id_disdik_sertifikat', $id_disdik_sertifikat)->update('tm_disdik_sertifikat', $data);
    }

    /**
     * paket
     */

    public function get_disdik_paket()
    {
        return $this->db->get('tm_disdik_paket')->result();
    }

    public function save_disdik_paket($data)
    {
        return $this->db->insert('tm_disdik_paket', $data);
    }

    public function delete_disdik_paket($id_disdik_paket)
    {
        $result = $this->db->delete('tm_disdik_paket', array('id_disdik_paket' => $id_disdik_paket));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_paket($id_disdik_paket)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_paket');
        $this->db->where('tm_disdik_paket.id_disdik_paket', $id_disdik_paket);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_paket($id_disdik_paket, $data)
    {
        return $this->db->where('id_disdik_paket', $id_disdik_paket)->update('tm_disdik_paket', $data);
    }

    /**
     * sekolah
     */

    public function get_disdik_sekolah()
    {
        return $this->db->get('tm_disdik_sekolah')->result();
    }

    public function save_disdik_sekolah($data)
    {
        return $this->db->insert('tm_disdik_sekolah', $data);
    }

    public function delete_disdik_sekolah($id_disdik_sekolah)
    {
        $result = $this->db->delete('tm_disdik_sekolah', array('id_disdik_sekolah' => $id_disdik_sekolah));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_sekolah($id_disdik_sekolah)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_sekolah');
        $this->db->where('tm_disdik_sekolah.id_disdik_sekolah', $id_disdik_sekolah);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_sekolah($id_disdik_sekolah, $data)
    {
        return $this->db->where('id_disdik_sekolah', $id_disdik_sekolah)->update('tm_disdik_sekolah', $data);
    }

    /**
     * perguruan tinggi
     */

    public function get_disdik_pt()
    {
        return $this->db->get('tm_disdik_pt')->result();
    }

    public function save_disdik_pt($data)
    {
        return $this->db->insert('tm_disdik_pt', $data);
    }

    public function delete_disdik_pt($id_disdik_pt)
    {
        $result = $this->db->delete('tm_disdik_pt', array('id_disdik_pt' => $id_disdik_pt));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddisdik_pt($id_disdik_pt)
    {
        $this->db->select('*');
        $this->db->from('tm_disdik_pt');
        $this->db->where('tm_disdik_pt.id_disdik_pt', $id_disdik_pt);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disdik_pt($id_disdik_pt, $data)
    {
        return $this->db->where('id_disdik_pt', $id_disdik_pt)->update('tm_disdik_pt', $data);
    }
}
