<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PelanggaranRoleGuru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MPelanggaranRoleGuru');
	}

	public function index()
	{
		$data['title'] = 'Pelanggaran';
		$data['subtitle'] = 'Data Pelanggaran';

		$data['content_overview'] = $this->load->view('PelanggaranRoleGuru', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MPelanggaranRoleGuru->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $ao) {

			$rtn[] = array(
				'nomor'               => $i,
				'nisn'         => $ao->nisn,
				'nama_santri'    => $ao->nama_santri,
				'pelanggaran'    => $ao->pelanggaran,
				'hukuman'    => $ao->hukuman,
				// 'pencatat'    => $ao->pencatat,
				'tanggal_submit'    => $ao->tanggal_submit,
				'btn_action'         => "<a href='" . base_url('PelanggaranRoleGuru/update/' . $ao->id_pelanggaran) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_id_pelanggaran_del' vid_pelanggaran=" . $ao->id_pelanggaran . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Pelanggaran';
		$data['subtitle'] = 'Tambah Data Pelanggaran';

		$data['content_overview'] = $this->load->view('PelanggaranRoleGuru/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Pelanggaran';
		$data['subtitle'] = 'Ubah Data Pelanggaran';
		$data["ao"] = $this->MPelanggaranRoleGuru->getById($id);

		$data['content_overview'] = $this->load->view('PelanggaranRoleGuru/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nama_santri' => $this->input->post('nama_santri'),
			'hukuman' => $this->input->post('hukuman'),
			'pelanggaran' => $this->input->post('pelanggaran'),
			// 'pencatat' => $this->input->post('pencatat'),
			'tanggal_submit' => $this->input->post('tanggal_submit'),
		);

		$this->db->insert("dm_pelanggaran", $data);
	}

	function updateSave()
	{
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nama_santri' => $this->input->post('nama_santri'),
			'hukuman' => $this->input->post('hukuman'),
			'pelanggaran' => $this->input->post('pelanggaran'),
			// 'pencatat' => $this->input->post('pencatat'),
			'tanggal_submit' => $this->input->post('tanggal_submit'),
		);

		$this->db->where('id_pelanggaran', $this->input->post('id_pelanggaran'));
		$this->db->update("dm_pelanggaran", $data);
	}

	public function delete()
	{
		$data = array(
			'status' => '0',
		);

		$this->db->where('id_pelanggaran', $this->input->post('id_pelanggaran'));
		$this->db->update("dm_pelanggaran", $data);
	}
}
