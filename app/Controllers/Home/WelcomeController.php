<?php
namespace app\Controllers\Home;
use app\Controllers\Controller;

class WelcomeController extends Controller
{
	public function index()
	{
		echo ("<h1>Hello,World</h1>欢迎使用PHP-FRAME框架");
	}
	public function error404()
	{
		$this->view('Error/404');
	}
}