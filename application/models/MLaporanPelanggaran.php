<?php defined('BASEPATH') or exit('No direct script access allowed');

class MLaporanPelanggaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');
        $username = $this->session->userdata('username');

        $this->db->select('*,dm_santri.nama_santri');
        $this->db->from("dm_pelanggaran");
        $this->db->join('dm_santri', 'dm_pelanggaran.nisn=dm_santri.nisn');
        $this->db->order_by("kelas", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
}
