<?php 
session_start();
header("Content-Type:text/html;charset=utf-8");

	Class SmarAction extends Action{

		Public function index(){
			
			$this->assign("smarty",array(
					'session'=>$_SESSION,	//get,post同理
				));

			$arr2 = array('零零','一零',array('二零','二一'));
			$this->assign('two',$arr2);
			$this->assign("title","测试用的网页标题");
			$this->assign(array("A"=>"内容1","B"=>"内容2","C"=>"内容3"));
			$this->assign('articleTitle','Smokers are Productive,but Death');
			$_SESSION['username']='admin';

			$this->display();
		}


	}
 ?>
