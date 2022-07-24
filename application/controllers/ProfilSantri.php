<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilSantri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('MFunction');
		$this->load->model('MProfilSantri');
	}
	public function index()
	{
		$data['title'] = 'Profil Santri';
		$data['subtitle'] = 'Data Profil Santri';
		$data['ao'] =  $this->MProfilSantri->datalist();


		$data['content_overview'] = $this->load->view('ProfilSantri', $data, true);
		$this->load->view('overview', $data);
	}

	function updateSave()
	{
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nama_santri' => $this->input->post('nama_santri'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'agama' => $this->input->post('agama'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'no_hp_ayah' => $this->input->post('no_hp_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'no_hp_ibu' => $this->input->post('no_hp_ibu'),
			'nama_wali_santri' => $this->input->post('nama_wali_santri'),
			'alamat_wali_santri' => $this->input->post('alamat_wali_santri'),
			'no_hp_wali_santri' => $this->input->post('no_hp_wali_santri'),
			'alamat_orangtua' => $this->input->post('alamat_orang_tua'),
			// 'kelas' => $this->input->post('kelas'),
		);

		$this->db->where('id_santri', $this->input->post('id_santri'));
		$this->db->update("dm_Santri", $data);
	}
}
