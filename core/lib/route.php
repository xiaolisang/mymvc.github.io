<?php 
namespace core\lib;
use core\lib\config;

class route
{
	//定义控制器
	public $control;

	//定义方法
	public $action;

	//定义构造函数
	public function __construct()
	{
		//获取路由信息
		$route=config::all('route');

		//获取url参数，获取控制器、方法
		if (isset($_SERVER['PATH_INFO'])&&$_SERVER['PATH_INFO']!="/") {
			//获取url控制器、方法
			$path=$_SERVER['PATH_INFO'];
			$patharr=explode("/",trim($path,"/"));
			//p($patharr);

			//定义控制器、方法名
			if (isset($patharr[0])) {
				$this->control=$patharr[0];
			}

			if (isset($patharr[1])) {
				$this->action=$patharr[1];
			}else{
				$this->action=$route['ACTION'];
			}

			//获取参数的值
			$count=count($patharr)+2;
			$i=2;
			while ($i < $count) {
				if (isset($patharr[$i+1])) {
					$_GET[$patharr[$i]]=$patharr[$i+1];
				}
				
				$i+=2;
			}
			//p($_GET);

		}else{
			$this->control=$route['CONTROL'];
			$this->action=$route['ACTION'];
		}
	}
}

