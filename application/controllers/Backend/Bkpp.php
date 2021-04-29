<?php

class Bkpp extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function bkpp_pusat()
    {
        $data['bkpp_pusat'] = $this->Bkpp_m->get_bkpp_pusat();
        $data['backend_page'] = "backend/bkpp/bkpp_pusat";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_pusat()
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
            $this->Bkpp_m->save_bkpp_pusat($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_pusat');
        }
    }

    public function delete_bkpp_pusat($id_bkpp_pusat)
    {
        $this->Bkpp_m->delete_bkpp_pusat($id_bkpp_pusat);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_pusat');
    }

    public function edit_bkpp_pusat($id_bkpp_pusat)
    {


        $data['bkpp_pusat'] = $this->Bkpp_m->getByIdbkpp_pusat($id_bkpp_pusat);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_pusat";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_pusat($id_bkpp_pusat)
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

        $update = $this->Bkpp_m->update_bkpp_pusat($id_bkpp_pusat, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_pusat');
        }
    }

    /**
     * golongan
     */

    public function bkpp_golongan()
    {
        $data['bkpp_golongan'] = $this->Bkpp_m->get_bkpp_golongan();
        $data['backend_page'] = "backend/bkpp/bkpp_golongan";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_golongan()
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
            $this->Bkpp_m->save_bkpp_golongan($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_golongan');
        }
    }

    public function delete_bkpp_golongan($id_bkpp_golongan)
    {
        $this->Bkpp_m->delete_bkpp_golongan($id_bkpp_golongan);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_golongan');
    }

    public function edit_bkpp_golongan($id_bkpp_golongan)
    {


        $data['bkpp_golongan'] = $this->Bkpp_m->getByIdbkpp_golongan($id_bkpp_golongan);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_golongan";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_golongan($id_bkpp_golongan)
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

        $update = $this->Bkpp_m->update_bkpp_golongan($id_bkpp_golongan, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_golongan');
        }
    }

    /**
     * kabupaten
     */

    public function bkpp_kabupaten()
    {
        $data['bkpp_kabupaten'] = $this->Bkpp_m->get_bkpp_kabupaten();
        $data['backend_page'] = "backend/bkpp/bkpp_kabupaten";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_kabupaten()
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
            $this->Bkpp_m->save_bkpp_kabupaten($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_kabupaten');
        }
    }

    public function delete_bkpp_kabupaten($id_bkpp_kabupaten)
    {
        $this->Bkpp_m->delete_bkpp_kabupaten($id_bkpp_kabupaten);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_kabupaten');
    }

    public function edit_bkpp_kabupaten($id_bkpp_kabupaten)
    {


        $data['bkpp_kabupaten'] = $this->Bkpp_m->getByIdbkpp_kabupaten($id_bkpp_kabupaten);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_kabupaten";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_kabupaten($id_bkpp_kabupaten)
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

        $update = $this->Bkpp_m->update_bkpp_kabupaten($id_bkpp_kabupaten, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_kabupaten');
        }
    }

    /**
     * kabupaten golongan
     */

    public function bkpp_kab_gol()
    {
        $data['bkpp_kab_gol'] = $this->Bkpp_m->get_bkpp_kab_gol();
        $data['backend_page'] = "backend/bkpp/bkpp_kab_gol";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_kab_gol()
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
            $this->Bkpp_m->save_bkpp_kab_gol($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_kab_gol');
        }
    }

    public function delete_bkpp_kab_gol($id_bkpp_kab_gol)
    {
        $this->Bkpp_m->delete_bkpp_kab_gol($id_bkpp_kab_gol);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_kab_gol');
    }

    public function edit_bkpp_kab_gol($id_bkpp_kab_gol)
    {


        $data['bkpp_kab_gol'] = $this->Bkpp_m->getByIdbkpp_kab_gol($id_bkpp_kab_gol);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_kab_gol";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_kab_gol($id_bkpp_kab_gol)
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

        $update = $this->Bkpp_m->update_bkpp_kab_gol($id_bkpp_kab_gol, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_kab_gol');
        }
    }

    /**
     * camat
     */

    public function bkpp_camat()
    {
        $data['bkpp_camat'] = $this->Bkpp_m->get_bkpp_camat();
        $data['backend_page'] = "backend/bkpp/bkpp_camat";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_camat()
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
            $this->Bkpp_m->save_bkpp_camat($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_camat');
        }
    }

    public function delete_bkpp_camat($id_bkpp_camat)
    {
        $this->Bkpp_m->delete_bkpp_camat($id_bkpp_camat);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_camat');
    }

    public function edit_bkpp_camat($id_bkpp_camat)
    {


        $data['bkpp_camat'] = $this->Bkpp_m->getByIdbkpp_camat($id_bkpp_camat);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_camat";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_camat($id_bkpp_camat)
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

        $update = $this->Bkpp_m->update_bkpp_camat($id_bkpp_camat, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_camat');
        }
    }

    /**
     * desa
     */

    public function bkpp_desa()
    {
        $data['bkpp_desa'] = $this->Bkpp_m->get_bkpp_desa();
        $data['backend_page'] = "backend/bkpp/bkpp_desa";
        $this->load->view('layouts/admin', $data);
    }

    public function save_bkpp_desa()
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
            $this->Bkpp_m->save_bkpp_desa($data);
            $this->session->set_flashdata('success', 'Berhasil menyimpan data');
            redirect('Backend/bkpp/bkpp_desa');
        }
    }

    public function delete_bkpp_desa($id_bkpp_desa)
    {
        $this->Bkpp_m->delete_bkpp_desa($id_bkpp_desa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bkpp/bkpp_desa');
    }

    public function edit_bkpp_desa($id_bkpp_desa)
    {


        $data['bkpp_desa'] = $this->Bkpp_m->getByIdbkpp_desa($id_bkpp_desa);

        $data['backend_page'] = "backend/bkpp/edit_bkpp_desa";
        $this->load->view('layouts/admin', $data);
    }

    public function update_bkpp_desa($id_bkpp_desa)
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

        $update = $this->Bkpp_m->update_bkpp_desa($id_bkpp_desa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bkpp/bkpp_desa');
        }
    }
}
