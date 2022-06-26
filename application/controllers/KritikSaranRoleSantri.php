<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KritikSaranRoleSantri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MKritikSaranRoleSantri');
	}

	public function index()
	{
		$data['title'] = 'Kritik Saran RoleSantri';
		$data['subtitle'] = 'Data KritikSaranRoleSantri';

		$data['content_overview'] = $this->load->view('Kritik Saran Role Santri', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MKritikSaranRoleSantri->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $kelas) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_kelas'         => $kelas->id_kelas,
				'nama_kelas'       => $kelas->nama_kelas,
				'btn_action'            => "<a href='" . base_url('Kelas/update/' . $kelas->id_kelas) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_kelas_del' vid_kelas=" . $kelas->id_kelas . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Kelas';
		$data['subtitle'] = 'Tambah Kelas';

		$data['content_overview'] = $this->load->view('kelas/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Kelas';
		$data['subtitle'] = 'Ubah Kelas';
		$data["kelas"] = $this->MKritikSaran->getById($id);

		$data['content_overview'] = $this->load->view('kelas/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
		);

		$this->db->insert("kelas", $data);
	}

	function updateSave()
	{
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
		);

		$this->db->where('id_kelas', $this->input->post('id_kelas'));
		$this->db->update("kelas", $data);
	}

	public function delete()
	{


		$this->db->where('id_kelas', $this->input->post('id_kelas'));
		$this->db->delete("kelas");
	}
}
