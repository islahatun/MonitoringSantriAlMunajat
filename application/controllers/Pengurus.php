<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MPengurus');
	}

	public function index()
	{
		$data['title'] = 'Pengurus';
		$data['subtitle'] = 'Data Pengurus';

		$data['content_overview'] = $this->load->view('Pengurus', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MPengurus->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $Pengurus) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'nama_pengurus'         => $Pengurus->nama_pengurus,
				'jabatan'       => $Pengurus->jabatan,
				'btn_action'            => "<a href='" . base_url('Pengurus/update/' . $Pengurus->id_pengurus) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_Pengurus_del' vid_pengurus=" . $Pengurus->id_pengurus . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Pengurus';
		$data['subtitle'] = 'Tambah Pengurus';

		$data['content_overview'] = $this->load->view('Pengurus/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Pengurus';
		$data['subtitle'] = 'Ubah Pengurus';
		$data["ao"] = $this->MPengurus->getById($id);

		$data['content_overview'] = $this->load->view('Pengurus/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'nama_pengurus' => $this->input->post('nama_pengurus'),
			'jabatan' => $this->input->post('jabatan'),
		);

		$this->db->insert("dm_pengurus", $data);
	}

	function updateSave()
	{
		$data = array(
			'jabatan' => $this->input->post('jabatan'),
			'nama_pengurus' => $this->input->post('nama_pengurus'),
		);

		$this->db->where('id_pengurus', $this->input->post('id_pengurus'));
		$this->db->update("dm_pengurus", $data);
	}

	public function delete()
	{


		$this->db->where('id_pengurus', $this->input->post('id_pengurus'));
		$this->db->delete("dm_pengurus");
	}
}
