<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PesertaAdd extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_peserta');
        $this->load->library('form_validation');
    }

//menambahkan data
    public function AddPeserta_post()
    {
    
    }
}