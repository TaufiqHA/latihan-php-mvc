<?php 

class App 
{
	public function __construct()
	{
		$url = $this->parsURL();
		var_dump($url);
	}

	public function parsURL()
	{
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
			return $url;
		}
	}
}