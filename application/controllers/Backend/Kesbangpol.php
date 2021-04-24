<?php

class Kesbangpol extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function desa()
    {
        $data['desa'] = $this->Kesbangpol_m->get_desa();
        $data['backend_page'] = "backend/kesbangpol/desa";
        $this->load->view('layouts/admin', $data);
    }

    public function save_desa()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah

        );

        if ($data) {
            $this->Kesbangpol_m->save_desa($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/kesbangpol/desa');
        }
    }

    public function delete_desa($id_kesbangpol_desa)
    {
        $this->Kesbangpol_m->delete_desa($id_kesbangpol_desa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kesbangpol/desa');
    }

    public function edit_desa($id_kesbangpol_desa)
    {

        $data['desa'] = $this->Kesbangpol_m->getByIddesa($id_kesbangpol_desa);

        $data['backend_page'] = "backend/kesbangpol/edit_desa";
        $this->load->view('layouts/admin', $data);
    }

    public function update_desa($id_kesbangpol_desa)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah

        );

        $update = $this->Kesbangpol_m->update_desa($id_kesbangpol_desa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kesbangpol/desa');
        }
    }

    /**
     * pangkat
     */

    public function pangkat()
    {
        $data['pangkat'] = $this->Kesbangpol_m->get_pangkat();
        $data['backend_page'] = "backend/kesbangpol/pangkat";
        $this->load->view('layouts/admin', $data);
    }

    public function save_pangkat()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah

        );

        if ($data) {
            $this->Kesbangpol_m->save_pangkat($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/kesbangpol/pangkat');
        }
    }

    public function delete_pangkat($id_kesbangpol_pangkat)
    {
        $this->Kesbangpol_m->delete_pangkat($id_kesbangpol_pangkat);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kesbangpol/pangkat');
    }

    public function edit_pangkat($id_kesbangpol_pangkat)
    {

        $data['pangkat'] = $this->Kesbangpol_m->getByIdpangkat($id_kesbangpol_pangkat);

        $data['backend_page'] = "backend/kesbangpol/edit_pangkat";
        $this->load->view('layouts/admin', $data);
    }

    public function update_pangkat($id_kesbangpol_pangkat)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah

        );

        $update = $this->Kesbangpol_m->update_pangkat($id_kesbangpol_pangkat, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kesbangpol/pangkat');
        }
    }

    /**
     * pengurus
     */

    public function pengurus()
    {
        $data['pengurus'] = $this->Kesbangpol_m->get_pengurus();
        $data['backend_page'] = "backend/kesbangpol/pengurus";
        $this->load->view('layouts/admin', $data);
    }

    public function save_pengurus()
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,


        );

        if ($data) {
            $this->Kesbangpol_m->save_pengurus($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/kesbangpol/pengurus');
        }
    }

    public function delete_pengurus($id_kesbangpol_pengurus)
    {
        $this->Kesbangpol_m->delete_pengurus($id_kesbangpol_pengurus);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kesbangpol/pengurus');
    }

    public function edit_pengurus($id_kesbangpol_pengurus)
    {

        $data['pengurus'] = $this->Kesbangpol_m->getByIdpengurus($id_kesbangpol_pengurus);

        $data['backend_page'] = "backend/kesbangpol/edit_pengurus";
        $this->load->view('layouts/admin', $data);
    }

    public function update_pengurus($id_kesbangpol_pengurus)
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,


        );

        $update = $this->Kesbangpol_m->update_pengurus($id_kesbangpol_pengurus, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kesbangpol/pengurus');
        }
    }

    /**
     * pengurus
     */

    public function partai()
    {
        $data['partai'] = $this->Kesbangpol_m->get_partai();
        $data['backend_page'] = "backend/kesbangpol/partai";
        $this->load->view('layouts/admin', $data);
    }

    public function save_partai()
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
            $this->Kesbangpol_m->save_partai($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/kesbangpol/partai');
        }
    }

    public function delete_partai($id_kesbangpol_partai)
    {
        $this->Kesbangpol_m->delete_partai($id_kesbangpol_partai);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kesbangpol/partai');
    }

    public function edit_partai($id_kesbangpol_partai)
    {

        $data['partai'] = $this->Kesbangpol_m->getByIdpartai($id_kesbangpol_partai);

        $data['backend_page'] = "backend/kesbangpol/edit_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function update_partai($id_kesbangpol_partai)
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

        $update = $this->Kesbangpol_m->update_partai($id_kesbangpol_partai, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kesbangpol/partai');
        }
    }

    /**
     * organisasi
     */

    public function organisasi()
    {
        $data['organisasi'] = $this->Kesbangpol_m->get_organisasi();
        $data['backend_page'] = "backend/kesbangpol/organisasi";
        $this->load->view('layouts/admin', $data);
    }

    public function save_organisasi()
    {

        $tahun = $this->input->post('tahun');

        $dpp_l = $this->input->post('dpp_l');
        $dpp_p = $this->input->post('dpp_p');
        $dpp_jml = $dpp_l + $dpp_p;

        $dwp_l = $this->input->post('dwp_l');
        $dwp_p = $this->input->post('dwp_p');
        $dwp_jml = $dwp_l + $dwp_p;

        $dpc_l = $this->input->post('dpc_l');
        $dpc_p = $this->input->post('dpc_p');
        $dpc_jml = $dpc_l + $dpc_p;



        $status_organisasi = $this->input->post('status_organisasi');


        $data = array(
            'tahun' => $tahun,
            'dpp_l' => $dpp_l,
            'dpp_p' => $dpp_p,
            'dpp_jml' => $dpp_jml,
            'dwp_l' => $dwp_l,
            'dwp_p' => $dwp_p,
            'dwp_jml' => $dwp_jml,
            'dpc_l' => $dpc_l,
            'dpc_p' => $dpc_p,
            'dpc_jml' => $dpc_jml,

            'status_organisasi' => $status_organisasi,
        );


        if ($data) {
            $this->Kesbangpol_m->save_organisasi($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/kesbangpol/organisasi');
        }
    }

    public function delete_organisasi($id_kesbangpol_organisasi)
    {
        $this->Kesbangpol_m->delete_organisasi($id_kesbangpol_organisasi);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/kesbangpol/organisasi');
    }

    public function edit_organisasi($id_kesbangpol_organisasi)
    {

        $data['organisasi'] = $this->Kesbangpol_m->getByIdorganisasi($id_kesbangpol_organisasi);

        $data['backend_page'] = "backend/kesbangpol/edit_organisasi";
        $this->load->view('layouts/admin', $data);
    }

    public function update_organisasi($id_kesbangpol_organisasi)
    {

        $tahun = $this->input->post('tahun');

        $dpp_l = $this->input->post('dpp_l');
        $dpp_p = $this->input->post('dpp_p');
        $dpp_jml = $dpp_l + $dpp_p;

        $dwp_l = $this->input->post('dwp_l');
        $dwp_p = $this->input->post('dwp_p');
        $dwp_jml = $dwp_l + $dwp_p;

        $dpc_l = $this->input->post('dpc_l');
        $dpc_p = $this->input->post('dpc_p');
        $dpc_jml = $dpc_l + $dpc_p;



        $status_organisasi = $this->input->post('status_organisasi');


        $data = array(
            'tahun' => $tahun,
            'dpp_l' => $dpp_l,
            'dpp_p' => $dpp_p,
            'dpp_jml' => $dpp_jml,
            'dwp_l' => $dwp_l,
            'dwp_p' => $dwp_p,
            'dwp_jml' => $dwp_jml,
            'dpc_l' => $dpc_l,
            'dpc_p' => $dpc_p,
            'dpc_jml' => $dpc_jml,

            'status_organisasi' => $status_organisasi,
        );

        $update = $this->Kesbangpol_m->update_organisasi($id_kesbangpol_organisasi, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/kesbangpol/organisasi');
        }
    }
}
