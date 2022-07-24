<?php defined('BASEPATH') or exit('No direct script access allowed');

class MLaporanHapalan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $username = $this->session->userdata('username');

        $this->db->select('*,dm_santri.nama_santri,kelas.nama_kelas');
        $this->db->from("dm_hapalan");
        $this->db->join('dm_santri', 'dm_hapalan.nisn=dm_santri.nisn');
        $this->db->join('kelas', 'kelas.id_kelas=dm_santri.kelas');
        $this->db->order_by("kelas", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
}
