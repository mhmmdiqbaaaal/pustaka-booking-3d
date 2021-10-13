<?php
class form extends CI_Controller
{
    function_construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->load->view('v_form');
    }
    function aksi()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('konfir_email','konfirmasi_email','required');

        if ($this->form_validation->run() != false) {
            echo "form validation ok";
        } else {
            $this->load->view('v_form');
        }
    }
}
