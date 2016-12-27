<?php 
namespace core\lib\drive\log;
use core\lib\config;
//文件系统

class file
{
	public $path ;

	//初始化方法
	public function __construct()
	{
		$path=config::get('OPTION','log');
		$this->path=$path['PATH'];
	}

	//创建日志文件
	public function log($message,$file='log')
	{
		/**
		 * 1.日志存储位置是否存在
		 *
		 * 2.写日志
		 */
		 if (!file_exists($this->path.date('YmdH'))) {
		 	mkdir($this->path.date('YmdH'));
		 }
 
		 //换行符PHP_EOL
		return  file_put_contents($this->path.date('YmdH')."/".$file.".txt", date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
	}
}