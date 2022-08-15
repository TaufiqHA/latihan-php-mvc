<?php 

class Mahasiswa_model {
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}
	
	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM mahasiswa');
		return $this->db->resultset();
	}

	public function getMahasiswaByid($id) 
	{
		$this->db->query('SELECT * FROM mahasiswa WHERE id = :id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{
		$this->db->query('INSERT INTO mahasiswa VALUES ("", :nama, :nim)');
		$this->db->bind('nama', $data['name']);
		$this->db->bind('nim', $data['nim']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($data)
	{
		$this->db->query('DELETE FROM mahasiswa WHERE id = :id');
		
		$this->db->bind('id', $data);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function updateDataMahasiswa()
	{

	}
}