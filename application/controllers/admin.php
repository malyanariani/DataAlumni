<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function index()
	{
		$data = array(
			"data" => $this->adminModel->getUtama()->result_array(),
		);
		return $this->load->view('index', $data);
		$this->load->view('index');

	}

	public function viewlogin(){
		$this->load->view('login_view');
	}

	public function viewadmin() // untuk menampilkan view admin yang ada
	{
		$this->r_db_admin(); // untuk membaca database admin 
		$this->load->view('viewAdmin');
	}

	public function viewform()
	{
		$this->load->model('adminModel');
		$data['getForm'] = $this->adminModel->getForm();
		
		$this->load->view('contentFormMasuk', $data);
		$this->load->view('ViewFormMasuk');
		
	}

	public function add_admin() 
	{
		$this->load->view('contentAddAdmin');
	}

	public function add_form() 
	{
		$this->load->view('contentAddForm');
	}

	public function telah_ditambahkan(){ //untuk menampilkan admin yang berhasil ditambahkan
		$this->viewadmin();
	}


	//BAGIAN CRUD HALAMAN UTAMA

	public function i_db_utama() // method untuk insert database
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nama Depan', 'required');


		// echo "OK";

		if($this->form_validation->run()){ //jika berhasil
			$this->load->model('adminModel');
			$data = array(
				'nama_depan' /*kolom di db*/	=>$this->input->post('name'/*name pada field*/),
				'nama_belakang'/*kolom di db*/	=>$this->input->post('lastname' /*name pada field*/),
				'tempat_lahir' /*kolom di db*/	=>$this->input->post('tempat'/*name pada field*/),
				'tanggal_lahir' /*kolom di db*/	=>$this->input->post('tanggal'/*name pada field*/),
				'agama' /*kolom di db*/			=>$this->input->post('agama'/*name pada field*/),
				'alamat' /*kolom di db*/		=>$this->input->post('alamat'/*name pada field*/),
				'email' /*kolom di db*/			=>$this->input->post('email'/*name pada field*/),
				'no_telp' /*kolom di db*/		=>$this->input->post('phone'/*name pada field*/),
				'tahun_masuk' /*kolom di db*/	=>$this->input->post('tahun'/*name pada field*/),
				'prodi' /*kolom di db*/			=>$this->input->post('prodi'/*name pada field*/),
				'pekerjaan' /*kolom di db*/		=>$this->input->post('pekerjaan'/*name pada field*/),
				'judul' /*kolom di db*/			=>$this->input->post('judul'/*name pada field*/)

			);

			$this->adminModel->insertUtama($data);
			redirect($uri = 'Admin/index', $method = 'auto', $code = NULL);

		}
		else{
			redirect($uri = 'Admin/index', $method = 'auto', $code = NULL);//jika tidak berhasil akan dikembalikan di halaman form
		}
	}

	public function r_db_utama() //method untuk membaca database
	{
		$data = array(
			"data" => $this->adminModel->getUtama()->result_array(),
		);

		//1. sama saja $data['data'] = $this->adminModel->getAdmin();

		return $this->load->view('index', $data);
	}


	//BAGIAN CRUD ADMIN

	public function do_delete_admin($id_admin){ // method untuk menghapus database
		$id = array('id_adm' => $id_admin);
		$result = $this->adminModel->deleteAdmin('admin', $id);
		if($result>=1){
			redirect('admin/ViewAdmin');
		}
	}


	public function r_db_admin() //method untuk membaca database
	{
		$data = array(
			"data" => $this->adminModel->getAdmin()->result_array(),
		);
		return $this->load->view('contentAdmin', $data);
	}
	

	public function i_db_admin () // method untuk insert database
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		// echo "OK";

		if($this->form_validation->run()){ //jika berhasil
			$this->load->model('adminModel');
			$data = array(
				'nama' /*kolom di db*/	=>$this->input->post('username'/*name pada field*/),
				'pass'/*kolom di db*/	=>$this->input->post('password' /*name pada field*/)
			);

			$this->adminModel->insertAdmin($data);
			redirect($uri = 'Admin/viewadmin', $method = 'auto', $code = NULL);

		}
		else{
			redirect($uri = 'Admin/add_admin', $method = 'auto', $code = NULL);//jika tidak berhasil akan dikembalikan di halaman form
		}
	}

 
	public function pilih() // memilih data yang dipilih untuk edit admin
	{
		$kd = $this->uri->segment(3);
		if ($kd == NULL)
			{
				redirect('admin/viewAdmin');
			}
		$dt = $this->adminModel->edit($kd);

		$data['id'] 	 = $kd;
		$data['namanya'] = $dt->nama;
		$data['passnya'] = $dt->pass;

		$this->load->view('contentEditAdmin', $data);
	}

	public function update() //proses edit admin
	{
		if($this->input->post('edit')){
			$id = $this->input->post('id');
			$this->adminModel->update($id);
			redirect('admin/viewadmin');
		}
		else{
			$id = $this->input->post('id');
			redirect('admin/viewadmin');
		}
	}

	//BAGIAN CRUD FORMULIR MASUK

	public function del()  //method untuk delete form masuk
	{
		$u = $this->uri->segment(3);
		$this->adminModel->delete($u);
		redirect('admin/viewform');
	}


		public function r_db_form() //method untuk membaca database form
	{
		$data = array(
			"data" => $this->adminModel->getForm()->result(),
		);
		return $this->load->view('contentFormMasuk', $data); //melemparkan data ke contentForm Masuk
	}

	public function i_db_form() // method untuk insert database
	{

			$this->load->model('adminModel');
			$data = array(
				'nama_depan' /*kolom di db*/	=>$this->input->post('nama_depan'/*name pada field*/),
				'nama_belakang'/*kolom di db*/	=>$this->input->post('nama_belakang' /*name pada field*/),
				'tempat_lahir' /*kolom di db*/	=>$this->input->post('tempat_lahir'/*name pada field*/),
				'tanggal_lahir' /*kolom di db*/	=>$this->input->post('tanggal_lahir'/*name pada field*/),
				'agama' /*kolom di db*/			=>$this->input->post('agama'/*name pada field*/),
				'alamat' /*kolom di db*/		=>$this->input->post('alamat'/*name pada field*/),
				'email' /*kolom di db*/			=>$this->input->post('email'/*name pada field*/),
				'no_telp' /*kolom di db*/		=>$this->input->post('no_telepon'/*name pada field*/),
				'tahun_masuk' /*kolom di db*/	=>$this->input->post('tahun_masuk'/*name pada field*/),
				'prodi' /*kolom di db*/			=>$this->input->post('prodi'/*name pada field*/),
				'pekerjaan' /*kolom di db*/		=>$this->input->post('pekerjaan'/*name pada field*/),
				'judul' /*kolom di db*/			=>$this->input->post('judul_skripsi'/*name pada field*/)

			);

			$this->adminModel->insertForm($data);
			redirect($uri = 'Admin/viewform', $method = 'auto', $code = NULL);
	}
}