<?php

class Crud extends CI_Controller
{
	public function __construct()

	{
		parent::__construct();
		$this->load->model('mcrud');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index()
	{
		redirect('crud/tampil');
	}

	public function tampil()
	{
		$data = array(
			'isi' => $this->mcrud->retrieve(),
		);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tampil_data', $data);
		$this->load->view('template/footer');
	}

	public function tampil2()
	{
		$data = array(
			'isi' => $this->mcrud->retrieve2(),
		);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tampil_log', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data = array('judul' => 'Tambah Data');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambah_data', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_mhs', 'required|alpha');
		$this->form_validation->set_rules('no_hp', 'nomer', 'required|numeric');
		if ($this->form_validation->run() == false) {
			$data = array('judul' => 'Tambah Data');
			$this->load->view('tambah_data', $data);
		} else {
			echo "hal tersimpan";

			$data = array(
				'id' => '',
				'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp')

			);
			$this->mcrud->simpan_data($data);
		}
	}

	public function ubah()
	{

		$id = $this->uri->segment(3);
		$q = $this->mcrud->getRow($id);
		$data = array(
			'judul' => 'Ubah Data',
			'id' 	=> $q->row('id'),
			'nim' => $q->row('nim'),
			'nama_mhs' => $q->row('nama_mhs'),
			'jenis_kelamin' => $q->row('jenis_kelamin'),
			'alamat' => $q->row('alamat'),
			'no_hp' => $q->row('no_hp')
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('update_data', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$this->mcrud->update_data();
	}

	public function view()
	{
		$id = $this->uri->segment(3);
	}

	public function hapus()
	{
		$this->mcrud->hapus_data();
	}
}
