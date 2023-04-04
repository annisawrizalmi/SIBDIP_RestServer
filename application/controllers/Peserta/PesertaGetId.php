<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PesertaGetId extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_peserta');
    }

    //mendapatkan id
    public function PesertaGetById_get($cari = NULL)
    {
        
    }

}