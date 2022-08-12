<?php 

class About
{
	public function index(string $nama = "Taufiq", string $pekerjaan = "Programmer") 
	{
		echo "Halo nama saya $nama, pekerjaan saya $pekerjaan";
	}
	
	public function page()
	{
		echo "About/page";
	}
}