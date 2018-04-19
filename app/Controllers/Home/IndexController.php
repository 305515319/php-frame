<?php
namespace app\Controllers\Home;
use app\Controllers\Controller;
use app\Models\Categorys;
use app\Models\Author;
use app\Models\Articles;

class IndexController extends Controller
{

	public function __construct() 
	{
		$this->cate = new Categorys;
		$this->author = new Author;
		$this->article = new Articles;
		$this->authorInfo = $this->author->findOne(['admin_id'=>'1']);
		$this->categorys = $this->cate->all(['ORDER'=>['sort'=>'DESC','id'=>'ASC']],['id','name']);
	}

	public function index()
	{
		$p = isset($_GET['page']) ? (int)$_GET['page'] : 0;

		$one = $this->articles($p,1);

		$recommend = $this->articles($p,5);

		$data = array(
			'categorys'=>$this->categorys,
			'info'=>$this->authorInfo['info'],
			'articles'=>$one,
			'recommend'=>$recommend
		);
		$this->view('Home/index',$data);
	}

	private function articles($p,$num)
	{

		$where = array('ORDER'=>array('id'=>'ASC'),'LIMIT'=>array($p,$num));

		$cate = isset($_GET['cate_id']) ?  $where['articles.pid']=(int)$_GET['cate_id'] : 0;

		$article_id = isset($_GET['article_id']) ?  $where['articles.id']=(int)$_GET['article_id'] : 0;

		$field = array('articles.id','articles.title','articles.click','articles.content','articles.create_time','categorys.name');

		$href = '/index/index';

		$articles = $this->article->lists($where,$field,$href);

		if(empty($articles['data'])) { $articles = array('data'=>[],'pstring'=>''); }
		

		$content = [];
		if(!empty($articles['data'])) {
			foreach ($articles['data'] as $key => $value) {
				$content[$key] = htmlspecialchars_decode($value['content']);
			}
		}

		return array(
			'pstring'=>$articles['pstring'],
			'articles'=>$articles['data'],
			'content'=>$content
		);

	}
}