<?php
namespace app\models;
use core\lib\model;

class news extends model
{
	//定义数据库
	public $table="new";

	//数据插入
	public function add($data){
		    $last_id = $this->insert($this->table, $data);
		    if ($last_id!==false) {
		    	return $last_id;
		    }else{
		    	return false;
		    }
	}

	//查询所有数据
	public function all(){
		$arr=$this->select($this->table,"*");
		return $arr;
	}

	//获取一条数据
	public function one($id){
		$news=$this->get($this->table,"*",['id'=>$id]);
		return $news;
	}

	//删除一条数据
	public function del($id){
		$res=$this->delete($this->table,['id'=>$id]);
		return $res;
	}	

	//修改一条数据
	public function save($data,$id){
		$res=$this->update($this->table, $data, ['id'=>$id]);
		return $res;
	}

}