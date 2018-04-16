<?php
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
define('BASEPATH',str_replace('\\','/',realpath(dirname(dirname(__FILE__)).'/')));
define('APP',BASEPATH.'/app');
define('FRAME',BASEPATH.'/frame');
define('SERVER_URL',$_SERVER['HTTP_HOST']);
define('CACHE',false);
define('DEBUG',true);
require_once(FRAME.'/Common/Function.php');
require_once(BASEPATH.'/vendor/autoload.php');
if(DEBUG){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_error','On');
} else {
	ini_set('display_error','Off');
}
spl_autoload_register('frame\App::autoload');