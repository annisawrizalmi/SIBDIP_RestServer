<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class JadwalUpdated extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_jadwal');
    }

    //Mengupdate Data
    public function JadwalUpdated_put($id)
    {
       
    }


}