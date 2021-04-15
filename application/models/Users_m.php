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

    public function register($data)
    {
        return $this->db->insert('tm_user', $data);
    }
}
