<?php defined('BASEPATH') or exit('No direct script access allowed');

class MPelanggaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,kelas.nama_kelas');
        $this->db->from("dm_wali_santri");
        $this->db->join('kelas', 'kelas.id_kelas = dm_wali_santri.id_kelas');
        $this->db->order_by("nama_wali_santri", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getIddatalist($id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,kelas.nama_kelas');
        $this->db->from("dm_wali_santri");
        $this->db->join('kelas', 'kelas.id_kelas = dm_wali_santri.id_kelas');
        $this->db->order_by("nama_wali_santri", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function datalistPelanggaran($id)
    {
        $this->db->select('*');
        $this->db->from("trans_pelanggaran_vd");
        $this->db->where("id_kelas", $id);

        $finalResponse =  $this->db->get_where()->result();

        return $finalResponse;
    }
    public function getById($id)
    {
        $this->db->select('*,kelas.nama_kelas,kelas.id_kelas');
        $this->db->from("dm_wali_santri");
        $this->db->where("kelas.id_kelas", $id);
        $this->db->join('kelas', 'kelas.id_kelas = dm_wali_santri.id_kelas');
        $this->db->order_by("nama_kelas", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
