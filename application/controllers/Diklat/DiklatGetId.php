<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class DiklatGetId extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_diklat');
    }

    //mendapatkan id
    public function DiklatGetById_get($cari = NULL)
    {
        
    }

}