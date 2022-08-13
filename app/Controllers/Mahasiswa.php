<?php 

class Mahasiswa extends Controller 
{
	public function index()
	{
		$this->view('templates/header');
		$this->view('mahasiswa/index');
		$this->view('templates/footer');
	}
}