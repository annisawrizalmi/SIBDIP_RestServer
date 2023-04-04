<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class DiklatDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_diklat');
    }
    //menghapus
    public function DiklatDeleted_delete($id = null)
    {
        
    }
}