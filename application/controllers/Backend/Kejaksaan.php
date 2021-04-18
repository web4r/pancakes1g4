<?php

class Kejaksaan extends CI_Controller
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
        $data['jaksa'] = $this->Kejaksaan_m->get_jaksa();
        $data['backend_page'] = "backend/kejaksaan/jaksa";
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
            $this->Kejaksaan_m->save_jaksa($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/kejaksaan/jaksa');
        }
    }

    public function delete_jaksa($id_jaksa)
    {
        $this->Kejaksaan_m->delete_jaksa($id_jaksa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kejaksaan/jaksa');
    }

    public function edit_jaksa($id_jaksa)
    {


        $data['jaksa'] = $this->Kejaksaan_m->getById($id_jaksa);

        $data['backend_page'] = "backend/kejaksaan/edit_jaksa";
        $this->load->view('layouts/admin', $data);
    }

    public function update_jaksa($id_jaksa)
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

        $update = $this->Kejaksaan_m->update_jaksa($id_jaksa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kejaksaan/jaksa');
        }
    }


    public function hakim()
    {
        $data['hakim'] = $this->Kejaksaan_m->get_hakim();
        $data['backend_page'] = "backend/kejaksaan/hakim";
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
            $this->Kejaksaan_m->save_hakim($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/kejaksaan/hakim');
        }
    }

    public function delete_hakim($id_hakim)
    {
        $this->Kejaksaan_m->delete_hakim($id_hakim);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kejaksaan/hakim');
    }

    public function edit_hakim($id_hakim)
    {


        $data['hakim'] = $this->Kejaksaan_m->getByIdHakim($id_hakim);

        $data['backend_page'] = "backend/kejaksaan/edit_hakim";
        $this->load->view('layouts/admin', $data);
    }

    public function update_hakim($id_hakim)
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

        $update = $this->Kejaksaan_m->update_hakim($id_hakim, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kejaksaan/hakim');
        }
    }
}
