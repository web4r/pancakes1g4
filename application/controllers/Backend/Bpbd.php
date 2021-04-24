<?php

class Bpbd extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('is_loggedin')) {

            $this->session->set_flashdata('no_access', 'maaf silahkan login terlebih dahulu');

            redirect('Login');
        }
    }

    public function pak()
    {
        $data['pak'] = $this->Bpbd_m->get_pak();
        $data['backend_page'] = "backend/bpbd/pak";
        $this->load->view('layouts/admin', $data);
    }

    public function save_pak()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        if ($data) {
            $this->Bpbd_m->save_pak($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/bpbd/pak');
        }
    }

    public function delete_pak($id_bpbd_ak)
    {
        $this->Bpbd_m->delete_pak($id_bpbd_ak);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bpbd/pak');
    }

    public function edit_pak($id_bpbd_ak)
    {

        $data['pak'] = $this->Bpbd_m->getByIdPak($id_bpbd_ak);

        $data['backend_page'] = "backend/bpbd/edit_pak";
        $this->load->view('layouts/admin', $data);
    }

    public function update_pak($id_bpbd_ak)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        $update = $this->Bpbd_m->update_pak($id_bpbd_ak, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bpbd/pak');
        }
    }

    /**
     * Pengungsi akibat bencana
     */

    public function pab()
    {
        $data['pab'] = $this->Bpbd_m->get_pab();
        $data['backend_page'] = "backend/bpbd/pab";
        $this->load->view('layouts/admin', $data);
    }

    public function save_pab()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        if ($data) {
            $this->Bpbd_m->save_pab($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/bpbd/pab');
        }
    }

    public function delete_pab($id_bpbd_ab)
    {
        $this->Bpbd_m->delete_pab($id_bpbd_ab);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bpbd/pab');
    }

    public function edit_pab($id_bpbd_ab)
    {

        $data['pab'] = $this->Bpbd_m->getByIdPab($id_bpbd_ab);

        $data['backend_page'] = "backend/bpbd/edit_pab";
        $this->load->view('layouts/admin', $data);
    }

    public function update_pab($id_bpbd_ab)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        $update = $this->Bpbd_m->update_pab($id_bpbd_ab, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bpbd/pab');
        }
    }

    /**
     * Anak korba bencana
     */

    public function akb()
    {
        $data['akb'] = $this->Bpbd_m->get_akb();
        $data['backend_page'] = "backend/bpbd/akb";
        $this->load->view('layouts/admin', $data);
    }

    public function save_akb()
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        if ($data) {
            $this->Bpbd_m->save_akb($data);
            $this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
            redirect('Backend/bpbd/akb');
        }
    }

    public function delete_akb($id_bpbd_akb)
    {
        $this->Bpbd_m->delete_akb($id_bpbd_akb);
        $this->session->set_flashdata('delete', 'Hapus data Sukses');
        redirect('Backend/bpbd/akb');
    }

    public function edit_akb($id_bpbd_akb)
    {

        $data['akb'] = $this->Bpbd_m->getByIdAkb($id_bpbd_akb);

        $data['backend_page'] = "backend/bpbd/edit_akb";
        $this->load->view('layouts/admin', $data);
    }

    public function update_akb($id_bpbd_akb)
    {

        $tahun = $this->input->post('tahun');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'tahun' => $tahun,
            'pria' => $pria,
            'wanita' => $wanita,
            'keterangan' => $keterangan

        );

        $update = $this->Bpbd_m->update_akb($id_bpbd_akb, $data);
        if ($update) {
            $this->session->set_flashdata('update', 'Update Data Berhasil');
            redirect('Backend/bpbd/akb');
        }
    }
}
