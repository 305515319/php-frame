<?php
namespace app\Models;
use frame\Libs\Model;
use frame\Libs\Log;
use frame\Libs\Redis;

class Author extends Model
{
	public $table = 'author_info';

	public function findOne(array $where , array $colums = [])
	{
		$ret = Redis::_get('author_info');
		if($ret) {
			return $ret ; 
		} else {
			$colums = $colums ? $colums : '*';
			$ret = $this->get($this->table,$colums,$where);
			if($ret !== false ) Redis::_set('author_info',$ret);
			$this->output();
			return $ret;
		}
	}

	public function updateOne(array $data , array $where)
	{
		$ret = $this->update($this->table,$data,$where);
		$this->output();
		return $ret;
	}
	public function add(array $data)
	{
		$ret = $this->insert($this->table,$data);
		$ret = $ret ? $this->id() : 0 ;
		$this->output();
		return $ret;
	}
	
	private function output()
	{
		Log::write(json_encode($this->log()),'mysql_');
	}
}