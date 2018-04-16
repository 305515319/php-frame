<?php
namespace frame;
use frame\Libs\Route;

class App
{
	static public $classMap = [];

	static public function init()
	{
		require_once(dirname(dirname(__FILE__)).'/configs/Website.php');
	}

	static public function run()
	{
		//加载控制器，执行控制器方法
		self::init();
		$route = new Route();
		$ctrl = ucfirst($route->ctrl);
		$action = $route->action;
		$namespace = $route->namespace;
		$ctrlFile = BASEPATH.'/'.str_replace('\\', '/', $namespace).$ctrl.'Controller.php';
		$ctrlClass = $namespace.$ctrl.'Controller';
		if(is_file($ctrlFile)) {
			require_once ($ctrlFile);
			$obj = new $ctrlClass;
			if(method_exists($obj, $action)) {
				$obj->$action();
			} else {
				throw new \Exception($action."方法不存在", 1);
			}
		} else {
			throw new \Exception($ctrl."控制器不存在", 1);
		}

	}


	static public function autoload($class)
	{
		if(isset(self::$classMap[$class])) {
			return true;
		} else {
			$class = str_replace('\\', '/', $class);
			$file = BASEPATH.'/'.$class.'.php';
			if(is_file($file)) {
				require_once($file);
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}
		
		
	}
}