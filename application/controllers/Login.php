<?php

class Login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('is_loggedin')) {
            redirect('Admin');
        }
        $this->load->view('layouts/login');
    }

    public function authUser()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('errors' => validation_errors());
            $this->session->set_flashdata($data);
            redirect('Login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $access = $this->Login_m->login($email, $password);
            if ($access) {
                $user_data = array(
                    'id_user' => $access->id_user,
                    'id_role' => $access->id_role,
                    'role_name' => $access->role_name,
                    'fullname' => $access->fullname,
                    'email' => $email,
                    'password' => $password,
                    'phone' => $access->phone,
                    'is_loggedin' => TRUE
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'Login Success');
                redirect('Admin');
            } else {
                $data = array('login_failed' => 'maaf email dan password anda salah');
                $this->session->set_flashdata($data);
                redirect('Login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
