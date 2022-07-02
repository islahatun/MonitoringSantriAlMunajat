<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KritikSaranRoleSantri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MLogin');
		$this->load->model('MKritikSaranRoleSantri');
	}

	public function index()
	{
		$data['title'] = 'Kritik Saran Role Santri';
		$data['subtitle'] = 'Data Kritik Saran';

		$data['content_overview'] = $this->load->view('KritikSaranRoleSantri', $data, true);
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
				'nisn'         => $kelas->nisn,
				'isi_pesan'       => $kelas->isi_pesan,
				'isi_jawaban'       => $kelas->isi_jawaban,
				'status'       => $kelas->status,
				'btn_action'            => "<a href='" . base_url('Kelas/update/' . $kelas->nisn) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_kelas_del' vnisn=" . $kelas->nisn . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Kritik dan Saran';
		$data['subtitle'] = 'Tambah Kritik dan saran';

		$data['content_overview'] = $this->load->view('KritikSaranRoleSantri/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Kelas';
		$data['subtitle'] = 'Ubah Kelas';
		$data["kelas"] = $this->MKritikSaran->getById($id);

		$data['content_overview'] = $this->load->view('KritikSaranRoleSantri/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$nisn = $this->session->userdata('username');
		$data = array(
			'isi_pesan' => $this->input->post('isi_pesan'),
			'nisn' => $nisn,
			'status' => $this->input->post('status')
		);

		$this->db->insert("trans_pesan", $data);
	}

	function updateSave()
	{
		$data = array(
			'isi_pesan' => $this->input->post('isi_pesan'),
		);

		$this->db->where('id_pesan', $this->input->post('id_pesan'));
		$this->db->update("trans_pesan", $data);
	}

	public function delete()
	{
		$this->db->where('id_pesan', $this->input->post('id_pesan'));
		$this->db->delete("trans_pesan");
	}
}
