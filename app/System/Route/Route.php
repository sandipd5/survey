<?php
namespace App\System\Route;

class Route
{
	protected $path;
	protected $controller;
	protected $method;
	protected $params = [];
	protected $requestMethod;

	public function __construct($requestMethod, $path, $controller, $method)
	{
		$this->path = $path;
		$this->method = $method;
		$this->controller = $controller;
		$this->requestMethod = strtoupper($requestMethod);
		$this->params = $this->filterParamsName($path);
	}

	public function execute()
	{
		//TODO
	}

	public function isMatch($url)
	{
		return $this->matchesRequestMethod() && $this->matchesPath($url);
	}

	protected function filterParamsName($url)
	{
		$params = [];

		preg_match_all('/{[a-z]+}/i', $url, $matches);

		foreach ($matches as $match) {
			$params[$match] = null
		}

		return $params;
	}

	public function getParsmsValue()
	{
		//TODO
	}

	protected function matchesRequestMethod()
	{
		return $this->getRequestMethod() === $this->requestMethod;
	}

	protected function matchesPath()
	{
		//TODO
		return true;
	}


	protected function getRequestMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}