<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peraturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPeraturan');
    }

    public function index()
    {
        $data['title'] = 'Peraturan';
        $data['subtitle'] = 'Data Peraturan';

        $data['content_overview'] = $this->load->view('Peraturan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MPeraturan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $peraturan) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_peraturan'         => $peraturan->id_peraturan,
                'peraturan'       => $peraturan->peraturan,
                'point'                 => $peraturan->point,
                'hukuman'      => $peraturan->hukuman,
                'btn_action'            => "<a href='" . base_url('peraturan/update/' . $peraturan->id_peraturan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_peraturan_del' vid_peraturan=" . $peraturan->id_peraturan . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Peraturan';
        $data['subtitle'] = 'Tambah Peraturan';

        $data['content_overview'] = $this->load->view('Peraturan/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Peraturan';
        $data['subtitle'] = 'Ubah Peraturan';
        $data["peraturan"] = $this->MPeraturan->getById($id);

        $data['content_overview'] = $this->load->view('Peraturan/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'peraturan' => $this->input->post('peraturan'),
            'hukuman' => $this->input->post('hukuman'),
            'point' => $this->input->post('point')
        );

        $this->db->insert("dm_peraturan", $data);
        return ('Peraturan');
    }

    function updateSave()
    {
        $data = array(
            'peraturan' => $this->input->post('peraturan'),
            'hukuman' => $this->input->post('hukuman'),
            'point' => $this->input->post('point')
        );

        $this->db->where('id_peraturan', $this->input->post('id_peraturan'));
        $this->db->update("dm_peraturan", $data);
    }

    public function delete()
    {

        $this->db->where('id_peraturan', $this->input->post('id_peraturan'));
        $this->db->delete("dm_peraturan");
    }
}
