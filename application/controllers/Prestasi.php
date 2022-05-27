<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPrestasi');
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
        $list = $this->MPrestasi->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $prestasi) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_prestasi'         => $prestasi->id_prestasi,
                'prestasi'       => $prestasi->prestasi,
                'point'                 => $prestasi->point,
                'btn_action'            => "<a href='" . base_url('prestasi/update/' . $prestasi->id_prestasi) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_prestasi_del' vid_prestasi=" . $prestasi->id_prestasi . " class='btn btn-sm btn-outline-danger'> 
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

        $data['content_overview'] = $this->load->view('Prestasi/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Ubah Prestasi';
        $data["prestasi"] = $this->MPrestasi->getById($id);

        $data['content_overview'] = $this->load->view('Prestasi/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'prestasi' => $this->input->post('prestasi'),
            'point' => $this->input->post('point')
        );

        $this->db->insert("dm_prestasi", $data);
        return ('prestasi');
    }

    function updateSave()
    {
        $data = array(
            'prestasi' => $this->input->post('prestasi'),
            'point' => $this->input->post('point')
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
