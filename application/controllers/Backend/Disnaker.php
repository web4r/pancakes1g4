<?php

class Disnaker extends CI_Controller
{

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
        $tpak_id = $this->Disnaker_m->getByIdTpak($id_tpak);

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
}
