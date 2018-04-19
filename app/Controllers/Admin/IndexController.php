<?php
namespace app\Controllers\Admin;
use app\Controllers\Controller;
use app\Models\AdminUsers;
use app\Models\Author;

class IndexController extends Controller
{
	public function __construct()
	{
		session_start();
		if(!isset($_SESSION['uid']) || !isset($_SESSION['username']) || $_SESSION['username'] != 'admin' ) {
			jumpUrl('admin/login');
		}
		$this->model = new AdminUsers;
		$this->profile = new Author;
	}
	public function index()
	{
		$this->view('Admin/index');
	}

	public function profile()
	{
		$profile = $this->profile->findOne(['admin_id'=>$_SESSION['uid']]);
		$this->view('Admin/profile',['profile'=>$profile,'info'=>htmlspecialchars_decode($profile['info'])]);
	}
	public function saveProfile()
	{
		$data = in($_POST);
		if($this->profile->findOne(['admin_id'=>$_SESSION['uid']],['id'])) {
			$ret = $this->profile->updateOne($data,['admin_id'=>$_SESSION['uid']]);
		} else {
			$data['admin_id'] = $_SESSION['uid'];
			$ret = $this->profile->add($data);
		}
		if(!$ret) {
			alert('保存资料失败');
		} 
		jumpUrl('admin/profile');
		
	}

	public function setting()
	{
		$this->view('Admin/setting');
	}

	public function setpass()
	{
		$data = in($_POST);
		$id = $_SESSION['uid'];
		if($data['rep'] !== $data['newp']) {
			echo 0;
		} else {
			$admin = $this->model->findOne(['id'=>$id,'password'=>md5($data['old'])]);
			if(!$admin) {
				echo 1;
			} else {
				$ret = $this->model->updateOne(['password'=>md5($data['newp'])],['id'=>$id]);
				echo $ret ? 3 : 2;
			}
		}
		
	}
}