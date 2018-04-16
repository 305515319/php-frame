<?php
namespace app\Controllers\Home;
use app\Controllers\Controller;
use app\Models\Users;

class IndexController extends Controller
{

	public function __construct() {
		$this->model = new Users();
	}

	public function index()
	{
		$users = $this->model->lists();
		$this->view('Home/index',['data'=>$users,'title'=>"twig模版引擎"]);
	}
	public function add()
	{
		$data = in($_POST);
		if($this->model->addData($data)) {
			jumpUrl('index');
		} else {
			p("ERROR");
		}
	}
	public function del()
	{
		$id = (int)$_GET['id'];
		if($this->model->delData(['id'=>$id])) {
			jumpUrl('index');
		} else {
			p("ERROR");
		}
	}
}