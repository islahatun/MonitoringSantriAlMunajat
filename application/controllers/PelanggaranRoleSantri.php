<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PelanggaranRoleSantri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MPelanggaranRoleSantri');
	}

	public function index()
	{
		$data['title'] = 'Pelanggaran';
		$data['subtitle'] = 'Data Pelanggaran';

		$data['content_overview'] = $this->load->view('PelanggaranRoleSantri', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MPelanggaranRoleSantri->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $ao) {

			$rtn[] = array(
				'nomor'               => $i,
				// 'nisn'         => $ao->nisn,
				// 'nama_santri'    => $ao->nama_santri,
				'pelanggaran'    => $ao->pelanggaran,
				'hukuman'    => $ao->hukuman,
				// 'pencatat'    => $ao->pencatat,
				'tanggal_submit'    => $ao->tanggal_submit,
				// 'btn_action'         => "<a href='" . base_url('PelanggaranRoleSantri/update/' . $ao->id_pelanggaran) . "' class='btn btn-sm btn-outline-success'> 
				// 								<i class='fas fa-edit'></i>
				// 							</a>
				// 							<button type='button' id='btn_id_pelanggaran_del' vid_pelanggaran=" . $ao->id_pelanggaran . " class='btn btn-sm btn-outline-danger'> 
				// 								<i class='fas fa-trash-alt'></i>
				// 							</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}
}
