<?php

class P2tp2a extends CI_Controller
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
        $data['p2tp2a'] = $this->P2tp2a_m->get_all();
        $data['kat_kekerasan'] = $this->P2tp2a_m->get_kat_kekerasan();

        $data['backend_page'] = "backend/p2tp2a/p2tp2a";
        $this->load->view('layouts/admin', $data);
    }

    public function save()
    {
        $tgl_laporan = $this->input->post('tgl_laporan');
        $initial = strtoupper($this->input->post('initial'));
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $usia = $this->input->post('usia');
        $pendidikan = $this->input->post('pendidikan');
        $id_kat_kekerasan = $this->input->post('id_kat_kekerasan');

        $data = array(
            'tgl_laporan' => $tgl_laporan,
            'initial' => $initial,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'usia' => $usia,
            'pendidikan' => $pendidikan,
            'id_kat_kekerasan' => $id_kat_kekerasan
        );

        if ($data) {
            $this->P2tp2a_m->save($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/p2tp2a');
        }
    }

    public function delete($id_p2tp2a)
    {
        $this->P2tp2a_m->delete($id_p2tp2a);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/p2tp2a');
    }

    public function edit($id_p2tp2a)
    {

        $data['kat_kekerasan'] = $this->P2tp2a_m->get_kat_kekerasan();
        $data['p2tp2a'] = $this->P2tp2a_m->getById($id_p2tp2a);

        $data['backend_page'] = "backend/p2tp2a/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update($id_p2tp2a)
    {

        $tgl_laporan = $this->input->post('tgl_laporan');
        $initial = strtoupper($this->input->post('initial'));
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $usia = $this->input->post('usia');
        $pendidikan = $this->input->post('pendidikan');
        $id_kat_kekerasan = $this->input->post('id_kat_kekerasan');

        $data  = array(
            'tgl_laporan' => $tgl_laporan,
            'initial' => $initial,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'usia' => $usia,
            'pendidikan' => $pendidikan,
            'id_kat_kekerasan' => $id_kat_kekerasan
        );

        $update = $this->P2tp2a_m->update($id_p2tp2a, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/p2tp2a');
        }
    }

    public function detail($id_p2tp2a)
    {
        $data['p2tp2a'] = $this->P2tp2a_m->getById($id_p2tp2a);

        $data['backend_page'] = "backend/p2tp2a/view";
        $this->load->view('layouts/admin', $data);
    }
}
