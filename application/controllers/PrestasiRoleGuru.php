<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrestasiRoleGuru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPrestasiRoleGuru');
    }

    public function index()
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Data Prestasi';

        $data['content_overview'] = $this->load->view('PrestasiRoleGuru', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MPrestasiRoleGuru->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_santri'    => $ao->nama_santri,
                'prestasi'    => $ao->prestasi,
                'tanggal_submit'    => $ao->tanggal_submit,
                'btn_action'         => "<a href='" . base_url('PrestasiRoleGuru/update/' . $ao->id_prestasi) . "' class='btn btn-sm btn-outline-success'> 
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

    public function add()
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Tambah Prestasi';

        $data['content_overview'] = $this->load->view('PrestasiRoleGuru/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Ubah Prestasi';
        $data["ao"] = $this->MPrestasiRoleGuru->getById($id);

        $data['content_overview'] = $this->load->view('PrestasiRoleGuru/formupdate', $data, true);
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
        return ('Satuan');
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
        $this->db->delete("dm_prestasi");
    }
}
