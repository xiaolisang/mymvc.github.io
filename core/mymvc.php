<?php 
namespace core;

class mymvc
{
	//定义加载类地图
	public static $classMap=array();

	//定义一个存储传输数据的变量
	public $assign;

	//开启框架
	static function run()
	{
		//初始化日志存储方式
		\core\lib\log::init();


		//实例化路由类
		$route=new \core\lib\route();

		//加载控制器方法
		$control=$route->control;
		$action=$route->action;
		//拼接控制器文件目录
		$controlfile=APP."/controllers/".$control."Controller.php";

		//拼接控制器路径
		$controlpath="\\".MODULE."\controllers\\".$control."Controller";
		if (is_file($controlfile)) {
			include $controlfile;
			$con=new $controlpath();
			$con->$action();

			//调用日志存储方式
			\core\lib\log::log("control:".$control."      "."antion:".$action);
		}else{
			throw new \Exception('找不到控制器'.$control);
		}


	}

	//自动加载类文件
	static function autoload($class)
	{
		//首先判断该类是否已经调用
		if (isset($classMap[$class])) {
			return true;
		}else{
			//拼接类文件路径
			$class=str_replace("\\", "/", $class);
			$file=ROOT."/".$class.".php";
			if (is_file($file)) {
				include $file;
				self::$classMap[$class]=$class;
			}else{
				return false;
			}
		}

	}

	//视图层传参方法
	public function assign($key,$value)
	{
		$this->assign[$key]=$value;
	}

	//视图层显示方法
	public function display($files)
	{
		$file=APP."/views/".$files;
		if (is_file($file)) {
			//将数组打散输出值
			extract($this->assign);
			include $file;
		}
	}
}

