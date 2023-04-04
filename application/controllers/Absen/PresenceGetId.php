<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PresenceGetId extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_absen');
    }

    //mendapatkan id
    public function PresenceGetById_get($cari = NULL)
    {
        
    }

}