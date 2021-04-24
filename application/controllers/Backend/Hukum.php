<?php

class Hukum extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function lapas()
    {
        $data['lapas'] = $this->Hukum_m->get_lapas();
        $data['backend_page'] = "backend/hukum/lapas";
        $this->load->view('layouts/admin', $data);
    }

    public function save_lapas()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $anak = $this->input->post('anak');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'anak' => $anak,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        if ($data) {
            $this->Hukum_m->save_lapas($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/hukum/lapas');
        }
    }

    public function delete_lapas($id_lapas)
    {
        $this->Hukum_m->delete_lapas($id_lapas);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/hukum/lapas');
    }

    public function edit_lapas($id_lapas)
    {

        $data['lapas'] = $this->Hukum_m->getByIdlapas($id_lapas);

        $data['backend_page'] = "backend/hukum/edit_lapas";
        $this->load->view('layouts/admin', $data);
    }

    public function update_lapas($id_lapas)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $anak = $this->input->post('anak');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'anak' => $anak,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        $update = $this->Hukum_m->update_lapas($id_lapas, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/hukum/lapas');
        }
    }
    /**
     * pendidikan
     */

    public function pendidikan()
    {
        $data['pendidikan'] = $this->Hukum_m->get_lapas_pendidikan();
        $data['backend_page'] = "backend/hukum/pendidikan";
        $this->load->view('layouts/admin', $data);
    }

    public function save_pendidikan()
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

        $pt_l = $this->input->post('pt_l');
        $pt_p = $this->input->post('pt_p');
        $pt_jml = $pt_l + $pt_p;

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
            'pt_l' => $pt_l,
            'pt_p' => $pt_p,
            'pt_jml' => $pt_jml,
            'status_pendidikan' => $status_pendidikan,
        );

        if ($data) {
            $this->Hukum_m->save_lapas_pendidikan($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/hukum/pendidikan');
        }
    }

    public function delete_pendidikan($id_lapas_pendidikan)
    {
        $this->Hukum_m->delete_lapas_pendidikan($id_lapas_pendidikan);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/hukum/pendidikan');
    }

    public function edit_pendidikan($id_lapas_pendidikan)
    {

        $data['pendidikan'] = $this->Hukum_m->getByIdlapas_pendidikan($id_lapas_pendidikan);

        $data['backend_page'] = "backend/hukum/edit_pendidikan";
        $this->load->view('layouts/admin', $data);
    }

    public function update_pendidikan($id_lapas_pendidikan)
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

        $pt_l = $this->input->post('pt_l');
        $pt_p = $this->input->post('pt_p');
        $pt_jml = $pt_l + $pt_p;

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
            'pt_l' => $pt_l,
            'pt_p' => $pt_p,
            'pt_jml' => $pt_jml,
            'status_pendidikan' => $status_pendidikan,
        );

        $update = $this->Hukum_m->update_pendidikan($id_lapas_pendidikan, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/hukum/pendidikan');
        }
    }

    /**
     * usia
     */

    public function usia()
    {
        $data['usia'] = $this->Hukum_m->get_lapas_usia();
        $data['backend_page'] = "backend/hukum/usia";
        $this->load->view('layouts/admin', $data);
    }

    public function save_usia()
    {
        $tahun = $this->input->post('tahun');
        $jenis_lapas = $this->input->post('jenis_lapas');

        $usia_12_l = $this->input->post('usia_12_l');
        $usia_12_p = $this->input->post('usia_12_p');


        $usia_17_l = $this->input->post('usia_17_l');
        $usia_17_p = $this->input->post('usia_17_p');


        $usia_22_l = $this->input->post('usia_22_l');
        $usia_22_p = $this->input->post('usia_22_p');


        $usia_30_l = $this->input->post('usia_30_l');
        $usia_30_p = $this->input->post('usia_30_p');

        $usia_39_l = $this->input->post('usia_39_l');
        $usia_39_p = $this->input->post('usia_39_p');

        $usia_49_l = $this->input->post('usia_49_l');
        $usia_49_p = $this->input->post('usia_49_p');

        $usia_50_l = $this->input->post('usia_50_l');
        $usia_50_p = $this->input->post('usia_50_p');





        $data = array(
            'tahun' => $tahun,
            'jenis_lapas' => $jenis_lapas,
            'usia_12_l' => $usia_12_l,
            'usia_12_p' => $usia_12_p,

            'usia_17_l' => $usia_17_l,
            'usia_17_p' => $usia_17_p,

            'usia_22_l' => $usia_22_l,
            'usia_22_p' => $usia_22_p,

            'usia_30_l' => $usia_30_l,
            'usia_30_p' => $usia_30_p,

            'usia_39_l' => $usia_39_l,
            'usia_39_p' => $usia_39_p,

            'usia_49_l' => $usia_49_l,
            'usia_49_p' => $usia_49_p,

            'usia_50_l' => $usia_50_l,
            'usia_50_p' => $usia_50_p,


        );

        if ($data) {
            $this->Hukum_m->save_lapas_usia($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/hukum/usia');
        }
    }

    public function delete_usia($id_lapas_usia)
    {
        $this->Hukum_m->delete_lapas_usia($id_lapas_usia);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/hukum/usia');
    }

    public function edit_usia($id_lapas_usia)
    {

        $data['usia'] = $this->Hukum_m->getByIdlapas_usia($id_lapas_usia);

        $data['backend_page'] = "backend/hukum/edit_usia";
        $this->load->view('layouts/admin', $data);
    }

    public function update_usia($id_lapas_usia)
    {
        $tahun = $this->input->post('tahun');
        $jenis_lapas = $this->input->post('jenis_lapas');

        $usia_12_l = $this->input->post('usia_12_l');
        $usia_12_p = $this->input->post('usia_12_p');


        $usia_17_l = $this->input->post('usia_17_l');
        $usia_17_p = $this->input->post('usia_17_p');


        $usia_22_l = $this->input->post('usia_22_l');
        $usia_22_p = $this->input->post('usia_22_p');


        $usia_30_l = $this->input->post('usia_30_l');
        $usia_30_p = $this->input->post('usia_30_p');

        $usia_39_l = $this->input->post('usia_39_l');
        $usia_39_p = $this->input->post('usia_39_p');

        $usia_49_l = $this->input->post('usia_49_l');
        $usia_49_p = $this->input->post('usia_49_p');

        $usia_50_l = $this->input->post('usia_50_l');
        $usia_50_p = $this->input->post('usia_50_p');





        $data = array(
            'tahun' => $tahun,
            'jenis_lapas' => $jenis_lapas,
            'usia_12_l' => $usia_12_l,
            'usia_12_p' => $usia_12_p,

            'usia_17_l' => $usia_17_l,
            'usia_17_p' => $usia_17_p,

            'usia_22_l' => $usia_22_l,
            'usia_22_p' => $usia_22_p,

            'usia_30_l' => $usia_30_l,
            'usia_30_p' => $usia_30_p,

            'usia_39_l' => $usia_39_l,
            'usia_39_p' => $usia_39_p,

            'usia_49_l' => $usia_49_l,
            'usia_49_p' => $usia_49_p,

            'usia_50_l' => $usia_50_l,
            'usia_50_p' => $usia_50_p,


        );

        $update = $this->Hukum_m->update_usia($id_lapas_usia, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/hukum/usia');
        }
    }

    /**
     * Kasus
     */

    public function kasus()
    {
        $data['kasus'] = $this->Hukum_m->get_lapas_kasus();
        $data['backend_page'] = "backend/hukum/kasus";
        $this->load->view('layouts/admin', $data);
    }


    public function save_kasus()
    {
        $tahun = $this->input->post('tahun');
        $jenis_lapas = $this->input->post('jenis_lapas');

        $pembunuhan_l = $this->input->post('pembunuhan_l');
        $pembunuhan_p = $this->input->post('pembunuhan_p');


        $pencurian_l = $this->input->post('pencurian_l');
        $pencurian_p = $this->input->post('pencurian_p');


        $pemerkosa_l = $this->input->post('pemerkosa_l');
        $pemerkosa_p = $this->input->post('pemerkosa_p');


        $asusila_l = $this->input->post('asusila_l');
        $asusila_p = $this->input->post('asusila_p');

        $napza_l = $this->input->post('napza_l');
        $napza_p = $this->input->post('napza_p');

        $kdrt_l = $this->input->post('kdrt_l');
        $kdrt_p = $this->input->post('kdrt_p');

        $korupsi_l = $this->input->post('korupsi_l');
        $korupsi_p = $this->input->post('korupsi_p');

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');





        $data = array(
            'tahun' => $tahun,
            'jenis_lapas' => $jenis_lapas,
            'pembunuhan_l' => $pembunuhan_l,
            'pembunuhan_p' => $pembunuhan_p,

            'pencurian_l' => $pencurian_l,
            'pencurian_p' => $pencurian_p,

            'pemerkosa_l' => $pemerkosa_l,
            'pemerkosa_p' => $pemerkosa_p,

            'asusila_l' => $asusila_l,
            'asusila_p' => $asusila_p,

            'napza_l' => $napza_l,
            'napza_p' => $napza_p,

            'kdrt_l' => $kdrt_l,
            'kdrt_p' => $kdrt_p,

            'korupsi_l' => $korupsi_l,
            'korupsi_p' => $korupsi_p,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,




        );

        if ($data) {
            $this->Hukum_m->save_lapas_kasus($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/hukum/kasus');
        }
    }

    public function delete_kasus($id_lapas_kasus)
    {
        $this->Hukum_m->delete_lapas_kasus($id_lapas_kasus);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/hukum/kasus');
    }

    public function edit_kasus($id_lapas_kasus)
    {

        $data['kasus'] = $this->Hukum_m->getByIdlapas_kasus($id_lapas_kasus);

        $data['backend_page'] = "backend/hukum/edit_kasus";
        $this->load->view('layouts/admin', $data);
    }

    public function update_kasus($id_lapas_kasus)
    {
        $tahun = $this->input->post('tahun');
        $jenis_lapas = $this->input->post('jenis_lapas');

        $pembunuhan_l = $this->input->post('pembunuhan_l');
        $pembunuhan_p = $this->input->post('pembunuhan_p');


        $pencurian_l = $this->input->post('pencurian_l');
        $pencurian_p = $this->input->post('pencurian_p');


        $pemerkosa_l = $this->input->post('pemerkosa_l');
        $pemerkosa_p = $this->input->post('pemerkosa_p');


        $asusila_l = $this->input->post('asusila_l');
        $asusila_p = $this->input->post('asusila_p');

        $napza_l = $this->input->post('napza_l');
        $napza_p = $this->input->post('napza_p');

        $kdrt_l = $this->input->post('kdrt_l');
        $kdrt_p = $this->input->post('kdrt_p');

        $korupsi_l = $this->input->post('korupsi_l');
        $korupsi_p = $this->input->post('korupsi_p');

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');





        $data = array(
            'tahun' => $tahun,
            'jenis_lapas' => $jenis_lapas,
            'pembunuhan_l' => $pembunuhan_l,
            'pembunuhan_p' => $pembunuhan_p,

            'pencurian_l' => $pencurian_l,
            'pencurian_p' => $pencurian_p,

            'pemerkosa_l' => $pemerkosa_l,
            'pemerkosa_p' => $pemerkosa_p,

            'asusila_l' => $asusila_l,
            'asusila_p' => $asusila_p,

            'napza_l' => $napza_l,
            'napza_p' => $napza_p,

            'kdrt_l' => $kdrt_l,
            'kdrt_p' => $kdrt_p,

            'korupsi_l' => $korupsi_l,
            'korupsi_p' => $korupsi_p,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,




        );

        $update = $this->Hukum_m->update_kasus($id_lapas_kasus, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/hukum/kasus');
        }
    }
}
