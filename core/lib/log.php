<?php 
namespace core\lib;
use core\lib\config;

class log 
{
	static $class;
	/**
	 * 1.确定日志存储方式
	 *
	 * 2.写日志
	 */
	static public function init()
	{
		//确定存储方式
		$drive = config::get('DRIVE','log');

		//存储方式路径
		$classpath= '\core\lib\drive\log\\'.$drive;
		self::$class=new $classpath;
	}

	//调用存储驱动存储日志文件
	static public function log($message,$file='log')
	{
		self::$class->log($message,$file);
	}
}

