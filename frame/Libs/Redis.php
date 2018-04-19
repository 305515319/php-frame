<?php
namespace frame\Libs;
use frame\Libs\Config as Conf;
use Predis\Client as RedisClent;

class Redis
{
	public static function _set($key,$value)
	{
		if(REDIS) {
			$redisConfig = Conf::get('Redis',null,true);
			$redis = new RedisClent($redisConfig);
			$redis->set($key,json_encode($value));
		} else {
			return null;
		}
		
	}
	public static function _get($key)
	{
		if(REDIS) {
			$redisConfig = Conf::get('Redis',null,true);
			$redis = new RedisClent($redisConfig);
			$value = $redis->get($key);
			return (array)json_decode($value,true);
		} else {
			return null;
		}
	}
}