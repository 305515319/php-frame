<?php
namespace frame\Libs;
use frame\Libs\Config;

class Model extends \Medoo\medoo
{
	public function __construct()
	{
		$database = Config::get('Database',null,true);
		parent::__construct($database);
	}
}