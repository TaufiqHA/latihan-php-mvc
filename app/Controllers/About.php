<?php 

class About extends Controller
{
	public function index(string $nama = "Taufiq", string $pekerjaan = "Programmer", int $umur = 20) 
	{
		$this->view('about/index');
	}
	
	public function page()
	{
		echo "About/page";
	}
}