<?php

class Dinkes extends CI_Controller
{

    public function index()
    {
        $data['dinkes_ahp'] = $this->Dinkes_m->get_dinkes_ahp();
        $data['dinkes_kim'] = $this->Dinkes_m->get_dinkes_kim();
        $data['dinkes_pkim'] = $this->Dinkes_m->get_dinkes_pkim();
        $data['dinkes_cpp'] = $this->Dinkes_m->get_dinkes_cpp();
        $data['dinkes_kih'] = $this->Dinkes_m->get_dinkes_kih();
        $data['dinkes_tetanus'] = $this->Dinkes_m->get_dinkes_tetanus();
        $data['dinkes_zat'] = $this->Dinkes_m->get_dinkes_zat();
        $data['dinkes_kb'] = $this->Dinkes_m->get_dinkes_kb();
        $data['dinkes_napza'] = $this->Dinkes_m->get_dinkes_napza();




        $data['frontend_page'] = "app/dinkes/dinkes";
        $this->load->view('layouts/main', $data);
    }
}
