<?php defined('BASEPATH') or exit('No direct script access allowed');

class MPrestasiRoleGuru extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_prestasi");
        // $this->db->join('kelas', 'kelas.id_kelas = dm_prestasi.id_kelas');
        $this->db->order_by("nisn", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }


    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from("dm_prestasi");
        $this->db->where("id_prestasi", $id);
        // $this->db->join('kelas', 'kelas.id_kelas = dm_prestasi.id_kelas');
        $this->db->order_by("nisn", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
