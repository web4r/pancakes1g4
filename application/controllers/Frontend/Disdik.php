<?php

class Disdik extends CI_Controller
{

    public function index()
    {
        $data['disdik_apk'] = $this->Disdik_m->get_disdik_apk();
        $data['disdik_aps'] = $this->Disdik_m->get_disdik_aps();
        $data['disdik_apm'] = $this->Disdik_m->get_disdik_apm();
        $data['disdik_jenjang'] = $this->Disdik_m->get_disdik_jenjang();
        $data['disdik_sekolah'] = $this->Disdik_m->get_disdik_sekolah();
        $data['disdik_sertifikat'] = $this->Disdik_m->get_disdik_sertifikat();
        $data['disdik_paket'] = $this->Disdik_m->get_disdik_paket();
        $data['disdik_pt'] = $this->Disdik_m->get_disdik_pt();





        $data['frontend_page'] = "app/disdik/disdik";
        $this->load->view('layouts/main', $data);
    }
}
