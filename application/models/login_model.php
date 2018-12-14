<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function getlogin($nama,$pass)
	{
		$this->db->where('nama', $nama);
		$this->db->where('pass', $pass);
		$query=$this->db->get('admin');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('nama' => $row->nama,
							  'pass' => $row->pass);
			}
			$this->session->get_userdata($sess);
				redirect('admin/viewadmin');
		}
		else {
			$this->session->set_flashdata('info', 'Maaf Username atau Password salah');
			redirect('login');
		}
	}
}