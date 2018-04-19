<?php
namespace app\Models;
use frame\Libs\Model;
use frame\Libs\Log;
use frame\Libs\Page;
use frame\Libs\Redis;

class Articles extends Model
{
	public $table = 'articles';

	public function lists(array $where = [] , array $colums = [] , string $href = '')
	{
		$ret = Redis::_get(md5($where['LIMIT'][0].$where['LIMIT'][1].$href));
		if($ret) {
			return $ret ; 
		} else {
			$result = [];
			$count = $this->count($this->table);
			if($count > 0) {
				$colums = $colums ? $colums : '*';
				$ret = $this->select($this->table,[
					'[>]categorys'=>['pid'=>'id'],
				],$colums,$where);
				$this->output();
				$page = new Page($count,SHOWPAGE,$where['LIMIT'][0],$where['LIMIT'][1],$href); //总条数、显示页数、当前页数、每页显示数量
				$result = array(
					'data'=>$ret,
					'phtml'=>$page->showPages(),
					'pstring'=>$page->getPages()
				);
				Redis::_set(md5($where['LIMIT'][0].$where['LIMIT'][1].$href),$result);
			} 
			return $result;
		}
	}
	public function add(array $data)
	{
		$ret = $this->insert($this->table,$data);
		$ret = $ret ? $this->id() : 0 ;
		$this->output();
		return $ret;
	}
	public function findOne(array $where , array $colums = [])
	{
		$colums = $colums ? $colums : '*';
		$ret = $this->get($this->table,$colums,$where);
		$this->output();
		return $ret;
	}

	public function updateOne(array $data , array $where)
	{
		$ret = $this->update($this->table,$data,$where);
		$this->output();
		return $ret;
	}
	public function delOne(array $where)
	{
		$ret = $this->delete($this->table,$where);
		$this->output();
		return $ret;
	}

	private function output()
	{
		Log::write(json_encode($this->log()),'mysql_');
	}
}