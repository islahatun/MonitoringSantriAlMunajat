<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KritikSaranRoleAdmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MKritikSaranRoleAdmin');
	}

	public function index()
	{
		$data['title'] = 'Kritik Saran';
		$data['subtitle'] = 'Kritik dan Saran';

		$data['content_overview'] = $this->load->view('KritikSaranRoleAdmin', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MKritikSaranRoleAdmin->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $kelas) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'isi_pesan'         => $kelas->isi_pesan,
				'isi_jawaban'         => $kelas->isi_jawaban,
				'nisn'       => $kelas->nisn,
				'status'       => $kelas->status,
				'btn_action'            => "<a href='" . base_url('KritikSaranRoleAdmin/update/' . $kelas->id_pesan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_kelas_del' vid_pesan=" . $kelas->id_pesan . " class='btn btn-sm btn-outline-danger'> 
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

		$data['content_overview'] = $this->load->view('KritiSaranRoleAdmin/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Jawab Pesan';
		$data['subtitle'] = 'Jawab Pesan';
		$data["kelas"] = $this->MKritikSaranRoleAdmin->getById($id);

		$data['content_overview'] = $this->load->view('KritikSaranRoleAdmin/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'isi_jawaban' => $this->input->post('isi_jawaban'),
		);

		$this->db->insert("trans_pesan", $data);
	}

	function updateSave()
	{
		$data = array(
			'isi_jawaban' => $this->input->post('isi_jawaban'),
			'tanggal' => date('Y-m-d')
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
