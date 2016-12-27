<?php
namespace core\lib;
use core\lib\config;

class model extends \medoo
{
	public function __construct()
	{
		//获取配置信息
		$database=config::all('database');
		
		parent::__construct($database);
	
	}
} 