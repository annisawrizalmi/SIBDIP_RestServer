<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class NilaiUpdated extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_nilai');
    }

    //Mengupdate Data
    public function NilaiUpdated_put($id)
    {
       
    
    }


}