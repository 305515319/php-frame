<?php
namespace frame\Libs;
use frame\Libs\Config;

class Route
{
	public $ctrl = 'IndexController';
	public $action = 'index';
	public $namespace = 'Home';

	public function __construct()
	{
		
		$uri = $_SERVER['REQUEST_URI'];
		if(isset($uri) && $uri != '/') {
			$path = explode('?', trim($uri,'/'));
			$isExists = $this->checkRoute($path[0]);
			if(!isset($path[0]) || !$isExists) {
				$this->ctrl = 'WelcomeController';
				$this->action = 'error404';
			}
		}
	}

	private function checkRoute($alias)
	{

		$routes = Config::get('Routes',null,true);
		foreach ($routes as $key => $value) {

			foreach ($value as $k => $v) {
				if($k == $alias) {
					$c = explode('@', $v);
					$this->ctrl = $c[0];
					$this->action = $c[1];
					$this->namespace = $key;
					return true;
				} 
			}
		}
		return false;
	}
}