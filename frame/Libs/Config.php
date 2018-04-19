<?php
namespace frame\Libs;
class Config
{
	static $configs = [];
	/*
	*	$file : 文件名
	*	$name : 键名
	*	$flag : 获取全部选项
	*/
	static public function get($file,$name,$flag = false)
	{
		if(isset(self::$configs[$file])) {
			return $flag ? self::$configs[$file] : self::$configs[$file][$name];
		} else {
			$filename = BASEPATH.'/configs/'.ucfirst($file).'.php';
			if(is_file($filename)) {
				$config = require_once($filename);
				$flag ? self::$configs[$file] = $config : self::$configs[$file] = $config[$name];
				return $flag ? $config : $config[$name];
			} else {
				throw new \Exception($filename."配置文件不存在", 1);
			}
		}
	}
}