<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class NilaiGetId extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_nilai');
    }

    //mendapatkan id
    public function NilaiGetById_get($cari = NULL)
    {
        
    }

}