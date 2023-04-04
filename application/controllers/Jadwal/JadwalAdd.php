<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class JadwalAdd extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_jadwal');
        $this->load->library('form_validation');
    }

//menambahkan data
    public function AddJadwal_post()
    {
    
    }
}