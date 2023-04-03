<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class UserUpdated extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_users');
    }

//Mengupdate Data
public function UsersUpdated_put($id)
{
    $users = new m_users;
    $data = [
            'uid'                       => $this->put('uid', TRUE),
            'sort_id'                   => $this->put('sort_id', TRUE),
            'division_id'               => $this->put('division_id', TRUE),
            'superior_id'               => $this->put('superior_id', TRUE),
            'assistant'                 => $this->put('assistant', TRUE),
            'sort_number'               => $this->put('sort_number', TRUE),
            'nik'                       => $this->put('nik', TRUE),
            'nip'                       => $this->put('nip', TRUE),
            'gelar_depan'               => $this->put('gelar_depan', TRUE),
            'nama'                      => $this->put('nama', TRUE),
            'gelar_belakang'            => $this->put('gelar_belakang', TRUE),
            'jenis_kelamin'             => $this->put('jenis_kelamin', TRUE),
            'tempat_lahir'              => $this->put('tempat_lahir', TRUE),
            'tanggal_lahir'             => $this->put('tanggal_lahir', TRUE),
            'alamat'                    => $this->put('alamat', TRUE),
            'id_provinsi'               => $this->put('id_provinsi', TRUE),
            'id_kabupaten'              => $this->put('id_kabupaten', TRUE),
            'id_kecamatan'              => $this->put('id_kecamatan', TRUE),
            'id_kelurahan'              => $this->put('id_kelurahan', TRUE),
            'telepon'                   => $this->put('telepon', TRUE),
            'email'                     => $this->put('email', TRUE),
            'agama'                     => $this->put('agama', TRUE),
            'status_perkawinan'         => $this->put('status_perkawinan', TRUE),
            'golongan_darah'            => $this->put('golongan_darah', TRUE),
            'pendidikan'                => $this->put('pendidikan', TRUE),
            'jurusan'                   => $this->put('jurusan', TRUE),
            'tahun_tamat'               => $this->put('tahun_tamat', TRUE),
            'status'                    => $this->put('status', TRUE),
            'jabatan'                   => $this->put('jabatan', TRUE),
            'jabatan_ext'               => $this->put('jabatan_ext', TRUE),
            'pangkat'                   => $this->put('pangkat', TRUE),
            'golongan'                  => $this->put('golongan', TRUE),
            'profil_singkat'            => $this->put('profil_singkat', TRUE),
            'latar_pendidikan'          => $this->put('latar_pendidikan', TRUE),
            'no_bpjs'                   => $this->put('no_bpjs', TRUE),
            'faskes_kesehatan'          => $this->put('faskes_kesehatan', TRUE),
            'alamat_faskes_kesehatan'   => $this->put('alamat_faskes_kesehatan', TRUE),
            'faskes_gigi'               => $this->put('faskes_gigi', TRUE),
            'alamat_faskes_gigi'        => $this->put('alamat_faskes_gigi', TRUE),
            'no_npwp'                   => $this->put('no_npwp', TRUE),
            'no_efin'                   => $this->put('no_efin', TRUE),
            'type_status'               => $this->put('type_status', TRUE),
            'pejabat'                   => $this->put('pejabat', TRUE),
            'penanggungjawab'           => $this->put('penanggungjawab', TRUE),
            'username'                  => $this->put('username', TRUE),
            'password'                  => $this->put('password', TRUE),
            'level'                     => $this->put('level', TRUE),
            'role'                      => $this->put('role', TRUE),
            'avatar'                    => $this->put('avatar', TRUE),
            'avatar_slug'               => $this->put('avatar_slug', TRUE),
            'ava'                       => $this->put('ava', TRUE),
            'signature'                 => $this->put('signature', TRUE),
            'blocked'                   => $this->put('blocked', TRUE),
            'activated'                 => $this->put('activated', TRUE),
            'att'                       => $this->put('att', TRUE),
            'org_publish'               => $this->put('org_publish', TRUE),
            'token'                     => $this->put('token', TRUE),
            'status_token'              => $this->put('status_token', TRUE),
            'date_token'                => $this->put('date_token', TRUE),
            'end_token'                 => $this->put('end_token', TRUE),
            'date_updated_employee'     => date('Y-m-d H:i:s', time()),    
    ];
    
    $result_update = $users->updatedUsers($id, $data);

    if ($result_update > 0) {
        $this->response([
            'status' => 200,
            'error' => null,
            'message' => 'Data Id telah : ' . $id . ' Berhasil Update'
        ], RestController::HTTP_OK);
    } else {
        $this->response([
            'status' => false,
            'message' => 'Failed To Updated Pegawai'
        ], RestController::HTTP_BAD_REQUEST);
    }
}


}