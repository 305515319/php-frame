<?php
namespace frame\Libs;

class Config
{
	/*
	*	加载配置文件
	*	$name : 键名称
	*	$file : 文件名称 
	*	$flag : 是否获取全部的值
	*/
	static $configs = [];

	static function get($name,$file,$flag = false)
	{
		if(isset(self::$configs[$file])) {
			if($flag) {
				return self::$configs[$file];
			} else {
				return self::$configs[$file][$name];
			}
		} else {
			$configFile = BASEPATH.'/configs/'.$file.'.php';
			if(is_file($configFile)) {
				$config = require_once($configFile);
				self::$configs[$file] = $config;
				if($flag) {
					return $config;
				} else {
					return $config[$name];
				}
			} else {
				throw new Exception($configFile."配置文件不存在", 1);
			}
		}
	}

}