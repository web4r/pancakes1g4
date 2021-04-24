<?php

class Bpbd_m extends CI_Model
{

    public function get_pak()
    {
        return $this->db->get('tm_bpbd_ak')->result();
    }

    public function save_pak($data)
    {
        return $this->db->insert('tm_bpbd_ak', $data);
    }

    public function delete_pak($id_bpbd_ak)
    {
        $result = $this->db->delete('tm_bpbd_ak', array('id_bpbd_ak' => $id_bpbd_ak));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdPak($id_bpbd_ak)
    {
        $this->db->select('*');
        $this->db->from('tm_bpbd_ak');
        $this->db->where('tm_bpbd_ak.id_bpbd_ak', $id_bpbd_ak);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_pak($id_bpbd_ak, $data)
    {
        return $this->db->where('id_bpbd_ak', $id_bpbd_ak)->update('tm_bpbd_ak', $data);
    }

    /**
     * PAB
     */

    public function get_pab()
    {
        return $this->db->get('tm_bpbd_ab')->result();
    }

    public function save_pab($data)
    {
        return $this->db->insert('tm_bpbd_ab', $data);
    }

    public function delete_pab($id_bpbd_ab)
    {
        $result = $this->db->delete('tm_bpbd_ab', array('id_bpbd_ab' => $id_bpbd_ab));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdPab($id_bpbd_ab)
    {
        $this->db->select('*');
        $this->db->from('tm_bpbd_ab');
        $this->db->where('tm_bpbd_ab.id_bpbd_ab', $id_bpbd_ab);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_pab($id_bpbd_ab, $data)
    {
        return $this->db->where('id_bpbd_ab', $id_bpbd_ab)->update('tm_bpbd_ab', $data);
    }

    /**
     * AKB
     */

    public function get_akb()
    {
        return $this->db->get('tm_bpbd_akb')->result();
    }

    public function save_akb($data)
    {
        return $this->db->insert('tm_bpbd_akb', $data);
    }

    public function delete_akb($id_bpbd_akb)
    {
        $result = $this->db->delete('tm_bpbd_akb', array('id_bpbd_akb' => $id_bpbd_akb));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIdAkb($id_bpbd_akb)
    {
        $this->db->select('*');
        $this->db->from('tm_bpbd_akb');
        $this->db->where('tm_bpbd_akb.id_bpbd_akb', $id_bpbd_akb);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_akb($id_bpbd_akb, $data)
    {
        return $this->db->where('id_bpbd_akb', $id_bpbd_akb)->update('tm_bpbd_akb', $data);
    }
}
