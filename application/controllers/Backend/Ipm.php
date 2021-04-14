<?php


class Ipm extends CI_Controller{

    public function index()
    {
        $data['backend_page'] = "backend/ipm";
        $this->load->view('layouts/admin',$data);
    }
}
