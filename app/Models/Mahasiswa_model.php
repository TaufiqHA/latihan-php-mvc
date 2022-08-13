<?php 

class Mahasiswa_model {
	private array $mhs = [
		[
			"nama" => "Taufiq Hidayah Abdullah",
			"nim" => 60600120046,
		],
		[
			"nama" => "Rahmawati",
			"nim" => 60600120003,
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}