<?php

class Admin extends CI_Controller
{

    public function index()
    {
        $data['backend_page'] = "backend/dashboard";
        $this->load->view('layouts/admin', $data);
    }
}
