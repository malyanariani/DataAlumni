<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model 
{

	// BAGIAN CRUD UTAMA
	public function getUtama(){ //query untuk membaca database formulir_masuk
		$data = $this->db->query('SELECT * FROM formulir_masuk');
		return $data;
	}

	public function insertUtama($data){ //query untuk insert database
		$this->db->insert("formulir_masuk", $data);
	}


	// BAGIAN CRUD ADMIN

	// "$"" dibaca variabel

	public function getAdmin(){ //query untuk membaca database admin
		$data = $this->db->query('SELECT * FROM admin');
		return $data;
	}

	public function deleteAdmin($tableName, $id){ //query untuk hapus database
		$result = $this->db->delete($tableName, $id);
		return $result;
	}

	public function insertAdmin($data)  //query untuk insert database
	{
		$this->db->insert("admin", $data);
	}

	public function edit($a) //mengambil data yang ingin di edit
	{
		$d = $this->db->get_where('admin', array('id_adm' => $a))->row();
		return $d;
	}

	public function update($id) // proses mengedit data
	{
		$username = $this->input->post('usernameedit');
		$password = $this->input->post('passwordedit');
		$data = array(
		'nama' => $username, 
		'pass' => $password
		);
		$this->db->where('id_adm', $id);
		$this->db->update('admin', $data);
	}


	// BAGIAN CRUD FORMULIR MASUK

	public function getForm(){ //query untuk membaca database admin
		$query = $this->db->get('formulir_masuk');
		return $query;
	}

	public function delete($a){  // menghapus form masuk
		$this->db->delete('formulir_masuk', array('id_formulir' => $a) );
		return;
	}

	public function insertForm($data){ //query untuk insert database
		$this->db->insert("formulir_masuk", $data);
	}
}