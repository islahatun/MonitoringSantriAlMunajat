<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hapalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MHapalan');
        $this->load->model('MWaliSantri');
        $this->load->model('MKelas');
    }

    public function index()
    {
        $data['title'] = 'Hapalan';
        $data['subtitle'] = 'Data Hapalan';

        $data['content_overview'] = $this->load->view('Hapalan', $data, true);
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
                'btn_action'         => "<a href='" . base_url('Hapalan/listHapalan/' . $ao->id_kelas) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function listHapalan($id)
    {
        $data['title'] = 'Hapalan';

        $data['subtitle'] = 'Daftar Data Hapalan';
        $data['dp'] = $this->MHapalan->getById($id);

        $data['content_overview'] = $this->load->view('Hapalan/listHapalan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalistHapalan($id)
    {
        $list = $this->MHapalan->datalistHapalan($id);
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_santri'    => $ao->nama_santri,
                'juz'    => $ao->juz,
                'surah'    => $ao->surah,
                'ayat'    => $ao->ayat,
                'tanggal'    => $ao->tanggal,
                'btn_action'         => "<a href='" . base_url('Hapalan/update/' . $ao->id_hapalan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_id_hapalan_del' vid_hapalan=" . $ao->id_hapalan . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function add($id)
    {
        $data['title'] = 'Hapalan';

        $data['subtitle'] = 'Tambah Data Hapalan';
        $data['dp'] = $this->MHapalan->getById($id);

        $data['content_overview'] = $this->load->view('Hapalan/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Hapalan';

        $data['subtitle'] = 'Update Data Hapalan';
        $data["ao"] = $this->MHapalan->getHapalanById($id);

        $data['content_overview'] = $this->load->view('Hapalan/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'juz' => $this->input->post('juz'),
            'surah' => $this->input->post('surah'),
            'ayat' => $this->input->post('ayat'),
            'tanggal' => $this->input->post('tanggal'),
        );

        $this->db->insert("dm_hapalan", $data);
    }

    function updateSave()
    {
        $data = array(
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'juz' => $this->input->post('juz'),
            'surah' => $this->input->post('surah'),
            'ayat' => $this->input->post('ayat'),
            'tanggal' => $this->input->post('tanggal'),
        );

        $this->db->where('id_hapalan', $this->input->post('id_hapalan'));
        $this->db->update("dm_hapalan", $data);
    }

    public function delete()
    {

        $this->db->where('id_hapalan', $this->input->post('id_hapalan'));
        $this->db->delete("dm_hapalan");
    }
}
