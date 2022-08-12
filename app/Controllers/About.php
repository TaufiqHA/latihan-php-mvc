<?php 

class About
{
	public function index(string $nama = "Taufiq", string $pekerjaan = "Programmer", int $umur = 20) 
	{
		echo "Halo nama saya $nama, pekerjaan saya $pekerjaan. saya berumur $umur tahun";
	}
	
	public function page()
	{
		echo "About/page";
	}
}