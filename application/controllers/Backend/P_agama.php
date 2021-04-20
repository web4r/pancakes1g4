<?php


class P_agama extends CI_Controller
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
        $data['pn'] = $this->P_agama_m->get_jaksa();
        $data['backend_page'] = "backend/agama/jaksa";
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
            $this->P_agama_m->save_jaksa($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/p_agama/jaksa');
        }
    }

    public function delete_jaksa($id_agama_jaksa)
    {
        $this->P_agama_m->delete_jaksa($id_agama_jaksa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/p_agama/jaksa');
    }

    public function edit_jaksa($id_agama_jaksa)
    {


        $data['jaksa'] = $this->P_agama_m->getById($id_agama_jaksa);

        $data['backend_page'] = "backend/agama/edit_jaksa";
        $this->load->view('layouts/admin', $data);
    }

    public function update_jaksa($id_agama_jaksa)
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

        $update = $this->P_agama_m->update_jaksa($id_agama_jaksa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/p_agama/jaksa');
        }
    }


    public function hakim()
    {
        $data['hakim'] = $this->P_agama_m->get_hakim();
        $data['backend_page'] = "backend/agama/hakim";
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
            $this->P_agama_m->save_hakim($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/p_agama/hakim');
        }
    }

    public function delete_hakim($id_agama_hakim)
    {
        $this->P_agama_m->delete_hakim($id_agama_hakim);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/p_agama/hakim');
    }

    public function edit_hakim($id_agama_hakim)
    {


        $data['hakim'] = $this->P_agama_m->getByIdHakim($id_agama_hakim);

        $data['backend_page'] = "backend/agama/edit_hakim";
        $this->load->view('layouts/admin', $data);
    }

    public function update_hakim($id_agama_hakim)
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

        $update = $this->P_agama_m->update_hakim($id_agama_hakim, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/p_agama/hakim');
        }
    }
}
