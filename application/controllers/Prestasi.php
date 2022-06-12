<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPrestasi');
        $this->load->model('MWaliSantri');
        $this->load->model('MKelas');
    }

    public function index()
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Data Prestasi';

        $data['content_overview'] = $this->load->view('Prestasi', $data, true);
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
                'btn_action'         => "<a href='" . base_url('Prestasi/listPrestasi/' . $ao->id_kelas) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function listPrestasi($id)
    {
        $data['title'] = 'Prestasi';

        $data['subtitle'] = 'Daftar Data Prestasi';
        $data['dp'] = $this->MPrestasi->getById($id);

        $data['content_overview'] = $this->load->view('Prestasi/listPrestasi', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalistPrestasi($id)
    {
        $list = $this->MPrestasi->datalistPrestasi($id);
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_santri'    => $ao->nama_santri,
                'prestasi'    => $ao->prestasi,
                'tanggal_submit'    => $ao->tanggal_submit,
                'btn_action'         => "<a href='" . base_url('Prestasi/update/' . $ao->id_prestasi) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_id_Prestasi_del' vid_Prestasi=" . $ao->id_prestasi . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function add($id)
    {
        $data['title'] = 'Prestasi';

        $data['subtitle'] = 'Tambah Data Prestasi';
        $data['dp'] = $this->MPrestasi->getById($id);

        $data['content_overview'] = $this->load->view('Prestasi/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Prestasi';

        $data['subtitle'] = 'Tambah Data Prestasi';
        $data["ao"] = $this->MPrestasi->getPrestasiById($id);

        $data['content_overview'] = $this->load->view('Prestasi/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'prestasi' => $this->input->post('prestasi'),
            'tanggal_submit' => $this->input->post('tanggal_submit'),
        );

        $this->db->insert("dm_prestasi", $data);
    }

    function updateSave()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'prestasi' => $this->input->post('prestasi'),
            'tanggal_submit' => $this->input->post('tanggal_submit'),
        );

        $this->db->where('id_prestasi', $this->input->post('id_prestasi'));
        $this->db->update("dm_prestasi", $data);
    }

    public function delete()
    {

        $this->db->where('id_prestasi', $this->input->post('id_prestasi'));
        $this->db->delete ("dm_prestasi");
    }
}
