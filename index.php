<?php 
/**
 * 1.入口文件
 * 2.定义常量（路由）
 * 3.加载类库
 * 4.启动框架
 */

//定义根目录
define("ROOT",dirname(__FILE__));

//定义核心文件目录
define('CORE', ROOT."/core");

//项目目录
define('APP', ROOT."/app");

//项目目录相对路径
define('MODULE', "app");

//是否开启调试模式
define('DEBUG',true);

//引入自动加载类
include "vendor/autoload.php";

if (DEBUG) {
	$whoops = new  \Whoops\Run;
	$handler = new \Whoops\Handler\PrettyPageHandler();
	$handler->setPageTitle("出现错误了");//设置报错页面的title
	$whoops->pushHandler($handler);
	$whoops->register();
	ini_set('display_error', 'On');
}else{
	ini_set('display_error', 'Off');
}


//引入公共文件
include CORE."/common/function.php";

//p(ROOT);

//引入核心类库
include CORE."/mymvc.php";

//自动加载
spl_autoload_register("\core\mymvc::autoload");

//启动框架
\core\mymvc::run();

