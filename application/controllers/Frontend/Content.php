<?php


class Content extends CI_Controller
{

    public function sambutan()
    {
        $data['frontend_page'] = "app/content/sambutan";
        $this->load->view('layouts/main', $data);
    }

    public function tupoksi()
    {
        $data['frontend_page'] = "app/content/tupoksi";
        $this->load->view('layouts/main', $data);
    }

    public function dataTerpilah()
    {
        $data['frontend_page'] = "app/content/dataTerpilah";
        $this->load->view('layouts/main', $data);
    }
}
