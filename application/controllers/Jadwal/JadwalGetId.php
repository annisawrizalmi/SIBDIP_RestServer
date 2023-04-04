<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class JadwalGetId extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_jadwal');
    }

    //mendapatkan id
    public function JadwalGetById_get($cari = NULL)
    {
        
    }

}