<?php
namespace app\Controllers\Admin;
use app\Controllers\Controller;
use app\Models\AdminUsers;

class LoginController extends Controller
{
	public function __construct()
	{
		session_start();
		$this->model = new AdminUsers;
	}
	public function login()
	{	
		$this->view('Admin/login');
	} 
	public function doLogin()
	{
		$data = in($_POST);
		if(!empty($data['username']) && !empty($data['password'])) {
			$admin = $this->model->findOne(['username'=>$data['username'],'password'=>md5($data['password'])]);
			if(!$admin) {
				echo 0;
			} else {
				$_SESSION['uid'] = $admin['id'];
				$_SESSION['username'] = $admin['username'];
				echo 1;
			}
		} else {
			echo 2;
		}
	}
	public function logout()
	{
		unset($_SESSION['uid']);
		unset($_SESSION['username']);
		jumpUrl('admin/login');
	}
}