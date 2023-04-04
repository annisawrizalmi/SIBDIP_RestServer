<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PresenceDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_absen');
    }
    //menghapus
    public function PresenceDeleted_delete($id = null)
    {
        
    }
}