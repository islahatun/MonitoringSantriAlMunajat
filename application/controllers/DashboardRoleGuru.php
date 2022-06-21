<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardRoleGuru extends CI_Controller
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
}
