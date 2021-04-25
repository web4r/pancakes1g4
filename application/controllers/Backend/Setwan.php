<?php

class Setwan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function partai()
    {
        $data['partai'] = $this->Setwan_m->get_partai();
        $data['backend_page'] = "backend/setwan/partai";
        $this->load->view('layouts/admin', $data);
    }

    public function save_partai()
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_partai($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/partai');
        }
    }

    public function delete_partai($id_setwan_partai)
    {
        $this->Setwan_m->delete_partai($id_setwan_partai);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/partai');
    }

    public function edit_partai($id_setwan_partai)
    {

        $data['partai'] = $this->Setwan_m->getByIdpartai($id_setwan_partai);

        $data['backend_page'] = "backend/setwan/edit_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function update_partai($id_setwan_partai)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_partai($id_setwan_partai, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/partai');
        }
    }

    /**
     * komisi
     */

    public function komisi()
    {
        $data['komisi'] = $this->Setwan_m->get_komisi();
        $data['backend_page'] = "backend/setwan/komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function save_komisi()
    {


        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_komisi($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/komisi');
        }
    }

    public function delete_komisi($id_setwan_komisi)
    {
        $this->Setwan_m->delete_komisi($id_setwan_komisi);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/komisi');
    }

    public function edit_komisi($id_setwan_komisi)
    {

        $data['komisi'] = $this->Setwan_m->getByIdkomisi($id_setwan_komisi);

        $data['backend_page'] = "backend/setwan/edit_komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function update_komisi($id_setwan_komisi)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_komisi($id_setwan_komisi, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/komisi');
        }
    }

    /**
     * prov partai
     */

    public function prov_partai()
    {
        $data['prov_partai'] = $this->Setwan_m->get_prov_partai();
        $data['backend_page'] = "backend/setwan/prov_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function save_prov_partai()
    {


        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_prov_partai($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/prov_partai');
        }
    }

    public function delete_prov_partai($id_setwan_prov_partai)
    {
        $this->Setwan_m->delete_prov_partai($id_setwan_prov_partai);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/prov_partai');
    }

    public function edit_prov_partai($id_setwan_prov_partai)
    {

        $data['prov_partai'] = $this->Setwan_m->getByIdprov_partai($id_setwan_prov_partai);

        $data['backend_page'] = "backend/setwan/edit_prov_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function update_prov_partai($id_setwan_prov_partai)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_prov_partai($id_setwan_prov_partai, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/prov_partai');
        }
    }

    /**
     * prov komisi
     */

    public function prov_komisi()
    {
        $data['prov_komisi'] = $this->Setwan_m->get_prov_komisi();
        $data['backend_page'] = "backend/setwan/prov_komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function save_prov_komisi()
    {


        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_prov_komisi($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/prov_komisi');
        }
    }

    public function delete_prov_komisi($id_setwan_prov_komisi)
    {
        $this->Setwan_m->delete_prov_komisi($id_setwan_prov_komisi);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/prov_komisi');
    }

    public function edit_prov_komisi($id_setwan_prov_komisi)
    {

        $data['prov_komisi'] = $this->Setwan_m->getByIdprov_komisi($id_setwan_prov_komisi);

        $data['backend_page'] = "backend/setwan/edit_prov_komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function update_prov_komisi($id_setwan_prov_komisi)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_prov_komisi($id_setwan_prov_komisi, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/prov_komisi');
        }
    }

    /**
     * kab partai
     */

    public function kab_partai()
    {
        $data['kab_partai'] = $this->Setwan_m->get_kab_partai();
        $data['backend_page'] = "backend/setwan/kab_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function save_kab_partai()
    {


        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_kab_partai($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/kab_partai');
        }
    }

    public function delete_kab_partai($id_setwan_kab_partai)
    {
        $this->Setwan_m->delete_kab_partai($id_setwan_kab_partai);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/kab_partai');
    }

    public function edit_kab_partai($id_setwan_kab_partai)
    {

        $data['kab_partai'] = $this->Setwan_m->getByIdkab_partai($id_setwan_kab_partai);

        $data['backend_page'] = "backend/setwan/edit_kab_partai";
        $this->load->view('layouts/admin', $data);
    }

    public function update_kab_partai($id_setwan_kab_partai)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_kab_partai($id_setwan_kab_partai, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/kab_partai');
        }
    }
    /**
     * kab komisi
     */

    public function kab_komisi()
    {
        $data['kab_komisi'] = $this->Setwan_m->get_kab_komisi();
        $data['backend_page'] = "backend/setwan/kab_komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function save_kab_komisi()
    {


        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Setwan_m->save_kab_komisi($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/setwan/kab_komisi');
        }
    }

    public function delete_kab_komisi($id_setwan_kab_komisi)
    {
        $this->Setwan_m->delete_kab_komisi($id_setwan_kab_komisi);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/setwan/kab_komisi');
    }

    public function edit_kab_komisi($id_setwan_kab_komisi)
    {

        $data['kab_komisi'] = $this->Setwan_m->getByIdkab_komisi($id_setwan_kab_komisi);

        $data['backend_page'] = "backend/setwan/edit_kab_komisi";
        $this->load->view('layouts/admin', $data);
    }

    public function update_kab_komisi($id_setwan_kab_komisi)
    {

        $tahun = $this->input->post('tahun');
        $partai = $this->input->post('partai');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');


        $data = array(
            'tahun' => $tahun,
            'partai' => $partai,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        $update = $this->Setwan_m->update_kab_komisi($id_setwan_kab_komisi, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/setwan/kab_komisi');
        }
    }
}
