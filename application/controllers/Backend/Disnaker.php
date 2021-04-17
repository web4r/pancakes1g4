<?php

class Disnaker extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }


    /**
     * Tingkat partisipasi angkatan kerja(TPAK)
     */

    public function tpak()
    {

        $data['tpak'] = $this->Disnaker_m->get_all_tpak();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir();

        $data['backend_page'] = "backend/disnaker/tpak/tpak";
        $this->load->view('layouts/admin', $data);
    }

    public function save_tpak()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_tpak($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/tpak');
        }
    }

    public function delete_tpak($id_tpak)
    {
        $this->Disnaker_m->delete_tpak($id_tpak);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/tpak');
    }

    public function edit_tpak($id_tpak)
    {

        $data['tpak'] = $this->Disnaker_m->getByIdTpak($id_tpak);

        $data['backend_page'] = "backend/disnaker/tpak/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_tpak($id_tpak)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_tpak($id_tpak, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/tpak');
        }
    }

    /**
     * Kepala Keluarga Miskin
     */

    public function kkm()
    {

        $data['kkm'] = $this->Disnaker_m->get_all_kkm();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_kkm();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_kkm();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_kkm();

        $data['backend_page'] = "backend/disnaker/kkm/kkm";
        $this->load->view('layouts/admin', $data);
    }

    public function save_kkm()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_kkm($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/kkm');
        }
    }

    public function delete_kkm($id_kkm)
    {
        $this->Disnaker_m->delete_kkm($id_kkm);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/kkm');
    }

    public function edit_kkm($id_kkm)
    {

        $data['kkm'] = $this->Disnaker_m->getByIdKkm($id_kkm);

        $data['backend_page'] = "backend/disnaker/kkm/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_kkm($id_kkm)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_kkm($id_kkm, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/kkm');
        }
    }

    /**
     * AKAD
     */

    public function akad()
    {

        $data['akad'] = $this->Disnaker_m->get_all_akad();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_akad();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_akad();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_akad();

        $data['backend_page'] = "backend/disnaker/akad/akad";
        $this->load->view('layouts/admin', $data);
    }

    public function save_akad()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_akad($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/akad');
        }
    }

    public function delete_akad($id_akad)
    {
        $this->Disnaker_m->delete_akad($id_akad);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/akad');
    }

    public function edit_akad($id_akad)
    {

        $data['akad'] = $this->Disnaker_m->getByIdAkad($id_akad);

        $data['backend_page'] = "backend/disnaker/akad/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_akad($id_akad)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_akad($id_akad, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/akad');
        }
    }

    /**
     * AKAN
     */

    public function akan()
    {

        $data['akan'] = $this->Disnaker_m->get_all_akan();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_akan();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_akan();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_akan();

        $data['backend_page'] = "backend/disnaker/akan/akan";
        $this->load->view('layouts/admin', $data);
    }

    public function save_akan()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_akan($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/akan');
        }
    }

    public function delete_akan($id_akan)
    {
        $this->Disnaker_m->delete_akan($id_akan);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/akan');
    }

    public function edit_akan($id_akan)
    {

        $data['akan'] = $this->Disnaker_m->getByIdAkan($id_akan);

        $data['backend_page'] = "backend/disnaker/akan/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_akan($id_akan)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_akan($id_akan, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/akan');
        }
    }

    /**
     * FORMAL
     */

    public function formal()
    {

        $data['formal'] = $this->Disnaker_m->get_all_disnaker_formal();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_disnaker_formal();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_disnaker_formal();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_disnaker_formal();

        $data['backend_page'] = "backend/disnaker/formal/formal";
        $this->load->view('layouts/admin', $data);
    }

    public function save_formal()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_disnaker_formal($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/formal');
        }
    }

    public function delete_formal($id_disnaker_formal)
    {
        $this->Disnaker_m->delete_disnaker_formal($id_disnaker_formal);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/formal');
    }

    public function edit_formal($id_disnaker_formal)
    {

        $data['formal'] = $this->Disnaker_m->getByIdDisnaker_formal($id_disnaker_formal);

        $data['backend_page'] = "backend/disnaker/formal/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_formal($id_disnaker_formal)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_disnaker_formal($id_disnaker_formal, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/formal');
        }
    }

    /**
     * INFORMAL
     */

    public function informal()
    {

        $data['informal'] = $this->Disnaker_m->get_all_disnaker_informal();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_disnaker_informal();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_disnaker_informal();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_disnaker_informal();

        $data['backend_page'] = "backend/disnaker/informal/informal";
        $this->load->view('layouts/admin', $data);
    }

    public function save_informal()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_disnaker_informal($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/informal');
        }
    }

    public function delete_informal($id_disnaker_informal)
    {
        $this->Disnaker_m->delete_disnaker_informal($id_disnaker_informal);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/informal');
    }

    public function edit_informal($id_disnaker_informal)
    {

        $data['informal'] = $this->Disnaker_m->getByIdDisnaker_informal($id_disnaker_informal);

        $data['backend_page'] = "backend/disnaker/informal/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_informal($id_disnaker_informal)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_disnaker_informal($id_disnaker_informal, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/informal');
        }
    }

    /**
     * UMK
     */


    public function umk()
    {

        $data['umk'] = $this->Disnaker_m->get_all_umk();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_umk();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_umk();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_umk();

        $data['backend_page'] = "backend/disnaker/umk/umk";
        $this->load->view('layouts/admin', $data);
    }

    public function save_umk()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_umk($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/umk');
        }
    }

    public function delete_umk($id_umk)
    {
        $this->Disnaker_m->delete_umk($id_umk);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/umk');
    }

    public function edit_umk($id_umk)
    {

        $data['umk'] = $this->Disnaker_m->getByIdUmk($id_umk);

        $data['backend_page'] = "backend/disnaker/umk/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_umk($id_umk)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_umk($id_umk, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/umk');
        }
    }

    /**
     * KOPERASI
     */


    public function koperasi()
    {

        $data['koperasi'] = $this->Disnaker_m->get_all_koperasi();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_koperasi();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_koperasi();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_koperasi();

        $data['backend_page'] = "backend/disnaker/koperasi/koperasi";
        $this->load->view('layouts/admin', $data);
    }

    public function save_koperasi()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_koperasi($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/koperasi');
        }
    }

    public function delete_koperasi($id_koperasi)
    {
        $this->Disnaker_m->delete_koperasi($id_koperasi);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/koperasi');
    }

    public function edit_koperasi($id_koperasi)
    {

        $data['koperasi'] = $this->Disnaker_m->getByIdKoperasi($id_koperasi);

        $data['backend_page'] = "backend/disnaker/koperasi/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_koperasi($id_koperasi)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_koperasi($id_koperasi, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/koperasi');
        }
    }

    /**
     * KREDIT
     */


    public function kredit()
    {

        $data['kredit'] = $this->Disnaker_m->get_all_kredit();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_kredit();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_kredit();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_kredit();

        $data['backend_page'] = "backend/disnaker/kredit/kredit";
        $this->load->view('layouts/admin', $data);
    }

    public function save_kredit()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_kredit($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/kredit');
        }
    }

    public function delete_kredit($id_kredit)
    {
        $this->Disnaker_m->delete_kredit($id_kredit);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/kredit');
    }

    public function edit_kredit($id_kredit)
    {

        $data['kredit'] = $this->Disnaker_m->getByIdKredit($id_kredit);

        $data['backend_page'] = "backend/disnaker/kredit/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_kredit($id_kredit)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_kredit($id_kredit, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/kredit');
        }
    }

    /**
     * JUMLAH PEKERJA ANAK
     */


    public function jpa()
    {

        $data['jpa'] = $this->Disnaker_m->get_all_jpa();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_jpa();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_jpa();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_jpa();

        $data['backend_page'] = "backend/disnaker/jpa/jpa";
        $this->load->view('layouts/admin', $data);
    }

    public function save_jpa()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_jpa($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/jpa');
        }
    }

    public function delete_jpa($id_jpa)
    {
        $this->Disnaker_m->delete_jpa($id_jpa);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/jpa');
    }

    public function edit_jpa($id_jpa)
    {

        $data['jpa'] = $this->Disnaker_m->getByIdJpa($id_jpa);

        $data['backend_page'] = "backend/disnaker/jpa/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_jpa($id_jpa)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_jpa($id_jpa, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/jpa');
        }
    }

    /**
     * Jumlah  Pekerja Rumah Tangga Anak 
     */


    public function jpata()
    {

        $data['jpata'] = $this->Disnaker_m->get_all_jpata();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_jpata();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_jpata();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_jpata();

        $data['backend_page'] = "backend/disnaker/jpata/jpata";
        $this->load->view('layouts/admin', $data);
    }

    public function save_jpata()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_jpata($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/jpata');
        }
    }

    public function delete_jpata($id_jpata)
    {
        $this->Disnaker_m->delete_jpata($id_jpata);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/jpata');
    }

    public function edit_jpata($id_jpata)
    {

        $data['jpata'] = $this->Disnaker_m->getByIdJpata($id_jpata);

        $data['backend_page'] = "backend/disnaker/jpata/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_jpata($id_jpata)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_jpata($id_jpata, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/jpata');
        }
    }

    /**
     * Daftar Jumlah Serikat Pekerja
     */


    public function djsp()
    {

        $data['djsp'] = $this->Disnaker_m->get_all_djsp();
        $data['total_pria'] = $this->Disnaker_m->get_total_pria_djsp();
        $data['total_wanita'] = $this->Disnaker_m->get_total_wanita_djsp();
        $data['total_akhir'] = $this->Disnaker_m->get_total_akhir_djsp();

        $data['backend_page'] = "backend/disnaker/djsp/djsp";
        $this->load->view('layouts/admin', $data);
    }

    public function save_djsp()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');
        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        if ($data) {
            $this->Disnaker_m->save_djsp($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disnaker/djsp');
        }
    }

    public function delete_djsp($id_djsp)
    {
        $this->Disnaker_m->delete_djsp($id_djsp);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disnaker/djsp');
    }

    public function edit_djsp($id_djsp)
    {

        $data['djsp'] = $this->Disnaker_m->getByIddjsp($id_djsp);

        $data['backend_page'] = "backend/disnaker/djsp/edit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_djsp($id_djsp)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status = $this->input->post('status');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $update = $this->Disnaker_m->update_djsp($id_djsp, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disnaker/djsp');
        }
    }
}
