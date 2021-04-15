<?php

class Admin extends CI_Controller
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
        $data['backend_page'] = "backend/dashboard";
        $this->load->view('layouts/admin', $data);
    }

    public function users()
    {
        $data['role'] = $this->Users_m->get_all_role();
        $data['users'] = $this->Users_m->get_all_users();

        $data['backend_page'] = "backend/users/users";
        $this->load->view('layouts/admin', $data);
    }

    public function save_user()
    {
        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'No Hp/Telepon', 'required');




        if ($this->form_validation->run() == FALSE) {
            $data = array('errors' => validation_errors());
            $this->session->set_flashdata($data);
            redirect('Admin/users');
        } else {


            $options = ['cost' => 12];
            $encrypt_pass = password_hash(123456, PASSWORD_BCRYPT, $options);

            $data = array(
                'id_role' => $this->input->post('id_role'),
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'password' => $encrypt_pass,
                'phone' => $this->input->post('phone')
            );

            if ($this->Users_m->register($data)) {
                $this->session->set_flashdata('success', 'Pendaftaran Berhasil');
                redirect('Admin/users');
            } else {
                $this->session->set_flashdata('failed', 'Pendaftaran Gagal');
                redirect('Admin/users');
            }
        }
    }
}
