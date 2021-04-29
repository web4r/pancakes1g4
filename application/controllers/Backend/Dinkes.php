<?php

class Dinkes extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function dinkes_ahp()
    {
        $data['dinkes_ahp'] = $this->Dinkes_m->get_dinkes_ahp();
        $data['backend_page'] = "backend/dinkes/dinkes_ahp";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_ahp()
    {

        $tahun = $this->input->post('tahun');
        $ahp = $this->input->post('ahp');



        $data = array(
            'tahun' => $tahun,
            'ahp' => $ahp
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_ahp($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_ahp');
        }
    }

    public function delete_dinkes_ahp($id_dinkes_ahp)
    {
        $this->Dinkes_m->delete_dinkes_ahp($id_dinkes_ahp);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_ahp');
    }

    public function edit_dinkes_ahp($id_dinkes_ahp)
    {

        $data['dinkes_ahp'] = $this->Dinkes_m->getByIddinkes_ahp($id_dinkes_ahp);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_ahp";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_ahp($id_dinkes_ahp)
    {

        $tahun = $this->input->post('tahun');
        $ahp = $this->input->post('ahp');



        $data = array(
            'tahun' => $tahun,
            'ahp' => $ahp
        );


        $update = $this->Dinkes_m->update_dinkes_ahp($id_dinkes_ahp, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_ahp');
        }
    }

    /**
     * jumlah kematian ibu melahirkan
     */

    public function dinkes_kim()
    {
        $data['dinkes_kim'] = $this->Dinkes_m->get_dinkes_kim();
        $data['backend_page'] = "backend/dinkes/dinkes_kim";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_kim()
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,
            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_kim($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_kim');
        }
    }

    public function delete_dinkes_kim($id_dinkes_kim)
    {
        $this->Dinkes_m->delete_dinkes_kim($id_dinkes_kim);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_kim');
    }

    public function edit_dinkes_kim($id_dinkes_kim)
    {

        $data['dinkes_kim'] = $this->Dinkes_m->getByIddinkes_kim($id_dinkes_kim);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_kim";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_kim($id_dinkes_kim)
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,
            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_kim($id_dinkes_kim, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_kim');
        }
    }

    /**
     * penyebab kematian ibu melahirkan
     */

    public function dinkes_pkim()
    {
        $data['dinkes_pkim'] = $this->Dinkes_m->get_dinkes_pkim();
        $data['backend_page'] = "backend/dinkes/dinkes_pkim";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_pkim()
    {

        $tahun = $this->input->post('tahun');
        $eklamsia = $this->input->post('eklamsia');
        $infeksi = $this->input->post('infeksi');
        $abortus = $this->input->post('abortus');
        $plama = $this->input->post('plama');
        $emboli = $this->input->post('emboli');
        $komp = $this->input->post('komp');
        $lain_lain = $this->input->post('lain_lain');
        $pendarahan = $this->input->post('pendarahan');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'eklamsia' => $eklamsia,
            'infeksi' => $infeksi,
            'abortus' => $abortus,
            'plama' => $plama,
            'emboli' => $emboli,
            'komp' => $komp,
            'lain_lain' => $lain_lain,
            'pendarahan' => $pendarahan,
            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_pkim($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_pkim');
        }
    }

    public function delete_dinkes_pkim($id_dinkes_pkim)
    {
        $this->Dinkes_m->delete_dinkes_pkim($id_dinkes_pkim);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_pkim');
    }

    public function edit_dinkes_pkim($id_dinkes_pkim)
    {

        $data['dinkes_pkim'] = $this->Dinkes_m->getByIddinkes_pkim($id_dinkes_pkim);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_pkim";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_pkim($id_dinkes_pkim)
    {

        $tahun = $this->input->post('tahun');
        $eklamsia = $this->input->post('eklamsia');
        $infeksi = $this->input->post('infeksi');
        $abortus = $this->input->post('abortus');
        $plama = $this->input->post('plama');
        $emboli = $this->input->post('emboli');
        $komp = $this->input->post('komp');
        $lain_lain = $this->input->post('lain_lain');
        $pendarahan = $this->input->post('pendarahan');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'eklamsia' => $eklamsia,
            'infeksi' => $infeksi,
            'abortus' => $abortus,
            'plama' => $plama,
            'emboli' => $emboli,
            'komp' => $komp,
            'lain_lain' => $lain_lain,
            'pendarahan' => $pendarahan,
            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_pkim($id_dinkes_pkim, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_pkim');
        }
    }

    /**
     * cpp
     */

    public function dinkes_cpp()
    {
        $data['dinkes_cpp'] = $this->Dinkes_m->get_dinkes_cpp();
        $data['backend_page'] = "backend/dinkes/dinkes_cpp";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_cpp()
    {

        $tahun = $this->input->post('tahun');
        $dokter = $this->input->post('dokter');
        $bidan = $this->input->post('bidan');
        $dukun = $this->input->post('dukun');
        $lainnya = $this->input->post('lainnya');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'dokter' => $dokter,
            'bidan' => $bidan,
            'dukun' => $dukun,
            'lainnya' => $lainnya,

            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_cpp($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_cpp');
        }
    }

    public function delete_dinkes_cpp($id_dinkes_cpp)
    {
        $this->Dinkes_m->delete_dinkes_cpp($id_dinkes_cpp);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_cpp');
    }

    public function edit_dinkes_cpp($id_dinkes_cpp)
    {

        $data['dinkes_cpp'] = $this->Dinkes_m->getByIddinkes_cpp($id_dinkes_cpp);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_cpp";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_cpp($id_dinkes_cpp)
    {

        $tahun = $this->input->post('tahun');
        $dokter = $this->input->post('dokter');
        $bidan = $this->input->post('bidan');
        $dukun = $this->input->post('dukun');
        $lainnya = $this->input->post('lainnya');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'dokter' => $dokter,
            'bidan' => $bidan,
            'dukun' => $dukun,
            'lainnya' => $lainnya,

            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_cpp($id_dinkes_cpp, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_cpp');
        }
    }

    /**
     * kih
     */

    public function dinkes_kih()
    {
        $data['dinkes_kih'] = $this->Dinkes_m->get_dinkes_kih();
        $data['backend_page'] = "backend/dinkes/dinkes_kih";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_kih()
    {

        $tahun = $this->input->post('tahun');
        $k1 = $this->input->post('k1');
        $k4 = $this->input->post('k4');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'k1' => $k1,
            'k4' => $k4,


            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_kih($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_kih');
        }
    }

    public function delete_dinkes_kih($id_dinkes_kih)
    {
        $this->Dinkes_m->delete_dinkes_kih($id_dinkes_kih);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_kih');
    }

    public function edit_dinkes_kih($id_dinkes_kih)
    {

        $data['dinkes_kih'] = $this->Dinkes_m->getByIddinkes_kih($id_dinkes_kih);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_kih";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_kih($id_dinkes_kih)
    {

        $tahun = $this->input->post('tahun');
        $k1 = $this->input->post('k1');
        $k4 = $this->input->post('k4');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'k1' => $k1,
            'k4' => $k4,


            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_kih($id_dinkes_kih, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_kih');
        }
    }


    /**
     * tetanus
     */

    public function dinkes_tetanus()
    {
        $data['dinkes_tetanus'] = $this->Dinkes_m->get_dinkes_tetanus();
        $data['backend_page'] = "backend/dinkes/dinkes_tetanus";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_tetanus()
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,
            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_tetanus($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_tetanus');
        }
    }

    public function delete_dinkes_tetanus($id_dinkes_tetanus)
    {
        $this->Dinkes_m->delete_dinkes_tetanus($id_dinkes_tetanus);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_tetanus');
    }

    public function edit_dinkes_tetanus($id_dinkes_tetanus)
    {

        $data['dinkes_tetanus'] = $this->Dinkes_m->getByIddinkes_tetanus($id_dinkes_tetanus);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_tetanus";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_tetanus($id_dinkes_tetanus)
    {

        $tahun = $this->input->post('tahun');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'jumlah' => $jumlah,
            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_tetanus($id_dinkes_tetanus, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_tetanus');
        }
    }

    /**
     * zat besi
     */

    public function dinkes_zat()
    {
        $data['dinkes_zat'] = $this->Dinkes_m->get_dinkes_zat();
        $data['backend_page'] = "backend/dinkes/dinkes_zat";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_zat()
    {

        $tahun = $this->input->post('tahun');
        $fe1 = $this->input->post('fe1');
        $fe3 = $this->input->post('fe3');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'fe1' => $fe1,
            'fe3' => $fe3,


            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_zat($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_zat');
        }
    }

    public function delete_dinkes_zat($id_dinkes_zat)
    {
        $this->Dinkes_m->delete_dinkes_zat($id_dinkes_zat);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_zat');
    }

    public function edit_dinkes_zat($id_dinkes_zat)
    {

        $data['dinkes_zat'] = $this->Dinkes_m->getByIddinkes_zat($id_dinkes_zat);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_zat";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_zat($id_dinkes_zat)
    {

        $tahun = $this->input->post('tahun');
        $fe1 = $this->input->post('fe1');
        $fe3 = $this->input->post('fe3');

        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'fe1' => $fe1,
            'fe3' => $fe3,


            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_zat($id_dinkes_zat, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_zat');
        }
    }

    /**
     * kb
     */

    public function dinkes_kb()
    {
        $data['dinkes_kb'] = $this->Dinkes_m->get_dinkes_kb();
        $data['backend_page'] = "backend/dinkes/dinkes_kb";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_kb()
    {

        $tahun = $this->input->post('tahun');
        $mow = $this->input->post('mow');
        $iud = $this->input->post('iud');

        $implant = $this->input->post('implant');
        $suntik = $this->input->post('suntik');
        $pil = $this->input->post('pil');
        $jumlahkbp = $this->input->post('jumlahkbp');
        $mop = $this->input->post('mop');
        $kondom = $this->input->post('kondom');
        $jumlahkbl = $this->input->post('jumlahkbl');


        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'mow' => $mow,
            'iud' => $iud,
            'implant' => $implant,
            'suntik' => $suntik,
            'pil' => $pil,
            'jumlahkbp' => $jumlahkbp,
            'mop' => $mop,
            'kondom' => $kondom,
            'jumlahkbl' => $jumlahkbl,


            'status_dinkes' => $status
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_kb($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_kb');
        }
    }

    public function delete_dinkes_kb($id_dinkes_kb)
    {
        $this->Dinkes_m->delete_dinkes_kb($id_dinkes_kb);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_kb');
    }

    public function edit_dinkes_kb($id_dinkes_kb)
    {

        $data['dinkes_kb'] = $this->Dinkes_m->getByIddinkes_kb($id_dinkes_kb);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_kb";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_kb($id_dinkes_kb)
    {

        $tahun = $this->input->post('tahun');
        $mow = $this->input->post('mow');
        $iud = $this->input->post('iud');

        $implant = $this->input->post('implant');
        $suntik = $this->input->post('suntik');
        $pil = $this->input->post('pil');
        $jumlahkbp = $this->input->post('jumlahkbp');
        $mop = $this->input->post('mop');
        $kondom = $this->input->post('kondom');
        $jumlahkbl = $this->input->post('jumlahkbl');


        $status = $this->input->post('status_dinkes');



        $data = array(
            'tahun' => $tahun,
            'mow' => $mow,
            'iud' => $iud,
            'implant' => $implant,
            'suntik' => $suntik,
            'pil' => $pil,
            'jumlahkbp' => $jumlahkbp,
            'mop' => $mop,
            'kondom' => $kondom,
            'jumlahkbl' => $jumlahkbl,


            'status_dinkes' => $status
        );


        $update = $this->Dinkes_m->update_dinkes_kb($id_dinkes_kb, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_kb');
        }
    }
    /**
     * napza
     */

    public function dinkes_napza()
    {
        $data['dinkes_napza'] = $this->Dinkes_m->get_dinkes_napza();
        $data['backend_page'] = "backend/dinkes/dinkes_napza";
        $this->load->view('layouts/admin', $data);
    }

    public function save_dinkes_napza()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $status = $this->input->post('status_dinkes');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'status_dinkes' => $status,
        );

        if ($data) {
            $this->Dinkes_m->save_dinkes_napza($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/dinkes/dinkes_napza');
        }
    }

    public function delete_dinkes_napza($id_dinkes_napza)
    {
        $this->Dinkes_m->delete_dinkes_napza($id_dinkes_napza);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/dinkes/dinkes_napza');
    }

    public function edit_dinkes_napza($id_dinkes_napza)
    {

        $data['dinkes_napza'] = $this->Dinkes_m->getByIddinkes_napza($id_dinkes_napza);

        $data['backend_page'] = "backend/dinkes/edit_dinkes_napza";
        $this->load->view('layouts/admin', $data);
    }

    public function update_dinkes_napza($id_dinkes_napza)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $status = $this->input->post('status_dinkes');

        $data  = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'status_dinkes' => $status,
        );


        $update = $this->Dinkes_m->update_dinkes_napza($id_dinkes_napza, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/dinkes/dinkes_napza');
        }
    }
}
