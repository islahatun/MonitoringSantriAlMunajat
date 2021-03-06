<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HapalanRoleSantri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MHapalanRoleSantri');
    }

    public function index()
    {
        $data['title'] = 'Hapalan';
        $data['subtitle'] = 'Data Hapalan';

        $data['content_overview'] = $this->load->view('HapalanRoleSantri', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MHapalanRoleSantri->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                // 'nisn'         => $ao->nisn,
                // 'nama_santri'    => $ao->nama_santri,
                'juz'    => $ao->juz,
                'surah'    => $ao->surah,
                'ayat'    => $ao->ayat,
                'tanggal'    => $ao->tanggal,
                // 'btn_action'         => "<a href='" . base_url('HapalanRoleSantri/update/' . $ao->id_hapalan) . "' class='btn btn-sm btn-outline-success'> 
                // 								<i class='fas fa-edit'></i>
                // 							</a>
                // 							<button type='button' id='btn_id_hapalan_del' vid_hapalan=" . $ao->id_hapalan . " class='btn btn-sm btn-outline-danger'> 
                // 								<i class='fas fa-trash-alt'></i>
                // 							</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
}
