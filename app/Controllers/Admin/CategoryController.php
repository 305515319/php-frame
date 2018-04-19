<?php
namespace app\Controllers\Admin;
use app\Controllers\Controller;
use app\Models\Categorys;

class CategoryController extends Controller
{
	public function __construct()
	{
		session_start();
		if(!isset($_SESSION['uid']) || !isset($_SESSION['username']) || $_SESSION['username'] != 'admin' ) {
			jumpUrl('admin/login');
		}
		$this->model = new Categorys;
	}

	public function index()
	{
		$p = isset($_GET['page']) ? (int)$_GET['page'] : 0;

		if(isset($_GET['pid']) && (int)$_GET['pid'] != 0) {
			$where = array(
				'ORDER'=>array('sort'=>'DESC','id'=>'ASC'),
				'LIMIT'=>array($p,PAGENUM),
				'pid'=>$_GET['pid']
			);
		} else {
			$where = array(
				'ORDER'=>array('sort'=>'DESC','id'=>'ASC'),
				'LIMIT'=>array($p,PAGENUM)
			);
		}

		$data = $this->model->lists($where);
		if(empty($data)) { $data = array('data'=>[],'phtml'=>''); }
		$this->view('Admin/category/lists',['data'=>$data['data'],'page'=>($data['phtml'])]);
	}

	public function cate()
	{
		$this->view('Admin/category/addcate');
	}
	public function editCate()
	{
		$id = (int)$_GET['id'];
		$data = $this->model->findOne(['id'=>$id]);
		$this->view('Admin/category/editcate',['data'=>$data]);
	}

	public function doCate()
	{
		$data = in($_POST);

		if($data['typ'] == 'add') {
			$ret = $this->model->add(['name'=>$data['n'],'sort'=>(int)$_POST['sort'],'create_time'=>date('Y-m-d H:i:s')]);
			echo $ret ? 1 : 2 ;
		} 

		else if($data['typ'] == 'update') {
			$ret = $this->model->updateOne(['name'=>$data['n'],'sort'=>(int)$_POST['sort'],'update_time'=>date('Y-m-d H:i:s')],['id'=>$data['id']]);
			echo $ret ? 1 : 2 ;
		}  

		else if($data['typ'] == 'del') {
			$article = $this->model->findByArticle(['pid'=>$data['id']]);
			if(!$article) {
				$ret = $this->model->delOne(['id'=>$data['id']]);
				echo $ret ? 1 : 2 ;
			} else {
				echo 3;
			}
		} 

		else {
			echo 0;
		}
	}

}