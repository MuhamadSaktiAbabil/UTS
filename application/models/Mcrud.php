<?php

class Mcrud extends CI_Model
{

	public function retrieve()
	{
		$this->db->select('id,nim,nama_mhs,jenis_kelamin,alamat,no_hp');
		$this->db->from("tampil");
		$q = $this->db->get();
		if ($q->num_rows() > 0) {
			$hasil = $q->result_array();
		} else {
			$hasil = array();
		}
		$q->free_result();

		return $hasil;
	}

	public function retrieve2()
	{
		$this->db->select('id,nim,no_hp_lama,no_hp_baru,tgl_diubah');
		$this->db->from("log");
		$q = $this->db->get();
		if ($q->num_rows() > 0) {
			$hasil = $q->result_array();
		} else {
			$hasil = array();
		}
		$q->free_result();

		return $hasil;
	}

	public function simpan_data($data)
	{
		$q = $this->db->insert('mhs', $data);
		if ($q) {
			redirect('crud/tampil');
		} else {
			redirect('crud/tambah');
		}
	}

	public function getRow($id)
	{
		$q = $this->db->where('id', $id)->get('mhs');
		return $q;
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama_mhs'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')

		);

		$q = $this->db->where('id', $id)->update('mhs', $data);
		if ($q) {
			redirect('crud/tampil');
		} else {
			redirect('crud/ubah');
			echo "hal tersimpan";
		}
	}


	public function hapus_data()
	{
		$id = $this->uri->segment(3);
		$q = $this->db->where('id', $id)->delete('mhs');
		if ($q) {
			redirect('crud/tampil');
		}
	}
}
