<?php
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
require_once(__DIR__.'/configs/Website.php');
require_once(__DIR__.'/frame/Common/Function.php');
require_once(__DIR__.'/frame/App.php');
require_once(__DIR__.'/vendor/autoload.php');
if(DEBUG){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_error','On');
} else {
	ini_set('display_error','Off');
}
if(REDIS) { \Predis\Autoloader::register(); }

spl_autoload_register('frame\App::autoload');
$debugbar = new DebugBar\StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();
$debugbar["messages"]->addMessage("hello world!");
echo $debugbarRenderer->renderHead();
echo $debugbarRenderer->render();
frame\App::run();
?>