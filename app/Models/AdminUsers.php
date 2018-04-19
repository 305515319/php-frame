<?php
namespace app\Models;
use frame\Libs\Model;
use frame\Libs\Log;

class AdminUsers extends Model
{
	public $table = 'admin_users';

	public function findOne(array $where , string $colums = '*')
	{
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

	private function output()
	{
		Log::write(json_encode($this->log()),'mysql_');
	}
}