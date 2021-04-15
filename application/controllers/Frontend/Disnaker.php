<?php

class Disnaker extends CI_Controller
{

    public function index()
    {
        $data['tpak'] = $this->Disnaker_m->get_all_tpak();
        $data['frontend_page'] = "app/disnaker/disnaker";
        $this->load->view('layouts/main', $data);
    }
}
