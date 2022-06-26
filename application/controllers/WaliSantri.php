<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WaliSantri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MWaliSantri');
        $this->load->model('MKelas');
    }

    public function index()
    {
        $data['title'] = 'Wali Kelas';
        $data['subtitle'] = 'Data Wali Kelas';

        $data['content_overview'] = $this->load->view('walisantri', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MWaliSantri->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'id_wali_santri'         => $ao->id_wali_santri,
                'nama_wali_santri'    => $ao->nama_wali_santri,
                'id_kelas'    => $ao->nama_kelas,
                'btn_action'         => "<a href='" . base_url('walisantri/update/' . $ao->id_wali_santri) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_id_wali_santri_del' vid_wali_santri=" . $ao->id_wali_santri . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Wali Kelas';

        $data['subtitle'] = 'Tambah Data Wali Kelas';
        $data['daftarKelas'] = $this->MKelas->datalist();

        $data['content_overview'] = $this->load->view('walisantri/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Wali Kelas';

        $data['subtitle'] = 'Tambah Data Wali Kelas';
        $data["ao"] = $this->MWaliSantri->getById($id);

        $data['content_overview'] = $this->load->view('walisantri/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_wali_santri' => $this->input->post('nama_wali_santri'),
            'id_kelas' => $this->input->post('id_kelas'),
        );

        $this->db->insert("dm_wali_santri", $data);

        $login = array(
            'username' => $this->input->post('nik'),
            'password' => md5('123'),
            'session_id' => 3
        );
        $this->db->insert("sys_users", $login);
    }

    function updateSave()
    {
        $data = array(
            'id_kelas' => $this->input->post('id_kelas'),
            'nik' => $this->input->post('nik'),
            'nama_wali_santri' => $this->input->post('nama_wali_santri')
        );

        $this->db->where('id_wali_santri', $this->input->post('id_wali_santri'));
        $this->db->update("dm_wali_santri", $data);
    }

    public function delete()
    {

        $this->db->where('id_wali_santri', $this->input->post('id_wali_santri'));
        $this->db->delete("dm_wali_santri");
    }
}
