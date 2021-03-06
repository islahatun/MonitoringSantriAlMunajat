<?php defined('BASEPATH') or exit('No direct script access allowed');

class MDashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function prestasi()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('diagnosa_id, diagnosa_code,diagnosa_version,diagnosa_name, status');
        $this->db->from("dm_diagnosa");
        $this->db->where("status", 1);
        $this->db->order_by("diagnosa_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_diagnosa", ["diagnosa_id" => $id])->row();
    }
    public function pengurus()
    {
        $this->db->select('*');
        $this->db->from("dm_pengurus");
        // $this->db->where("status", 1);
        $this->db->order_by("jabatan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
}
