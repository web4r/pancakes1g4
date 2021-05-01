<?php

class Main extends CI_Controller
{



    public function index()
    {

        $data['frontend_page'] = "app/content";
        $this->load->view('layouts/main', $data);
    }
}
