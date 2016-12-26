<?php
namespace core\lib;
use core\lib\config;

class model extends \PDO
{
	public function __construct()
	{
		//获取配置信息
		$database=config::all('database');
		
		try{
			parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWORD']);
		} catch (\PDOException $e){
			p($e->getMessage());
		}
	}
} 