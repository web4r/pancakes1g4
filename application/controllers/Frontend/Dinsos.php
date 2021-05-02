<?php

class Dinsos extends CI_Controller
{

    public function index()
    {
        $data['dinsos_kkm'] = $this->Dinsos_m->get_dinsos_kkm();
        $data['dinsos_pendidikan'] = $this->Dinsos_m->get_dinsos_pendidikan();
        $data['dinsos_aktifitas'] = $this->Dinsos_m->get_dinsos_aktifitas();
        $data['dinsos_sakit'] = $this->Dinsos_m->get_dinsos_sakit();
        $data['dinsos_dmp'] = $this->Dinsos_m->get_dinsos_dmp();
        $data['dinsos_dma'] = $this->Dinsos_m->get_dinsos_dma();
        $data['dinsos_jaj'] = $this->Dinsos_m->get_dinsos_jaj();
        $data['dinsos_jta'] = $this->Dinsos_m->get_dinsos_jta();
        $data['dinsos_abk'] = $this->Dinsos_m->get_dinsos_abk();




        $data['frontend_page'] = "app/dinsos/dinsos";
        $this->load->view('layouts/main', $data);
    }
}
