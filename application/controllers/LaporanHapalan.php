<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanHapalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MLaporanHapalan');
    }

    public function index()
    {
        $data['title'] = 'Hapalan';
        $data['subtitle'] = 'Data Hapalan';

        $data['content_overview'] = $this->load->view('LaporanHapalan', $data, true);
        $this->load->view('overview', $data);
    }

    public function cetak()
    {
        $data['list'] = $this->MLaporanHapalan->datalist();

        $this->load->view('CetakLaporanHapalan', $data);
    }

    public function datalist()
    {
        $list = $this->MLaporanHapalan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_kelas'         => $ao->nama_kelas,
                'nama_santri'    => $ao->nama_santri,
                'juz'    => $ao->juz,
                'surah'    => $ao->surah,
                'ayat'    => $ao->ayat,
                'tanggal'    => $ao->tanggal,
                // 'btn_action'         => "<a href='" . base_url('LaporanHapalan/update/' . $ao->id_hapalan) . "' class='btn btn-sm btn-outline-success'> 
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
