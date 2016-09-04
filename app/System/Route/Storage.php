<?php
namespace App\System\Route;

use Route;

class Storage
{
	protected $routes = [];

	public static function add($requestMethod, $path, $controller, $method)
	{
		array_push(
			$this->routes, new Route(
				$requestMethod, $path, $controller, $method
			)
		);
	}

	public function match($url)
	{
		foreach ($this->routes as $route) {
			if($this->route->isMatch(ROUTE_URI)) {
				return $route;
				break;
			}
		}

		return false;
	}
}