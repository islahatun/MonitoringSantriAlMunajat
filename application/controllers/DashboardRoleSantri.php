<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardRoleSantri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('MFunction');
		$this->load->model('MDashboard');
	}
	public function index()
	{
		$data['title'] = 'Dasboard';
		$data['content_overview'] = $this->load->view('DashboardRoleGuru', $data, true);
		$this->load->view('overview', $data);
	}
	public function pengurus()
	{
		$list = $this->MDashboard->pengurus();

		$rtn = array();
		$i = 1;

		foreach ($list as $Pengurus) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'nama_pengurus'         => $Pengurus->nama_pengurus,
				'jabatan'       => $Pengurus->jabatan,
				// 'btn_action'            => "<a href='" . base_url('Pengurus/update/' . $Pengurus->id_pengurus) . "' class='btn btn-sm btn-outline-success'> 
				// 								<i class='fas fa-edit'></i>
				// 							</a>
				// 							<button type='button' id='btn_Pengurus_del' vid_pengurus=" . $Pengurus->id_pengurus . " class='btn btn-sm btn-outline-danger'> 
				// 								<i class='fas fa-trash-alt'></i>
				// 							</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}
}
