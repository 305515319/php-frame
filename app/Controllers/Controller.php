<?php
namespace app\Controllers;
use frame\App;

class Controller
{
	public function view($file,$data = [])
	{
		$views = APP.'/Views/'.$file.'.html';
		if(is_file($views)) {
			$twigConfig = CACHE ? array( 'cache' => BASEPATH.'/storage/cache/' ) : [];
			$loader = new \Twig_Loader_Filesystem(APP.'/Views/');
			$twig = new \Twig_Environment($loader, $twigConfig);
			$template = $twig->loadTemplate($file.'.html');
			$template->display($data);
		} else {
			throw new \Exception($file."视图模版不存在", 1);
		}
	}
}