<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPrestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MLaporanPrestasi');
    }

    public function index()
    {
        $data['title'] = 'Prestasi';
        $data['subtitle'] = 'Data Prestasi';

        $data['content_overview'] = $this->load->view('LaporanPrestasi', $data, true);
        $this->load->view('overview', $data);
    }
    public function cetak()
    {
        $data['list'] = $this->MLaporanPrestasi->datalist();
        $this->load->view('LaporanPrestasi', $data);
    }

    public function datalist()
    {
        $list = $this->MLaporanPrestasi->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nisn'         => $ao->nisn,
                'nama_santri'    => $ao->nama_santri,
                'prestasi'    => $ao->prestasi,
                'tanggal_submit'    => $ao->tanggal_submit,
                // 'btn_action'         => "<a href='" . base_url('PrestasiRoleGuru/update/' . $ao->id_prestasi) . "' class='btn btn-sm btn-outline-success'> 
                // 								<i class='fas fa-edit'></i>
                // 							</a>
                // 							<button type='button' id='btn_id_Prestasi_del' vid_Prestasi=" . $ao->id_prestasi . " class='btn btn-sm btn-outline-danger'> 
                // 								<i class='fas fa-trash-alt'></i>
                // 							</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
}
