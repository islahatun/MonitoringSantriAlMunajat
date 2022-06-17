<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model
{

	function clogin($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	function sessiondata()
	{
		return $this->db->get_where('sys_users', ['username' => $this->session->userdata('username')])->row_array();
	}
}
