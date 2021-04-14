<?php


class Ipg extends CI_Controller
{

    public function index()
    {
        $data['backend_page'] = "backend/ipg";
        $this->load->view('layouts/admin', $data);
    }
}
