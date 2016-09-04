<?php
namespace App\System\Route;

use Storage;

class Builder
{
	protected $storage;

	public function __construct()
	{
		$this->storage = new Storage();
	}


	public static function get($url, $controller, $method)
	{
		$this->storage->add('GET', $controller, $method)
	}
}