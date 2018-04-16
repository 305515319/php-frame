<?php
namespace app\Models;
use frame\Libs\Model;

class Users extends Model
{
	public $table = 'user';

	public function lists()
	{
		return $this->select($this->table,'*');
	}

	public function addData(array $data)
	{
		return $this->insert($this->table,$data);
	}

	public function delData(array $where)
	{
		return $this->delete($this->table,$where);
	}

	public function editData(array $data,array $where)
	{
		return $this->update($this->$table,$data,$where);
	}
}