<?php defined('BASEPATH') or exit('No direct script access allowed');

class MHapalan extends CI_Model
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

    public function datalistHapalan($id)
    {
        $this->db->select('*,dm_santri.kelas,dm_santri.nama_santri');
        $this->db->from("dm_hapalan");
        $this->db->join("dm_santri", "dm_santri.nisn = dm_hapalan.nisn");
        $this->db->where("dm_santri.kelas", $id);

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
    public function getHapalanById($id)
    {
        $this->db->select('*,dm_santri.kelas');
        $this->db->from("dm_hapalan");
        $this->db->join("dm_santri", "dm_santri.nisn = dm_hapalan.nisn");
        $this->db->where("dm_hapalan.id_hapalan", $id);

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
