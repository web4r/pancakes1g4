<?php


class Login_m extends CI_Model
{
    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_role', 'tm_role.id_role = tm_user.id_role', 'inner');
        $this->db->where('email', $email);
        $account = $this->db->get()->row();
        if ($account != NULL) {
            if (password_verify($password, $account->password)) {
                $_SESSION['id_role'] = $account->id_role;
                $_SESSION['role_name'] = $account->role_name;
                $_SESSION['fullname'] = $account->fullname;
                $_SESSION['email'] = $account->email;
                $_SESSION['phone'] = $account->phone;
                return $account;
            }
        } else {
            $this->session->set_flashdata('no_account', 'Akun anda belum terdaftar');
            redirect('Login');
        }
    }
}
