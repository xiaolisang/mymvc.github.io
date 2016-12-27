<?php 
namespace app\controllers;
use core\lib\model;
use core\mymvc;
use app\models\news;

class NewsController extends mymvc
{

	//新闻列表首页
	public function index(){
		$model=new news();
		$news_list=$model->all();
		//dump($news_list);die;
		$view=$this->view();
		echo $view->render('news\index.php',['news_list'=>$news_list,"url"=>$_SERVER["SCRIPT_NAME"]]);
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
			header('location:'.$_SERVER["SCRIPT_NAME"]."/news/index");
		}else{
			header('refresh:3;url='.$_SERVER["SCRIPT_NAME"].'/news/index');
			print('删除失败<br>三秒后自动跳转到添加页面');			
		}		
	}
}