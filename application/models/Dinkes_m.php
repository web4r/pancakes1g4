<?php


class Dinkes_m extends CI_Model
{

    public function get_dinkes_ahp()
    {
        return $this->db->get('tm_dinkes_ahp')->result();
    }

    public function save_dinkes_ahp($data)
    {
        return $this->db->insert('tm_dinkes_ahp', $data);
    }

    public function delete_dinkes_ahp($id_dinkes_ahp)
    {
        $result = $this->db->delete('tm_dinkes_ahp', array('id_dinkes_ahp' => $id_dinkes_ahp));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_ahp($id_dinkes_ahp)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_ahp');
        $this->db->where('tm_dinkes_ahp.id_dinkes_ahp', $id_dinkes_ahp);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_ahp($id_dinkes_ahp, $data)
    {
        return $this->db->where('id_dinkes_ahp', $id_dinkes_ahp)->update('tm_dinkes_ahp', $data);
    }

    /**
     * kim
     */

    public function get_dinkes_kim()
    {
        return $this->db->get('tm_dinkes_kim')->result();
    }

    public function save_dinkes_kim($data)
    {
        return $this->db->insert('tm_dinkes_kim', $data);
    }

    public function delete_dinkes_kim($id_dinkes_kim)
    {
        $result = $this->db->delete('tm_dinkes_kim', array('id_dinkes_kim' => $id_dinkes_kim));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_kim($id_dinkes_kim)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_kim');
        $this->db->where('tm_dinkes_kim.id_dinkes_kim', $id_dinkes_kim);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_kim($id_dinkes_kim, $data)
    {
        return $this->db->where('id_dinkes_kim', $id_dinkes_kim)->update('tm_dinkes_kim', $data);
    }

    /**
     * pkim
     */

    public function get_dinkes_pkim()
    {
        return $this->db->get('tm_dinkes_pkim')->result();
    }

    public function save_dinkes_pkim($data)
    {
        return $this->db->insert('tm_dinkes_pkim', $data);
    }

    public function delete_dinkes_pkim($id_dinkes_pkim)
    {
        $result = $this->db->delete('tm_dinkes_pkim', array('id_dinkes_pkim' => $id_dinkes_pkim));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_pkim($id_dinkes_pkim)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_pkim');
        $this->db->where('tm_dinkes_pkim.id_dinkes_pkim', $id_dinkes_pkim);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_pkim($id_dinkes_pkim, $data)
    {
        return $this->db->where('id_dinkes_pkim', $id_dinkes_pkim)->update('tm_dinkes_pkim', $data);
    }

    /**
     * cpp
     */

    public function get_dinkes_cpp()
    {
        return $this->db->get('tm_dinkes_cpp')->result();
    }

    public function save_dinkes_cpp($data)
    {
        return $this->db->insert('tm_dinkes_cpp', $data);
    }

    public function delete_dinkes_cpp($id_dinkes_cpp)
    {
        $result = $this->db->delete('tm_dinkes_cpp', array('id_dinkes_cpp' => $id_dinkes_cpp));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_cpp($id_dinkes_cpp)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_cpp');
        $this->db->where('tm_dinkes_cpp.id_dinkes_cpp', $id_dinkes_cpp);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_cpp($id_dinkes_cpp, $data)
    {
        return $this->db->where('id_dinkes_cpp', $id_dinkes_cpp)->update('tm_dinkes_cpp', $data);
    }


    /**
     * kih
     */

    public function get_dinkes_kih()
    {
        return $this->db->get('tm_dinkes_kih')->result();
    }

    public function save_dinkes_kih($data)
    {
        return $this->db->insert('tm_dinkes_kih', $data);
    }

    public function delete_dinkes_kih($id_dinkes_kih)
    {
        $result = $this->db->delete('tm_dinkes_kih', array('id_dinkes_kih' => $id_dinkes_kih));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_kih($id_dinkes_kih)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_kih');
        $this->db->where('tm_dinkes_kih.id_dinkes_kih', $id_dinkes_kih);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_kih($id_dinkes_kih, $data)
    {
        return $this->db->where('id_dinkes_kih', $id_dinkes_kih)->update('tm_dinkes_kih', $data);
    }

    /**
     * tetanus
     */

    public function get_dinkes_tetanus()
    {
        return $this->db->get('tm_dinkes_tetanus')->result();
    }

    public function save_dinkes_tetanus($data)
    {
        return $this->db->insert('tm_dinkes_tetanus', $data);
    }

    public function delete_dinkes_tetanus($id_dinkes_tetanus)
    {
        $result = $this->db->delete('tm_dinkes_tetanus', array('id_dinkes_tetanus' => $id_dinkes_tetanus));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_tetanus($id_dinkes_tetanus)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_tetanus');
        $this->db->where('tm_dinkes_tetanus.id_dinkes_tetanus', $id_dinkes_tetanus);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_tetanus($id_dinkes_tetanus, $data)
    {
        return $this->db->where('id_dinkes_tetanus', $id_dinkes_tetanus)->update('tm_dinkes_tetanus', $data);
    }

    /**
     * besi
     */

    public function get_dinkes_zat()
    {
        return $this->db->get('tm_dinkes_zat')->result();
    }

    public function save_dinkes_zat($data)
    {
        return $this->db->insert('tm_dinkes_zat', $data);
    }

    public function delete_dinkes_zat($id_dinkes_zat)
    {
        $result = $this->db->delete('tm_dinkes_zat', array('id_dinkes_zat' => $id_dinkes_zat));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_zat($id_dinkes_zat)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_zat');
        $this->db->where('tm_dinkes_zat.id_dinkes_zat', $id_dinkes_zat);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_zat($id_dinkes_zat, $data)
    {
        return $this->db->where('id_dinkes_zat', $id_dinkes_zat)->update('tm_dinkes_zat', $data);
    }

    /**
     * kb
     */

    public function get_dinkes_kb()
    {
        return $this->db->get('tm_dinkes_kb')->result();
    }

    public function save_dinkes_kb($data)
    {
        return $this->db->insert('tm_dinkes_kb', $data);
    }

    public function delete_dinkes_kb($id_dinkes_kb)
    {
        $result = $this->db->delete('tm_dinkes_kb', array('id_dinkes_kb' => $id_dinkes_kb));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_kb($id_dinkes_kb)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_kb');
        $this->db->where('tm_dinkes_kb.id_dinkes_kb', $id_dinkes_kb);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_kb($id_dinkes_kb, $data)
    {
        return $this->db->where('id_dinkes_kb', $id_dinkes_kb)->update('tm_dinkes_kb', $data);
    }

    /**
     * napza
     */

    public function get_dinkes_napza()
    {
        return $this->db->get('tm_dinkes_napza')->result();
    }

    public function save_dinkes_napza($data)
    {
        return $this->db->insert('tm_dinkes_napza', $data);
    }

    public function delete_dinkes_napza($id_dinkes_napza)
    {
        $result = $this->db->delete('tm_dinkes_napza', array('id_dinkes_napza' => $id_dinkes_napza));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getByIddinkes_napza($id_dinkes_napza)
    {
        $this->db->select('*');
        $this->db->from('tm_dinkes_napza');
        $this->db->where('tm_dinkes_napza.id_dinkes_napza', $id_dinkes_napza);
        $result  = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function update_dinkes_napza($id_dinkes_napza, $data)
    {
        return $this->db->where('id_dinkes_napza', $id_dinkes_napza)->update('tm_dinkes_napza', $data);
    }
}
