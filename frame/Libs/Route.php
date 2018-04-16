<?php
namespace frame\Libs;
use frame\Libs\Config;

class Route
{
	public $ctrl;
	public $action;
	public $namespace;

	public function __construct()
	{
		$path = $_SERVER['REQUEST_URI'];
		$routeDefault = Config::get('default','Route');
		if(isset($path) && $path != '/') {
			$path = explode('/', trim($path,'/'));
			if(isset($path[0])) {
				$this->ctrl = $path[0];
			}
			unset($path[0]);
			if(isset($path[1])) {
				$this->action = $path[1];
			} else {
				$this->action = $routeDefault['action'];
			}
			unset($path[1]);
			//获取参数
			$count = count($path) + 2;
			$i = 2;
			while ($i < $count) {
				if(isset($path[$i+1])){
					$_GET[$path[$i]] = $path[$i + 1];
				}
				$i += 2;
			}

		} else {
			$this->ctrl = $routeDefault['ctrl'];
			$this->action = $routeDefault['action'];
		}
		$this->namespace = $routeDefault['namespace'];
	}

}