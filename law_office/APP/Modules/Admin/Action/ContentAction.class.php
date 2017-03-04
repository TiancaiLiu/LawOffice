<?php
	class ContentAction extends CommonAction{
		//后台首页视图
		Public function index(){
			$this->assign("user" ,$_SESSION['sid']);
			$this->display();
		}
		//退出登录
		Public function logout(){
			session_unset();
			session_destroy();
			$this->redirect(GROUP_NAME . "/Index/index");
		}
	}
?>