<?php defined('BASEPATH') or exit('No direct script access allowed');

class MPelanggaranRoleGuru extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from("dm_pelanggaran");
        $this->db->join('dm_santri', 'dm_santri.nisn = dm_pelanggaran.nisn');
        $this->db->join('kelas', 'kelas.id_kelas = dm_pelanggaran.id_kelas');
        $this->db->join('kelas', 'kelas.id_kelas = dm_santri.kelas');
        $this->db->join('dm_wali_santri', 'dm_wali_santri.id_kelas = dm_pelanggaran.kelas');
        $this->db->where('dm_wali_santri', $username);
        $this->db->order_by("nisn", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }


    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from("dm_pelanggaran");
        $this->db->where("id_pelanggaran", $id);
        // $this->db->join('kelas', 'kelas.id_kelas = dm_pelanggaran.id_kelas');
        $this->db->order_by("nisn", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
