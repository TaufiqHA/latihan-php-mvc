<?php 

class User_model {
	private string $nama = 'Taufiq Hidayah Abdullah';

	public function getUser(): string
	{
		return $this->nama;
	}
}