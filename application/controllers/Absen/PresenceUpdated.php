<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PresenceUpdated extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_absen');
    }

    //Mengupdate Data
    public function PresenceUpdated_put($id)
    {
       
    
    }


}