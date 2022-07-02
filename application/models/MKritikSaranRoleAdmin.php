<?php defined('BASEPATH') or exit('No direct script access allowed');

class MKritikSaranRoleAdmin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("trans_pesan");
        $this->db->order_by("id_pesan", 'desc');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("trans_pesan", ["id_pesan" => $id])->row();
    }
}
