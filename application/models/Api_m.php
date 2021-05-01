<?php

class Api_m extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('tm_api')->result();
    }
}
