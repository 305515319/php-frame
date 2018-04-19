<?php
namespace app\Controllers\Admin;
use app\Controllers\Controller;
use app\Models\Templates;

class TemplateController extends Controller
{
	public function __construct()
	{
		session_start();
		if(!isset($_SESSION['uid']) || !isset($_SESSION['username']) || $_SESSION['username'] != 'admin' ) {
			jumpUrl('admin/login');
		}
		$this->model = new Templates;
	}

	public function index()
	{
		$this->view('Admin/Template/index');
	}

}