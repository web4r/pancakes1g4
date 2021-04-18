<?php

class Pn extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function jaksa()
    {
        $data['pn'] = $this->Pn_m->get_pn_jaksa();
        $data['backend_page'] = "backend/pn/jaksa";
        $this->load->view('layouts/admin', $data);
    }

    public function save_jaksa()
    {
        $tahun = $this->input->post('tahun');
        $jabatan = strtoupper($this->input->post('jabatan'));
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'jabatan' => $jabatan,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Pn_m->save_jaksa($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/pn/jaksa');
        }
    }

    public function delete_jaksa($id_pn_jaksa)
    {
        $this->Pn_m->delete_jaksa($id_pn_jaksa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/pn/jaksa');
    }

    public function edit_jaksa($id_pn_jaksa)
    {


        $data['jaksa'] = $this->Pn_m->getByIdPn($id_pn_jaksa);

        $data['backend_page'] = "backend/pn/edit_jaksa";
        $this->load->view('layouts/admin', $data);
    }

    public function update_jaksa($id_pn_jaksa)
    {

        $tahun = $this->input->post('tahun');
        $jabatan = strtoupper($this->input->post('jabatan'));
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'jabatan' => $jabatan,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Pn_m->update_jaksa($id_pn_jaksa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/pn/jaksa');
        }
    }



    public function hakim()
    {
        $data['hakim'] = $this->Pn_m->get_pn_hakim();
        $data['backend_page'] = "backend/pn/hakim";
        $this->load->view('layouts/admin', $data);
    }

    public function save_hakim()
    {
        $tahun = $this->input->post('tahun');
        $jabatan = strtoupper($this->input->post('jabatan'));
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'jabatan' => $jabatan,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Pn_m->save_hakim($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/pn/hakim');
        }
    }

    public function delete_hakim($id_pn_hakim)
    {
        $this->Pn_m->delete_hakim($id_pn_hakim);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/pn/hakim');
    }

    public function edit_hakim($id_pn_hakim)
    {


        $data['hakim'] = $this->Pn_m->getByIdPnHakim($id_pn_hakim);

        $data['backend_page'] = "backend/pn/edit_hakim";
        $this->load->view('layouts/admin', $data);
    }

    public function update_hakim($id_pn_hakim)
    {

        $tahun = $this->input->post('tahun');
        $jabatan = strtoupper($this->input->post('jabatan'));
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'jabatan' => $jabatan,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Pn_m->update_hakim($id_pn_hakim, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/pn/hakim');
        }
    }
}
