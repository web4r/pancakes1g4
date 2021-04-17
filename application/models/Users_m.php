<?php

class Users_m extends CI_Model
{

    public function get_all_role()
    {
        return $this->db->get('tm_role')->result();
    }

    public function get_all_users()
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_role', 'tm_role.id_role = tm_user.id_role', 'inner');
        $account = $this->db->get()->result();
        return $account;
    }

    public function getByIdUser($id_user)
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_role', 'tm_role.id_role = tm_user.id_role', 'inner');
        $this->db->where('id_user', $id_user);
        $account = $this->db->get()->row();
        return $account;
    }

    public function register($data)
    {
        return $this->db->insert('tm_user', $data);
    }

    public function delete_user($id_user)
    {
        $result = $this->db->delete('tm_user', array('id_user' => $id_user));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function update_user($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('tm_user', $data);
        return true;
    }
}
