<?php

class Setwan extends CI_Controller
{

    public function index()
    {
        $data['partai'] = $this->Setwan_m->get_partai();
        $data['komisi'] = $this->Setwan_m->get_komisi();
        $data['prov_partai'] = $this->Setwan_m->get_prov_partai();
        $data['prov_komisi'] = $this->Setwan_m->get_prov_komisi();
        $data['kab_partai'] = $this->Setwan_m->get_kab_partai();
        $data['kab_komisi'] = $this->Setwan_m->get_kab_komisi();





        $data['frontend_page'] = "app/setwan/setwan";
        $this->load->view('layouts/main', $data);
    }
}
