<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class NilaiDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_nilai');
    }
    //menghapus
    public function NilaiDeleted_delete($id = null)
    {
        
    }
}