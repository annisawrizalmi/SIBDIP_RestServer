<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class JadwalDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_jadwal');
    }
    //menghapus
    public function JadwalDeleted_delete($id = null)
    {
        
    }
}