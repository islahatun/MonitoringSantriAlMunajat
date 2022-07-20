<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MSantri');
        $this->load->model('MWaliSantri');
        $this->load->model('MKelas');
    }

    public function index()
    {
        $data['title'] = 'Santri';
        $data['subtitle'] = 'Data Santri';

        $data['content_overview'] = $this->load->view('Santri', $data, true);
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
                'id_kelas'    => $ao->nama_kelas,
                'id_wali_santri'         => $ao->id_wali_santri,
                'nama_wali_santri'    => $ao->nama_wali_santri,
                'btn_action'         => "<a href='" . base_url('Santri/listSantri/' . $ao->id_kelas) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function listSantri($id)
    {
        $data['title'] = 'Santri';

        $data['subtitle'] = 'Daftar Data Santri';
        $data['dp'] = $this->MSantri->getById($id);

        $data['content_overview'] = $this->load->view('Santri/listSantri', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalistSantri($id)
    {
        $list = $this->MSantri->datalistSantri($id);
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_santri'    => $ao->nama_santri,
                'jenis_kelamin'    => $ao->jenis_kelamin,
                'tanggal_lahir'    => $ao->tanggal_lahir,
                'alamat'    => $ao->alamat,
                'btn_action'         => "<a href='" . base_url('Santri/update/' . $ao->id_santri) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_id_santri_del' vid_santri=" . $ao->id_santri . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function add($id)
    {
        $data['title'] = 'Santri';

        $data['subtitle'] = 'Tambah Data Santri';
        $data['dp'] = $this->MSantri->getById($id);

        $data['content_overview'] = $this->load->view('Santri/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Santri';

        $data['subtitle'] = 'Tambah Data Santri';
        $data["ao"] = $this->MSantri->getSantriById($id);

        $data['content_overview'] = $this->load->view('Santri/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'no_hp_ayah' => $this->input->post('no_hp_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'no_hp_ibu' => $this->input->post('no_hp_ibu'),
            'nama_wali_santri' => $this->input->post('nama_wali_santri'),
            'alamat_wali_santri' => $this->input->post('alamat_wali_santri'),
            'no_hp_wali_santri' => $this->input->post('no_hp_wali_santri'),
            'alamat_orangtua' => $this->input->post('alamat_orang_tua'),
            'kelas' => $this->input->post('kelas'),
        );

        $this->db->insert("dm_Santri", $data);

        $login = array(
            'username' => $this->input->post('nisn'),
            'password' => md5('123'),
            'session_id' => 2
        );
        $this->db->insert("sys_users", $login);
    }

    function updateSave()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'no_hp_ayah' => $this->input->post('no_hp_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'no_hp_ibu' => $this->input->post('no_hp_ibu'),
            'nama_wali_santri' => $this->input->post('nama_wali_santri'),
            'alamat_wali_santri' => $this->input->post('alamat_wali_santri'),
            'no_hp_wali_santri' => $this->input->post('no_hp_wali_santri'),
            'alamat_orangtua' => $this->input->post('alamat_orang_tua'),
            'kelas' => $this->input->post('kelas'),
        );

        $this->db->where('id_santri', $this->input->post('id_santri'));
        $this->db->update("dm_Santri", $data);
    }

    public function delete()
    {

        $this->db->where('id_santri', $this->input->post('id_santri'));
        $this->db->delete("dm_Santri");
    }
}
