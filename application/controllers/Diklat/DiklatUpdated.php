<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class DiklatUpdated extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_diklat');
    }

    //Mengupdate Data
    public function DiklatUpdated_put($id)
    {
       
    
    }


}