<?php


class Ipm extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }


    public function index()
    {
        $data['backend_page'] = "backend/indikator/ipm";
        $this->load->view('layouts/admin', $data);
    }
}
