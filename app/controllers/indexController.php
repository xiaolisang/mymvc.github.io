<?php 
namespace app\controllers;
use core\lib\model;
use core\mymvc;

class indexController extends mymvc
{
	public function index(){
		$data="It is work!";
		//$title="这是视图文件";
		$view=$this->view();
		echo $view->render('index/index.html',['data'=>$data]);
	}
}

