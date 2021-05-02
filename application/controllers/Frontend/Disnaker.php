<?php

class Disnaker extends CI_Controller
{

    public function index()
    {
        $data['tpak'] = $this->Disnaker_m->get_all_tpak();
        $data['kkm'] = $this->Disnaker_m->get_all_kkm();
        $data['akad'] = $this->Disnaker_m->get_all_akad();
        $data['akan'] = $this->Disnaker_m->get_all_akan();
        $data['formal'] = $this->Disnaker_m->get_all_disnaker_formal();
        $data['informal'] = $this->Disnaker_m->get_all_disnaker_informal();
        $data['umk'] = $this->Disnaker_m->get_all_umk();
        $data['koperasi'] = $this->Disnaker_m->get_all_koperasi();
        $data['kredit'] = $this->Disnaker_m->get_all_kredit();
        $data['jpa'] = $this->Disnaker_m->get_all_jpa();
        $data['jpata'] = $this->Disnaker_m->get_all_jpata();
        $data['djsp'] = $this->Disnaker_m->get_all_djsp();



        $data['frontend_page'] = "app/disnaker/disnaker";
        $this->load->view('layouts/main', $data);
    }
}
