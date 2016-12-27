<?php 
namespace app\controllers;
use core\lib\model;
use core\mymvc;
use app\models\news;

class newsController extends mymvc
{

	//新闻列表首页
	public function index(){
		$view=$this->view();
		echo $view->render('news\index.php',["url"=>$_SERVER["SCRIPT_NAME"]]);
		
	}

	//ajax获取信息
	public function allNews(){
		$model=new news();
		$news_list=$model->all();
		echo  json_encode($news_list);
	}	


	//新闻添加
	public function newsAdd(){
		if ($_POST) {
			$data=array(
					"title"=>post('title'),
					"author"=>post('author'),
					"addtime"=>date("Y-m-d H:i:s")
				);
			//dump($data);die;
			$model=new news();
			$last_id=$model->add($data);		
			if ($last_id) {
				header('location:'.$_SERVER["SCRIPT_NAME"]."/news/index");
			}else{
				header('refresh:3;url='.$_SERVER["SCRIPT_NAME"].'/news/newsadd');
				print('添加失败<br>三秒后自动跳转到添加页面');
			}
		}else{
			//dump($_SERVER);
			$view=$this->view();
			echo $view->render('news\add.php');
		}
	}

	//新闻删除
	public function del(){
		$id=get('id');
		$model=new news();
		$res=$model->del($id);		
		if ($res) {
			echo 1;die;
		}else{
			echo 0;die;;
		}
	}


	//新闻修改
	public function newsSave(){

		//实例化模型
		$model=new news();

		if ($_POST) {
			$data=array(
					"title"=>post('title'),
					"author"=>post('author')					
				);
			//dump($data);die;
			
			$last_id=$model->save($data,post("id"));		
			if ($last_id) {
				header('location:'.$_SERVER["SCRIPT_NAME"]."/news/index");
			}else{
				header('refresh:3;url='.$_SERVER["SCRIPT_NAME"].'/news/newssave');
				print('修改失败<br>三秒后自动跳转到修改页面');
			}
		}else{
			//接收id
			$id=get('id');			
			$new=$model->one($id);
			$view=$this->view();
			echo $view->render('news\save.php',['new'=>$new,"url"=>$_SERVER["SCRIPT_NAME"]]);
		}
	}

}