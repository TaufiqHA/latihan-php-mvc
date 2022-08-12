<?php 

class App 
{
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	public function __construct()
	{
		$url = $this->parsURL();
		
		if (file_exists('../app/Controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
			var_dump($url);
		}
	}

	public function parsURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}