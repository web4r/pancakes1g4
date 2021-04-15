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

    /**
     * KKM
     */

    public function get_all_kkm()
    {
        return $this->db->get('tm_kkm')->result();
    }

    public function get_total_pria_kkm()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_kkm")->result();
    }

    public function get_total_wanita_kkm()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_kkm")->result();
    }
    public function get_total_akhir_kkm()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_kkm")->result();
    }


    public function save_kkm($data)
    {
        return $this->db->insert('tm_kkm', $data);
    }

    public function delete_kkm($id_kkm)
    {
        $result = $this->db->delete('tm_kkm', array('id_kkm' => $id_kkm));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdKkm($id_kkm)
    {
        $this->db->select('*');
        $this->db->from('tm_kkm');
        $this->db->where('tm_kkm.id_kkm', $id_kkm);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_kkm($id_kkm, $data)
    {
        return $this->db->where('id_kkm', $id_kkm)->update('tm_kkm', $data);
    }


    /**
     * AKAD
     */

    public function get_all_akad()
    {
        return $this->db->get('tm_akad')->result();
    }

    public function get_total_pria_akad()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_akad")->result();
    }

    public function get_total_wanita_akad()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_akad")->result();
    }
    public function get_total_akhir_akad()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_akad")->result();
    }


    public function save_akad($data)
    {
        return $this->db->insert('tm_akad', $data);
    }

    public function delete_akad($id_akad)
    {
        $result = $this->db->delete('tm_akad', array('id_akad' => $id_akad));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdAkad($id_akad)
    {
        $this->db->select('*');
        $this->db->from('tm_akad');
        $this->db->where('tm_akad.id_akad', $id_akad);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_akad($id_akad, $data)
    {
        return $this->db->where('id_akad', $id_akad)->update('tm_akad', $data);
    }

    /**
     * AKAN
     */

    public function get_all_akan()
    {
        return $this->db->get('tm_akan')->result();
    }

    public function get_total_pria_akan()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_akan")->result();
    }

    public function get_total_wanita_akan()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_akan")->result();
    }
    public function get_total_akhir_akan()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_akan")->result();
    }


    public function save_akan($data)
    {
        return $this->db->insert('tm_akan', $data);
    }

    public function delete_akan($id_akan)
    {
        $result = $this->db->delete('tm_akan', array('id_akan' => $id_akan));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdAkan($id_akan)
    {
        $this->db->select('*');
        $this->db->from('tm_akan');
        $this->db->where('tm_akan.id_akan', $id_akan);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_akan($id_akan, $data)
    {
        return $this->db->where('id_akan', $id_akan)->update('tm_akan', $data);
    }

    /**
     * Formal
     */

    public function get_all_disnaker_formal()
    {
        return $this->db->get('tm_disnaker_formal')->result();
    }

    public function get_total_pria_disnaker_formal()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_disnaker_formal")->result();
    }

    public function get_total_wanita_disnaker_formal()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_disnaker_formal")->result();
    }
    public function get_total_akhir_disnaker_formal()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_disnaker_formal")->result();
    }


    public function save_disnaker_formal($data)
    {
        return $this->db->insert('tm_disnaker_formal', $data);
    }

    public function delete_disnaker_formal($id_disnaker_formal)
    {
        $result = $this->db->delete('tm_disnaker_formal', array('id_disnaker_formal' => $id_disnaker_formal));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdDisnaker_formal($id_disnaker_formal)
    {
        $this->db->select('*');
        $this->db->from('tm_disnaker_formal');
        $this->db->where('tm_disnaker_formal.id_disnaker_formal', $id_disnaker_formal);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disnaker_formal($id_disnaker_formal, $data)
    {
        return $this->db->where('id_disnaker_formal', $id_disnaker_formal)->update('tm_disnaker_formal', $data);
    }

    /**
     * InFormal
     */

    public function get_all_disnaker_informal()
    {
        return $this->db->get('tm_disnaker_informal')->result();
    }

    public function get_total_pria_disnaker_informal()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_disnaker_informal")->result();
    }

    public function get_total_wanita_disnaker_informal()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_disnaker_informal")->result();
    }
    public function get_total_akhir_disnaker_informal()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_disnaker_informal")->result();
    }


    public function save_disnaker_informal($data)
    {
        return $this->db->insert('tm_disnaker_informal', $data);
    }

    public function delete_disnaker_informal($id_disnaker_informal)
    {
        $result = $this->db->delete('tm_disnaker_informal', array('id_disnaker_informal' => $id_disnaker_informal));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdDisnaker_informal($id_disnaker_informal)
    {
        $this->db->select('*');
        $this->db->from('tm_disnaker_informal');
        $this->db->where('tm_disnaker_informal.id_disnaker_informal', $id_disnaker_informal);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_disnaker_informal($id_disnaker_informal, $data)
    {
        return $this->db->where('id_disnaker_informal', $id_disnaker_informal)->update('tm_disnaker_informal', $data);
    }

    /**
     * UMK
     */

    public function get_all_umk()
    {
        return $this->db->get('tm_umk')->result();
    }

    public function get_total_pria_umk()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_umk")->result();
    }

    public function get_total_wanita_umk()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_umk")->result();
    }
    public function get_total_akhir_umk()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_umk")->result();
    }


    public function save_umk($data)
    {
        return $this->db->insert('tm_umk', $data);
    }

    public function delete_umk($id_umk)
    {
        $result = $this->db->delete('tm_umk', array('id_umk' => $id_umk));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdUmk($id_umk)
    {
        $this->db->select('*');
        $this->db->from('tm_umk');
        $this->db->where('tm_umk.id_umk', $id_umk);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_umk($id_umk, $data)
    {
        return $this->db->where('id_umk', $id_umk)->update('tm_umk', $data);
    }

    /**
     * KOPERASI
     */

    public function get_all_koperasi()
    {
        return $this->db->get('tm_koperasi')->result();
    }

    public function get_total_pria_koperasi()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_koperasi")->result();
    }

    public function get_total_wanita_koperasi()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_koperasi")->result();
    }
    public function get_total_akhir_koperasi()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_koperasi")->result();
    }


    public function save_koperasi($data)
    {
        return $this->db->insert('tm_koperasi', $data);
    }

    public function delete_koperasi($id_koperasi)
    {
        $result = $this->db->delete('tm_koperasi', array('id_koperasi' => $id_koperasi));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdKoperasi($id_koperasi)
    {
        $this->db->select('*');
        $this->db->from('tm_koperasi');
        $this->db->where('tm_koperasi.id_koperasi', $id_koperasi);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_koperasi($id_koperasi, $data)
    {
        return $this->db->where('id_koperasi', $id_koperasi)->update('tm_koperasi', $data);
    }

    /**
     * KREDIT
     */

    public function get_all_kredit()
    {
        return $this->db->get('tm_kredit')->result();
    }

    public function get_total_pria_kredit()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_kredit")->result();
    }

    public function get_total_wanita_kredit()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_kredit")->result();
    }
    public function get_total_akhir_kredit()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_kredit")->result();
    }


    public function save_kredit($data)
    {
        return $this->db->insert('tm_kredit', $data);
    }

    public function delete_kredit($id_kredit)
    {
        $result = $this->db->delete('tm_kredit', array('id_kredit' => $id_kredit));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdkredit($id_kredit)
    {
        $this->db->select('*');
        $this->db->from('tm_kredit');
        $this->db->where('tm_kredit.id_kredit', $id_kredit);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_kredit($id_kredit, $data)
    {
        return $this->db->where('id_kredit', $id_kredit)->update('tm_kredit', $data);
    }

    /**
     * JPA
     */

    public function get_all_jpa()
    {
        return $this->db->get('tm_jpa')->result();
    }

    public function get_total_pria_jpa()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_jpa")->result();
    }

    public function get_total_wanita_jpa()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_jpa")->result();
    }
    public function get_total_akhir_jpa()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_jpa")->result();
    }


    public function save_jpa($data)
    {
        return $this->db->insert('tm_jpa', $data);
    }

    public function delete_jpa($id_jpa)
    {
        $result = $this->db->delete('tm_jpa', array('id_jpa' => $id_jpa));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdJpa($id_jpa)
    {
        $this->db->select('*');
        $this->db->from('tm_jpa');
        $this->db->where('tm_jpa.id_jpa', $id_jpa);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_jpa($id_jpa, $data)
    {
        return $this->db->where('id_jpa', $id_jpa)->update('tm_jpa', $data);
    }

    /**
     * JPATA
     */

    public function get_all_jpata()
    {
        return $this->db->get('tm_jpata')->result();
    }

    public function get_total_pria_jpata()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_jpata")->result();
    }

    public function get_total_wanita_jpata()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_jpata")->result();
    }
    public function get_total_akhir_jpata()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_jpata")->result();
    }


    public function save_jpata($data)
    {
        return $this->db->insert('tm_jpata', $data);
    }

    public function delete_jpata($id_jpata)
    {
        $result = $this->db->delete('tm_jpata', array('id_jpata' => $id_jpata));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdJpata($id_jpata)
    {
        $this->db->select('*');
        $this->db->from('tm_jpata');
        $this->db->where('tm_jpata.id_jpata', $id_jpata);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_jpata($id_jpata, $data)
    {
        return $this->db->where('id_jpata', $id_jpata)->update('tm_jpata', $data);
    }

    /**
     * DJSP
     */

    public function get_all_djsp()
    {
        return $this->db->get('tm_djsp')->result();
    }

    public function get_total_pria_djsp()
    {
        return $this->db->query("SELECT SUM(pria) as total FROM tm_djsp")->result();
    }

    public function get_total_wanita_djsp()
    {
        return $this->db->query("SELECT SUM(wanita) as total FROM tm_djsp")->result();
    }
    public function get_total_akhir_djsp()
    {
        return $this->db->query("SELECT SUM(jumlah) as total FROM tm_djsp")->result();
    }


    public function save_djsp($data)
    {
        return $this->db->insert('tm_djsp', $data);
    }

    public function delete_djsp($id_djsp)
    {
        $result = $this->db->delete('tm_djsp', array('id_djsp' => $id_djsp));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddjsp($id_djsp)
    {
        $this->db->select('*');
        $this->db->from('tm_djsp');
        $this->db->where('tm_djsp.id_djsp', $id_djsp);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_djsp($id_djsp, $data)
    {
        return $this->db->where('id_djsp', $id_djsp)->update('tm_djsp', $data);
    }
}
