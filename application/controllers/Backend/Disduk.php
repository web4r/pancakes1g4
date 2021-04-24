<?php

class Disduk extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function akte()
    {
        $data['akte'] = $this->Disduk_m->get_all();
        $data['backend_page'] = "backend/disdukcapil/disduk";
        $this->load->view('layouts/admin', $data);
    }

    public function save_akte()
    {

        $tahun = $this->input->post('tahun');
        $l_punya = $this->input->post('l_punya');
        $p_punya = $this->input->post('p_punya');

        $l_tidak = $this->input->post('l_tidak');
        $p_tidak = $this->input->post('p_tidak');

        $data = array(
            'tahun' => $tahun,
            'l_punya' => $l_punya,
            'p_punya' => $p_punya,
            'l_tidak' => $l_tidak,
            'p_tidak' => $p_tidak,
        );

        if ($data) {
            $this->Disduk_m->save_akte($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disduk/akte');
        }
    }

    public function delete_akte($id_akte_kelahiran)
    {
        $this->Disduk_m->delete_akte($id_akte_kelahiran);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disduk/akte');
    }

    public function edit_akte($id_akte_kelahiran)
    {

        $data['akte'] = $this->Disduk_m->getByIdAkte($id_akte_kelahiran);

        $data['backend_page'] = "backend/disdukcapil/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_akte($id_akte_kelahiran)
    {

        $tahun = $this->input->post('tahun');
        $l_punya = $this->input->post('l_punya');
        $p_punya = $this->input->post('p_punya');

        $l_tidak = $this->input->post('l_tidak');
        $p_tidak = $this->input->post('p_tidak');

        $data = array(
            'tahun' => $tahun,
            'l_punya' => $l_punya,
            'p_punya' => $p_punya,
            'l_tidak' => $l_tidak,
            'p_tidak' => $p_tidak,
        );

        $update = $this->Disduk_m->update_akte($id_akte_kelahiran, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disduk/akte');
        }
    }
}
