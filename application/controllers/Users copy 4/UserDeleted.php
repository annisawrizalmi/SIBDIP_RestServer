<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class UserDeleted extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_users');
    }
    //menghapus
    public function UsersDeleted_delete($id = null)
    {
        $users = new m_users;

        $cekData = $users->deletedUsers($id);

        if ($cekData > 0) {
            $this->response([
                'status' => 200,
                'error' => null,
                'message' => 'Panitia DELETED'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID Panitia Not Found'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }
}