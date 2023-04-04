<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PresenceAdd extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_absen');
        $this->load->library('form_validation');
    }

//menambahkan data
    public function AddPresence_post()
    {
    
    }
}