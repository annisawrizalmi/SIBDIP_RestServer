<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Users extends CI_Model
{
    protected $user_tabel = 'tb_pegawai';

    //mengurutkan id
        public function idterurut($total)
        {
            if ($total == 0) {
                return 1;
            } else {
    
                $count = $this->db->select_max('pegawai_id')->get('tb_pegawai')->row()->pegawai_id;
                $count += 1;
                return $count;
            }
        }

    //all users
    public function getDataUsers()
    {
        $sql = $this->db->select('p.pegawai_id, p.uid, p.sort_id, d.division, p.superior_id, p.assistant, p.sort_number, 
        p.nik, p.nip, p.met, p.exp_met, p.skill, p.scheme, p.gelar_depan, p.nama, p.gelar_belakang, p.jenis_kelamin, 
        p.tempat_lahir, p.tanggal_lahir, p.alamat, pr.provinsi, kb.kabupaten, kc.kecamatan, kl.kelurahan, p.telepon, 
        p.email, p.agama, p.status_perkawinan, p.golongan_darah, p.pendidikan, p.jurusan, p.tahun_tamat, p.status, 
        p.jabatan, p.jabatan_ext, p.pangkat, p.golongan, p.profil_singkat, p.latar_pendidikan, p.no_bpjs, p.faskes_kesehatan, 
        p.alamat_faskes_kesehatan, p.faskes_gigi, p.alamat_faskes_gigi, p.office, p.office_phone, p.training, p.work_exp, 
        p.teach_exp, p.scientific_work, p.special_sub, p.npwp, p.no_npwp, p.no_efin, p.type_status, p.pejabat, p.penanggungjawab, 
        p.username, p.password, p.level, p.role, p.avatar, p.avatar_slug, p.ava, p.signature, p.blocked, p.activated, p.att, 
        p.org_publish, p.token, p.status_token, p.date_token, p.end_token, p.date_added_employee, p.date_updated_employee')
        ->from('tb_pegawai p')
        ->join('tb_division d', 'd.division_id = p.division_id', 'inner')
        ->join('tb_provinsi pr','p.id_provinsi = pr.id_provinsi', 'inner')
        ->join('tb_kabupaten kb', 'p.id_kabupaten = kb.id_kabupaten', 'inner')
        ->join('tb_kecamatan kc', 'p.id_kecamatan = kc.id_kecamatan', 'inner')
        ->join('tb_kelurahan kl', 'p.id_kelurahan = kl.id_kelurahan', 'inner')
        ->get()
        ->result_array();
        return $sql;
    }



    //GetById
    public function GetByIdUsers($id)
    {
        $sql = "SELECT p.pegawai_id, p.uid, p.sort_id, d.division, p.superior_id, p.assistant, p.sort_number, 
        p.nik, p.nip, p.met, p.exp_met, p.skill, p.scheme, p.gelar_depan, p.nama, p.gelar_belakang, p.jenis_kelamin, 
        p.tempat_lahir, p.tanggal_lahir, p.alamat, pr.provinsi, kb.kabupaten, kc.kecamatan, kl.kelurahan, p.telepon, 
        p.email, p.agama, p.status_perkawinan, p.golongan_darah, p.pendidikan, p.jurusan, p.tahun_tamat, p.status, 
        p.jabatan, p.jabatan_ext, p.pangkat, p.golongan, p.profil_singkat, p.latar_pendidikan, p.no_bpjs, p.faskes_kesehatan, 
        p.alamat_faskes_kesehatan, p.faskes_gigi, p.alamat_faskes_gigi, p.office, p.office_phone, p.training, p.work_exp, 
        p.teach_exp, p.scientific_work, p.special_sub, p.npwp, p.no_npwp, p.no_efin, p.type_status, p.pejabat, p.penanggungjawab, 
        p.username, p.password, p.level, p.role, p.avatar, p.avatar_slug, p.ava, p.signature, p.blocked, p.activated, p.att, 
        p.org_publish, p.token, p.status_token, p.date_token, p.end_token, p.date_added_employee, p.date_updated_employee
        FROM tb_pegawai p 
        INNER JOIN tb_division d ON d.division_id = p.division_id
        INNER JOIN tb_provinsi pr ON p.id_provinsi = pr.id_provinsi
        INNER JOIN tb_kabupaten kb ON p.id_kabupaten = kb.id_kabupaten
        INNER JOIN tb_kecamatan kc ON p.id_kecamatan = kc.id_kecamatan
        INNER JOIN tb_kelurahan kl ON p.id_kelurahan = kl.id_kelurahan WHERE p.pegawai_id = '$id'";    
        $this->db->or_like('p.pegawai_id',  $id);
        $query = $this->db->query($sql)->result_array();
            
        return $query;
    }

    //insert data
    public function insertUsers($data)
    {
        $this->db->insert($this->user_tabel, $data);
        return $this->db->affected_rows();
    }

    //updated Data
    public function updatedUsers($id, $data)
    {
        $this->db->update($this->user_tabel, $data, ['pegawai_id' => $id]);
        return $this->db->affected_rows();
    }

    //deleted Data
    public function deletedUsers($id)
    {
        $this->db->delete($this->user_tabel, ['pegawai_id' => $id]);
        return $this->db->affected_rows();
    }

    
   

}