<?php
namespace app\Controllers\Admin;
use app\Controllers\Controller;
use app\Models\Categorys;
use app\Models\Articles;

class ArticleController extends Controller
{
	public function __construct()
	{
		session_start();
		if(!isset($_SESSION['uid']) || !isset($_SESSION['username']) || $_SESSION['username'] != 'admin' ) {
			jumpUrl('admin/login');
		}
		$this->article = new Articles;
		$this->cate = new Categorys;
		$this->categorys = $this->cate->all(['ORDER'=>['sort'=>'DESC','id'=>'ASC']],['id','name']);
	}

	public function index()
	{
		$p = isset($_GET['page']) ? (int)$_GET['page'] : 0;
		$articles = $this->article->lists(['ORDER'=>['id'=>'ASC'],'LIMIT'=>[$p,PAGENUM]],['articles.id','articles.title','articles.click','articles.create_time','categorys.name']);
		if(empty($articles)) { $articles = array('data'=>[],'phtml'=>''); }
		$this->view('Admin/article/lists',['cate'=>$this->categorys,'articles'=>$articles['data'],'page'=>$articles['phtml']]);
	}
	public function article()
	{
		$this->view('Admin/article/addarticle',['cate'=>$this->categorys]);
	}

	public function editArticle()
	{
		$article = $this->article->findOne(['id'=>(int)$_GET['id']],['id','pid','title','content']);
		$this->view('Admin/article/editarticle',['cate'=>$this->categorys,'article'=>$article,'content'=>htmlspecialchars_decode($article['content'])]);
	}
	public function doEditArticle()
	{
		$data = in($_POST);
		if(!isset($data['pid']) || (int)$data['pid'] == '0') {
			echo '<script>alert("分类ID不存在");history.back();</script>';
		} elseif(!isset($data['title'])) {
			echo '<script>alert("请填写文章标题");history.back();</script>';
		} elseif(!isset($data['content'])) {
			echo '<script>alert("请填写文章内容");history.back();</script>';
		} else {
			$data['update_time'] = date('Y-m-d H:i:s');
			$ret = $this->article->updateOne($data,['id'=>(int)$data['id']]);
			if($ret) {
				alert("修改文章操作成功");
				jumpUrl('admin/article');
			} else {
				echo '<script>alert("修改文章操作失败");history.back();</script>';
			}
		}
	}

	public function doArticle()
	{
		$data = in($_POST);
		if(!isset($data['pid']) || (int)$data['pid'] == '0') {
			echo '<script>alert("分类ID不存在");history.back();</script>';
		} elseif(!isset($data['title'])) {
			echo '<script>alert("请填写文章标题");history.back();</script>';
		} elseif(!isset($data['content'])) {
			echo '<script>alert("请填写文章内容");history.back();</script>';
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$ret = $this->article->add($data);
			if($ret) {
				alert("发布文章操作成功");
				jumpUrl('admin/article');
			} else {
				echo '<script>alert("发布文章操作失败");history.back();</script>';
			}
		}
	}
	public function delArticle()
	{
		$id = (int)$_POST['id'];
		$ret = $this->article->delOne(['id'=>$id]);
		echo $ret ? 1 : 2;
	}
}