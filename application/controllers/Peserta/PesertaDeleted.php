<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class PesertaDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_peserta');
    }
    //menghapus
    public function PesertaDeleted_delete($id = null)
    {
        
    }
}