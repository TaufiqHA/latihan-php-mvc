<?php

class Mahasiswa extends Controller
{
	public function index()
	{
		$data['judul'] = 'Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);

		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function hapus($data)
	{
		if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($data) > 0) {
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function getUbah()
	{
		echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByid($_POST['id']));
	}

	public function ubah()
	{
		if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}
