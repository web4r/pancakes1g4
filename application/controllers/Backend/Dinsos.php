<?php

class Dinsos extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function dinsos_kkm()
    {
        $data['dinsos_kkm'] = $this->Dinsos_m->get_dinsos_kkm();
        $data['backend_page'] = "backend/dinsos/dinsos_kkm";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_kkm()
    {
        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status_dinsos = $this->input->post('status_dinsos');



        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status_dinsos' => $status_dinsos
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_kkm($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_kkm');
        }
    }

    public function delete_dinsos_kkm($id_dinsos_kkm)
    {
        $this->Dinsos_m->delete_dinsos_kkm($id_dinsos_kkm);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_kkm');
    }

    public function edit_dinsos_kkm($id_dinsos_kkm)
    {

        $data['dinsos_kkm'] = $this->Dinsos_m->getByIddinsos_kkm($id_dinsos_kkm);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_kkm";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_kkm($id_dinsos_kkm)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $jumlah = $pria + $wanita;
        $status_dinsos = $this->input->post('status_dinsos');




        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'jumlah' => $jumlah,
            'status_dinsos' => $status_dinsos
        );


        $update = $this->Dinsos_m->update_dinsos_kkm($id_dinsos_kkm, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_kkm');
        }
    }

    /**
     * pendidikan
     */

    public function dinsos_pendidikan()
    {
        $data['dinsos_pendidikan'] = $this->Dinsos_m->get_dinsos_pendidikan();
        $data['backend_page'] = "backend/dinsos/dinsos_pendidikan";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_pendidikan()
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



        $status_dinsos = $this->input->post('status_dinsos');


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

            'status_dinsos' => $status_dinsos,
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_pendidikan($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_pendidikan');
        }
    }

    public function delete_dinsos_pendidikan($id_dinsos_pendidikan)
    {
        $this->Dinsos_m->delete_dinsos_pendidikan($id_dinsos_pendidikan);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_pendidikan');
    }

    public function edit_dinsos_pendidikan($id_dinsos_pendidikan)
    {

        $data['dinsos_pendidikan'] = $this->Dinsos_m->getByIddinsos_pendidikan($id_dinsos_pendidikan);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_pendidikan";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_pendidikan($id_dinsos_pendidikan)
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



        $status_dinsos = $this->input->post('status_dinsos');


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

            'status_dinsos' => $status_dinsos,
        );

        $update = $this->Dinsos_m->update_dinsos_pendidikan($id_dinsos_pendidikan, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_pendidikan');
        }
    }

    /**
     * aktifitas
     */

    public function dinsos_aktifitas()
    {
        $data['dinsos_aktifitas'] = $this->Dinsos_m->get_dinsos_aktifitas();
        $data['backend_page'] = "backend/dinsos/dinsos_aktifitas";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_aktifitas()
    {

        $tahun = $this->input->post('tahun');

        $tani_l = $this->input->post('tani_l');
        $tani_p = $this->input->post('tani_p');
        $tani_jml = $tani_l + $tani_p;

        $tambang_l = $this->input->post('tambang_l');
        $tambang_p = $this->input->post('tambang_p');
        $tambang_jml = $tambang_l + $tambang_p;

        $industri_l = $this->input->post('industri_l');
        $industri_p = $this->input->post('industri_p');
        $industri_jml = $industri_l + $industri_p;

        $jasa_l = $this->input->post('jasa_l');
        $jasa_p = $this->input->post('jasa_p');
        $jasa_jml = $jasa_l + $jasa_p;

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');
        $lainnya_jml = $lainnya_l + $lainnya_p;



        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'tani_l' => $tani_l,
            'tani_p' => $tani_p,
            'tani_jml' => $tani_jml,
            'tambang_l' => $tambang_l,
            'tambang_p' => $tambang_p,
            'tambang_jml' => $tambang_jml,
            'industri_l' => $industri_l,
            'industri_p' => $industri_p,
            'industri_jml' => $industri_jml,
            'jasa_l' => $jasa_l,
            'jasa_p' => $jasa_p,
            'jasa_jml' => $jasa_jml,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,
            'lainnya_jml' => $lainnya_jml,

            'status_dinsos' => $status_dinsos,
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_aktifitas($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_aktifitas');
        }
    }

    public function delete_dinsos_aktifitas($id_dinsos_aktifitas)
    {
        $this->Dinsos_m->delete_dinsos_aktifitas($id_dinsos_aktifitas);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_aktifitas');
    }

    public function edit_dinsos_aktifitas($id_dinsos_aktifitas)
    {

        $data['dinsos_aktifitas'] = $this->Dinsos_m->getByIddinsos_aktifitas($id_dinsos_aktifitas);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_aktifitas";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_aktifitas($id_dinsos_aktifitas)
    {


        $tahun = $this->input->post('tahun');

        $tani_l = $this->input->post('tani_l');
        $tani_p = $this->input->post('tani_p');
        $tani_jml = $tani_l + $tani_p;

        $tambang_l = $this->input->post('tambang_l');
        $tambang_p = $this->input->post('tambang_p');
        $tambang_jml = $tambang_l + $tambang_p;

        $industri_l = $this->input->post('industri_l');
        $industri_p = $this->input->post('industri_p');
        $industri_jml = $industri_l + $industri_p;

        $jasa_l = $this->input->post('jasa_l');
        $jasa_p = $this->input->post('jasa_p');
        $jasa_jml = $jasa_l + $jasa_p;

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');
        $lainnya_jml = $lainnya_l + $lainnya_p;



        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'tani_l' => $tani_l,
            'tani_p' => $tani_p,
            'tani_jml' => $tani_jml,
            'tambang_l' => $tambang_l,
            'tambang_p' => $tambang_p,
            'tambang_jml' => $tambang_jml,
            'industri_l' => $industri_l,
            'industri_p' => $industri_p,
            'industri_jml' => $industri_jml,
            'jasa_l' => $jasa_l,
            'jasa_p' => $jasa_p,
            'jasa_jml' => $jasa_jml,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,
            'lainnya_jml' => $lainnya_jml,

            'status_dinsos' => $status_dinsos,
        );

        $update = $this->Dinsos_m->update_dinsos_aktifitas($id_dinsos_aktifitas, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_aktifitas');
        }
    }

    /**
     * sakit
     */

    public function dinsos_sakit()
    {
        $data['dinsos_sakit'] = $this->Dinsos_m->get_dinsos_sakit();
        $data['backend_page'] = "backend/dinsos/dinsos_sakit";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_sakit()
    {
        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_sakit($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_sakit');
        }
    }

    public function delete_dinsos_sakit($id_dinsos_sakit)
    {
        $this->Dinsos_m->delete_dinsos_sakit($id_dinsos_sakit);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_sakit');
    }

    public function edit_dinsos_sakit($id_dinsos_sakit)
    {

        $data['dinsos_sakit'] = $this->Dinsos_m->getByIddinsos_sakit($id_dinsos_sakit);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_sakit";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_sakit($id_dinsos_sakit)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );


        $update = $this->Dinsos_m->update_dinsos_sakit($id_dinsos_sakit, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_sakit');
        }
    }

    /**
     * disabilitas menurut pendidkan
     */

    public function dinsos_dmp()
    {
        $data['dinsos_dmp'] = $this->Dinsos_m->get_dinsos_dmp();
        $data['backend_page'] = "backend/dinsos/dinsos_dmp";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_dmp()
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



        $status_dinsos = $this->input->post('status_dinsos');


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

            'status_dinsos' => $status_dinsos,
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_dmp($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_dmp');
        }
    }

    public function delete_dinsos_dmp($id_dinsos_dmp)
    {
        $this->Dinsos_m->delete_dinsos_dmp($id_dinsos_dmp);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_dmp');
    }

    public function edit_dinsos_dmp($id_dinsos_dmp)
    {

        $data['dinsos_dmp'] = $this->Dinsos_m->getByIddinsos_dmp($id_dinsos_dmp);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_dmp";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_dmp($id_dinsos_dmp)
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



        $status_dinsos = $this->input->post('status_dinsos');


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

            'status_dinsos' => $status_dinsos,
        );

        $update = $this->Dinsos_m->update_dinsos_dmp($id_dinsos_dmp, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_dmp');
        }
    }

    /**
     * dma
     */

    public function dinsos_dma()
    {
        $data['dinsos_dma'] = $this->Dinsos_m->get_dinsos_dma();
        $data['backend_page'] = "backend/dinsos/dinsos_dma";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_dma()
    {

        $tahun = $this->input->post('tahun');

        $tani_l = $this->input->post('tani_l');
        $tani_p = $this->input->post('tani_p');
        $tani_jml = $tani_l + $tani_p;

        $tambang_l = $this->input->post('tambang_l');
        $tambang_p = $this->input->post('tambang_p');
        $tambang_jml = $tambang_l + $tambang_p;

        $industri_l = $this->input->post('industri_l');
        $industri_p = $this->input->post('industri_p');
        $industri_jml = $industri_l + $industri_p;

        $jasa_l = $this->input->post('jasa_l');
        $jasa_p = $this->input->post('jasa_p');
        $jasa_jml = $jasa_l + $jasa_p;

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');
        $lainnya_jml = $lainnya_l + $lainnya_p;



        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'tani_l' => $tani_l,
            'tani_p' => $tani_p,
            'tani_jml' => $tani_jml,
            'tambang_l' => $tambang_l,
            'tambang_p' => $tambang_p,
            'tambang_jml' => $tambang_jml,
            'industri_l' => $industri_l,
            'industri_p' => $industri_p,
            'industri_jml' => $industri_jml,
            'jasa_l' => $jasa_l,
            'jasa_p' => $jasa_p,
            'jasa_jml' => $jasa_jml,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,
            'lainnya_jml' => $lainnya_jml,

            'status_dinsos' => $status_dinsos,
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_dma($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_dma');
        }
    }

    public function delete_dinsos_dma($id_dinsos_dma)
    {
        $this->Dinsos_m->delete_dinsos_dma($id_dinsos_dma);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_dma');
    }

    public function edit_dinsos_dma($id_dinsos_dma)
    {

        $data['dinsos_dma'] = $this->Dinsos_m->getByIddinsos_dma($id_dinsos_dma);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_dma";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_dma($id_dinsos_dma)
    {


        $tahun = $this->input->post('tahun');

        $tani_l = $this->input->post('tani_l');
        $tani_p = $this->input->post('tani_p');
        $tani_jml = $tani_l + $tani_p;

        $tambang_l = $this->input->post('tambang_l');
        $tambang_p = $this->input->post('tambang_p');
        $tambang_jml = $tambang_l + $tambang_p;

        $industri_l = $this->input->post('industri_l');
        $industri_p = $this->input->post('industri_p');
        $industri_jml = $industri_l + $industri_p;

        $jasa_l = $this->input->post('jasa_l');
        $jasa_p = $this->input->post('jasa_p');
        $jasa_jml = $jasa_l + $jasa_p;

        $lainnya_l = $this->input->post('lainnya_l');
        $lainnya_p = $this->input->post('lainnya_p');
        $lainnya_jml = $lainnya_l + $lainnya_p;



        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'tani_l' => $tani_l,
            'tani_p' => $tani_p,
            'tani_jml' => $tani_jml,
            'tambang_l' => $tambang_l,
            'tambang_p' => $tambang_p,
            'tambang_jml' => $tambang_jml,
            'industri_l' => $industri_l,
            'industri_p' => $industri_p,
            'industri_jml' => $industri_jml,
            'jasa_l' => $jasa_l,
            'jasa_p' => $jasa_p,
            'jasa_jml' => $jasa_jml,

            'lainnya_l' => $lainnya_l,
            'lainnya_p' => $lainnya_p,
            'lainnya_jml' => $lainnya_jml,

            'status_dinsos' => $status_dinsos,
        );

        $update = $this->Dinsos_m->update_dinsos_dma($id_dinsos_dma, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_dma');
        }
    }

    /**
     * jumlah anak jalan
     */

    public function dinsos_jaj()
    {
        $data['dinsos_jaj'] = $this->Dinsos_m->get_dinsos_jaj();
        $data['backend_page'] = "backend/dinsos/dinsos_jaj";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_jaj()
    {
        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_jaj($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_jaj');
        }
    }

    public function delete_dinsos_jaj($id_dinsos_jaj)
    {
        $this->Dinsos_m->delete_dinsos_jaj($id_dinsos_jaj);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_jaj');
    }

    public function edit_dinsos_jaj($id_dinsos_jaj)
    {

        $data['dinsos_jaj'] = $this->Dinsos_m->getByIddinsos_jaj($id_dinsos_jaj);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_jaj";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_jaj($id_dinsos_jaj)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );


        $update = $this->Dinsos_m->update_dinsos_jaj($id_dinsos_jaj, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_jaj');
        }
    }

    /**
     * jumlah terlantar anak
     */

    public function dinsos_jta()
    {
        $data['dinsos_jta'] = $this->Dinsos_m->get_dinsos_jta();
        $data['backend_page'] = "backend/dinsos/dinsos_jta";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_jta()
    {
        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_jta($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_jta');
        }
    }

    public function delete_dinsos_jta($id_dinsos_jta)
    {
        $this->Dinsos_m->delete_dinsos_jta($id_dinsos_jta);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_jta');
    }

    public function edit_dinsos_jta($id_dinsos_jta)
    {

        $data['dinsos_jta'] = $this->Dinsos_m->getByIddinsos_jta($id_dinsos_jta);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_jta";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_jta($id_dinsos_jta)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');





        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,

        );


        $update = $this->Dinsos_m->update_dinsos_jta($id_dinsos_jta, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_jta');
        }
    }

    /**
     * abk
     */

    public function dinsos_abk()
    {
        $data['dinsos_abk'] = $this->Dinsos_m->get_dinsos_abk();
        $data['backend_page'] = "backend/dinsos/dinsos_abk";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinsos_abk()
    {
        $tahun = $this->input->post('tahun');

        $puskesmas_l = $this->input->post('puskesmas_l');
        $puskesmas_p = $this->input->post('puskesmas_p');
        $puskesmas_jml = $puskesmas_l + $puskesmas_p;

        $rs_l = $this->input->post('rs_l');
        $rs_p = $this->input->post('rs_p');
        $rs_jml = $rs_l + $rs_p;

        $klinik_l = $this->input->post('klinik_l');
        $klinik_p = $this->input->post('klinik_p');
        $klinik_jml = $klinik_l + $klinik_p;




        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'puskesmas_l' => $puskesmas_l,
            'puskesmas_p' => $puskesmas_p,
            'puskesmas_jml' => $puskesmas_jml,
            'rs_l' => $rs_l,
            'rs_p' => $rs_p,
            'rs_jml' => $rs_jml,
            'klinik_l' => $klinik_l,
            'klinik_p' => $klinik_p,
            'klinik_jml' => $klinik_jml,


            'status_dinsos' => $status_dinsos,
        );

        if ($data) {
            $this->Dinsos_m->save_dinsos_abk($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinsos/dinsos_abk');
        }
    }

    public function delete_dinsos_abk($id_dinsos_abk)
    {
        $this->Dinsos_m->delete_dinsos_abk($id_dinsos_abk);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinsos/dinsos_abk');
    }

    public function edit_dinsos_abk($id_dinsos_abk)
    {

        $data['dinsos_abk'] = $this->Dinsos_m->getByIddinsos_abk($id_dinsos_abk);

        $data['backend_page'] = "backend/dinsos/edit_dinsos_abk";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinsos_abk($id_dinsos_abk)
    {

        $tahun = $this->input->post('tahun');

        $puskesmas_l = $this->input->post('puskesmas_l');
        $puskesmas_p = $this->input->post('puskesmas_p');
        $puskesmas_jml = $puskesmas_l + $puskesmas_p;

        $rs_l = $this->input->post('rs_l');
        $rs_p = $this->input->post('rs_p');
        $rs_jml = $rs_l + $rs_p;

        $klinik_l = $this->input->post('klinik_l');
        $klinik_p = $this->input->post('klinik_p');
        $klinik_jml = $klinik_l + $klinik_p;




        $status_dinsos = $this->input->post('status_dinsos');


        $data = array(
            'tahun' => $tahun,
            'puskesmas_l' => $puskesmas_l,
            'puskesmas_p' => $puskesmas_p,
            'puskesmas_jml' => $puskesmas_jml,
            'rs_l' => $rs_l,
            'rs_p' => $rs_p,
            'rs_jml' => $rs_jml,
            'klinik_l' => $klinik_l,
            'klinik_p' => $klinik_p,
            'klinik_jml' => $klinik_jml,


            'status_dinsos' => $status_dinsos,
        );


        $update = $this->Dinsos_m->update_dinsos_abk($id_dinsos_abk, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinsos/dinsos_abk');
        }
    }
}
