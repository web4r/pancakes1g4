<?php


class Disdik extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function disdik_apk()
    {
        $data['disdik_apk'] = $this->Disdik_m->get_disdik_apk();
        $data['backend_page'] = "backend/disdik/disdik_apk";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_apk()
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Disdik_m->save_disdik_apk($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_apk');
        }
    }

    public function delete_disdik_apk($id_disdik_apk)
    {
        $this->Disdik_m->delete_disdik_apk($id_disdik_apk);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_apk');
    }

    public function edit_disdik_apk($id_disdik_apk)
    {

        $data['disdik_apk'] = $this->Disdik_m->getByIddisdik_apk($id_disdik_apk);

        $data['backend_page'] = "backend/disdik/edit_disdik_apk";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_apk($id_disdik_apk)
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_apk($id_disdik_apk, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_apk');
        }
    }

    /**
     * disdik aps
     */

    public function disdik_aps()
    {
        $data['disdik_aps'] = $this->Disdik_m->get_disdik_aps();
        $data['backend_page'] = "backend/disdik/disdik_aps";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_aps()
    {

        $tahun = $this->input->post('tahun');
        $status_pendidikan = $this->input->post('status_pendidikan');

        $usia_12_l = $this->input->post('usia_12_l');
        $usia_12_p = $this->input->post('usia_12_p');
        $usia_12_jml = $usia_12_l + $usia_12_p;


        $usia_15_l = $this->input->post('usia_15_l');
        $usia_15_p = $this->input->post('usia_15_p');
        $usia_15_jml = $usia_15_l + $usia_15_p;


        $usia_18_l = $this->input->post('usia_18_l');
        $usia_18_p = $this->input->post('usia_18_p');
        $usia_18_jml = $usia_18_l + $usia_18_p;









        $data = array(
            'tahun' => $tahun,

            'usia_12_l' => $usia_12_l,
            'usia_12_p' => $usia_12_p,
            'usia_12_jml' => $usia_12_jml,

            'usia_15_l' => $usia_15_l,
            'usia_15_p' => $usia_15_p,
            'usia_15_jml' => $usia_15_jml,

            'usia_18_l' => $usia_18_l,
            'usia_18_p' => $usia_18_p,
            'usia_18_jml' => $usia_18_jml,


            'status_pendidikan' => $status_pendidikan,


        );

        if ($data) {
            $this->Disdik_m->save_disdik_aps($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_aps');
        }
    }

    public function delete_disdik_aps($id_disdik_aps)
    {
        $this->Disdik_m->delete_disdik_aps($id_disdik_aps);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_aps');
    }

    public function edit_disdik_aps($id_disdik_aps)
    {

        $data['disdik_aps'] = $this->Disdik_m->getByIddisdik_aps($id_disdik_aps);

        $data['backend_page'] = "backend/disdik/edit_disdik_aps";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_aps($id_disdik_aps)
    {

        $tahun = $this->input->post('tahun');
        $status_pendidikan = $this->input->post('status_pendidikan');

        $usia_12_l = $this->input->post('usia_12_l');
        $usia_12_p = $this->input->post('usia_12_p');
        $usia_12_jml = $usia_12_l + $usia_12_p;


        $usia_15_l = $this->input->post('usia_15_l');
        $usia_15_p = $this->input->post('usia_15_p');
        $usia_15_jml = $usia_15_l + $usia_15_p;


        $usia_18_l = $this->input->post('usia_18_l');
        $usia_18_p = $this->input->post('usia_18_p');
        $usia_18_jml = $usia_18_l + $usia_18_p;

        $data = array(
            'tahun' => $tahun,

            'usia_12_l' => $usia_12_l,
            'usia_12_p' => $usia_12_p,
            'usia_12_jml' => $usia_12_jml,

            'usia_15_l' => $usia_15_l,
            'usia_15_p' => $usia_15_p,
            'usia_15_jml' => $usia_15_jml,

            'usia_18_l' => $usia_18_l,
            'usia_18_p' => $usia_18_p,
            'usia_18_jml' => $usia_18_jml,


            'status_pendidikan' => $status_pendidikan,


        );

        $update = $this->Disdik_m->update_disdik_aps($id_disdik_aps, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_aps');
        }
    }

    /**
     * apm
     */

    public function disdik_apm()
    {
        $data['disdik_apm'] = $this->Disdik_m->get_disdik_apm();
        $data['backend_page'] = "backend/disdik/disdik_apm";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_apm()
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Disdik_m->save_disdik_apm($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_apm');
        }
    }

    public function delete_disdik_apm($id_disdik_apm)
    {
        $this->Disdik_m->delete_disdik_apm($id_disdik_apm);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_apm');
    }

    public function edit_disdik_apm($id_disdik_apm)
    {

        $data['disdik_apm'] = $this->Disdik_m->getByIddisdik_apm($id_disdik_apm);

        $data['backend_page'] = "backend/disdik/edit_disdik_apm";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_apm($id_disdik_apm)
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_apm($id_disdik_apm, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_apm');
        }
    }

    /**
     * jenjang
     */

    public function disdik_jenjang()
    {
        $data['disdik_jenjang'] = $this->Disdik_m->get_disdik_jenjang();
        $data['backend_page'] = "backend/disdik/disdik_jenjang";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_jenjang()
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Disdik_m->save_disdik_jenjang($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_jenjang');
        }
    }

    public function delete_disdik_jenjang($id_disdik_jenjang)
    {
        $this->Disdik_m->delete_disdik_jenjang($id_disdik_jenjang);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_jenjang');
    }

    public function edit_disdik_jenjang($id_disdik_jenjang)
    {

        $data['disdik_jenjang'] = $this->Disdik_m->getByIddisdik_jenjang($id_disdik_jenjang);

        $data['backend_page'] = "backend/disdik/edit_disdik_jenjang";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_jenjang($id_disdik_jenjang)
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_jenjang($id_disdik_jenjang, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_jenjang');
        }
    }

    /**
     * sertifikat
     */

    public function disdik_sertifikat()
    {
        $data['disdik_sertifikat'] = $this->Disdik_m->get_disdik_sertifikat();
        $data['backend_page'] = "backend/disdik/disdik_sertifikat";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_sertifikat()
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Disdik_m->save_disdik_sertifikat($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_sertifikat');
        }
    }

    public function delete_disdik_sertifikat($id_disdik_sertifikat)
    {
        $this->Disdik_m->delete_disdik_sertifikat($id_disdik_sertifikat);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_sertifikat');
    }

    public function edit_disdik_sertifikat($id_disdik_sertifikat)
    {

        $data['disdik_sertifikat'] = $this->Disdik_m->getByIddisdik_sertifikat($id_disdik_sertifikat);

        $data['backend_page'] = "backend/disdik/edit_disdik_sertifikat";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_sertifikat($id_disdik_sertifikat)
    {

        $tahun = $this->input->post('tahun');

        $sd_l = $this->input->post('sd_l');
        $sd_p = $this->input->post('sd_p');
        $sd_jml = $sd_l + $sd_p;

        $sltp_l = $this->input->post('sltp_l');
        $sltp_p = $this->input->post('sltp_p');
        $sltp_jml = $sltp_l + $sltp_p;

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'sd_l' => $sd_l,
            'sd_p' => $sd_p,
            'sd_jml' => $sd_jml,
            'sltp_l' => $sltp_l,
            'sltp_p' => $sltp_p,
            'sltp_jml' => $sltp_jml,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_sertifikat($id_disdik_sertifikat, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_sertifikat');
        }
    }

    /**
     * paket
     */

    public function disdik_paket()
    {
        $data['disdik_paket'] = $this->Disdik_m->get_disdik_paket();
        $data['backend_page'] = "backend/disdik/disdik_paket";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_paket()
    {

        $tahun = $this->input->post('tahun');

        $paket_a_l = $this->input->post('paket_a_l');
        $paket_a_p = $this->input->post('paket_a_p');
        $paket_a_jml = $paket_a_l + $paket_a_p;

        $paket_b_l = $this->input->post('paket_b_l');
        $paket_b_p = $this->input->post('paket_b_p');
        $paket_b_jml = $paket_b_l + $paket_b_p;

        $paket_c_l = $this->input->post('paket_c_l');
        $paket_c_p = $this->input->post('paket_c_p');
        $paket_c_jml = $paket_c_l + $paket_c_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'paket_a_l' => $paket_a_l,
            'paket_a_p' => $paket_a_p,
            'paket_a_jml' => $paket_a_jml,
            'paket_b_l' => $paket_b_l,
            'paket_b_p' => $paket_b_p,
            'paket_b_jml' => $paket_b_jml,
            'paket_c_l' => $paket_c_l,
            'paket_c_p' => $paket_c_p,
            'paket_c_jml' => $paket_c_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Disdik_m->save_disdik_paket($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_paket');
        }
    }

    public function delete_disdik_paket($id_disdik_paket)
    {
        $this->Disdik_m->delete_disdik_paket($id_disdik_paket);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_paket');
    }

    public function edit_disdik_paket($id_disdik_paket)
    {

        $data['disdik_paket'] = $this->Disdik_m->getByIddisdik_paket($id_disdik_paket);

        $data['backend_page'] = "backend/disdik/edit_disdik_paket";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_paket($id_disdik_paket)
    {

        $tahun = $this->input->post('tahun');

        $paket_a_l = $this->input->post('paket_a_l');
        $paket_a_p = $this->input->post('paket_a_p');
        $paket_a_jml = $paket_a_l + $paket_a_p;

        $paket_b_l = $this->input->post('paket_b_l');
        $paket_b_p = $this->input->post('paket_b_p');
        $paket_b_jml = $paket_b_l + $paket_b_p;

        $paket_c_l = $this->input->post('paket_c_l');
        $paket_c_p = $this->input->post('paket_c_p');
        $paket_c_jml = $paket_c_l + $paket_c_p;



        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'paket_a_l' => $paket_a_l,
            'paket_a_p' => $paket_a_p,
            'paket_a_jml' => $paket_a_jml,
            'paket_b_l' => $paket_b_l,
            'paket_b_p' => $paket_b_p,
            'paket_b_jml' => $paket_b_jml,
            'paket_c_l' => $paket_c_l,
            'paket_c_p' => $paket_c_p,
            'paket_c_jml' => $paket_c_jml,

            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_paket($id_disdik_paket, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_paket');
        }
    }

    /**
     * sekolah
     */

    public function disdik_sekolah()
    {
        $data['disdik_sekolah'] = $this->Disdik_m->get_disdik_sekolah();
        $data['backend_page'] = "backend/disdik/disdik_sekolah";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_sekolah()
    {
        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $status = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'status_pendidikan' => $status
        );


        if ($data) {
            $this->Disdik_m->save_disdik_sekolah($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_sekolah');
        }
    }

    public function delete_disdik_sekolah($id_disdik_sekolah)
    {
        $this->Disdik_m->delete_disdik_sekolah($id_disdik_sekolah);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_sekolah');
    }

    public function edit_disdik_sekolah($id_disdik_sekolah)
    {

        $data['disdik_sekolah'] = $this->Disdik_m->getByIddisdik_sekolah($id_disdik_sekolah);

        $data['backend_page'] = "backend/disdik/edit_disdik_sekolah";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_sekolah($id_disdik_sekolah)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $status = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'status_pendidikan' => $status
        );

        $update = $this->Disdik_m->update_disdik_sekolah($id_disdik_sekolah, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_sekolah');
        }
    }

    /**
     * perguruan tinggi
     */

    public function disdik_pt()
    {
        $data['disdik_pt'] = $this->Disdik_m->get_disdik_pt();
        $data['backend_page'] = "backend/disdik/disdik_pt";
        $this->load->view('layouts/admin', $data);
    }

    public function save_disdik_pt()
    {
        $tahun = $this->input->post('tahun');

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;

        $pt_l = $this->input->post('pt_l');
        $pt_p = $this->input->post('pt_p');
        $pt_jml = $pt_l + $pt_p;

        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,
            'pt_l' => $pt_l,
            'pt_p' => $pt_p,
            'pt_jml' => $pt_jml,


            'status_pendidikan' => $status_pendidikan,
        );


        if ($data) {
            $this->Disdik_m->save_disdik_pt($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/disdik/disdik_pt');
        }
    }

    public function delete_disdik_pt($id_disdik_pt)
    {
        $this->Disdik_m->delete_disdik_pt($id_disdik_pt);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/disdik/disdik_pt');
    }

    public function edit_disdik_pt($id_disdik_pt)
    {

        $data['disdik_pt'] = $this->Disdik_m->getByIddisdik_pt($id_disdik_pt);

        $data['backend_page'] = "backend/disdik/edit_disdik_pt";
        $this->load->view('layouts/admin', $data);
    }

    public function update_disdik_pt($id_disdik_pt)
    {
        $tahun = $this->input->post('tahun');

        $slta_l = $this->input->post('slta_l');
        $slta_p = $this->input->post('slta_p');
        $slta_jml = $slta_l + $slta_p;

        $pt_l = $this->input->post('pt_l');
        $pt_p = $this->input->post('pt_p');
        $pt_jml = $pt_l + $pt_p;

        $status_pendidikan = $this->input->post('status_pendidikan');


        $data = array(
            'tahun' => $tahun,
            'slta_l' => $slta_l,
            'slta_p' => $slta_p,
            'slta_jml' => $slta_jml,
            'pt_l' => $pt_l,
            'pt_p' => $pt_p,
            'pt_jml' => $pt_jml,


            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Disdik_m->update_disdik_pt($id_disdik_pt, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/disdik/disdik_pt');
        }
    }
}
