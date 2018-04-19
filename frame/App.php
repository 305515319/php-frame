<?php
namespace frame;
use frame\Libs\Route;

class App
{
	//加载控制器文件执行方法
	static public function run()
	{
		$route = new Route();
		$ctrl = $route->ctrl;
		$action = $route->action;
		$namespace = $route->namespace;
		 if($namespace) {
            $ctrlFile = CTRL.'/'.$namespace.'/'.$ctrl.'.php' ;
            $ctrlObj = CTRLNAMESPACE.$namespace.'\\'.$ctrl;
        } else {
            $ctrlFile = CTRL.'/'.$ctrl.'.php';
            $ctrlObj =  CTRLNAMESPACE.$ctrl;
        }
		if(is_file($ctrlFile)) {
			require_once($ctrlFile);
			$obj = new $ctrlObj;
			if(method_exists($obj,$action)) {
				$obj->$action();
			} else {
				throw new \Exception($action."方法不存在", 1);
				
			}
		} else {
			throw new \Exception($ctrl."控制器不存在", 1);
		}
	}

	//自动加载类文件
	static public function autoload($class)
	{
		$file = BASEPATH.'/'.str_replace('\\', '/', $class).'.php';
		if(is_file($file)) {
			require_once($file);
		} else {
			return false;
		}
	}
}