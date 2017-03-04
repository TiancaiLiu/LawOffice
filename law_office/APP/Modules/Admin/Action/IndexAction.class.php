<?php
/*
	后台登录控制器
*/
	session_start();
	class IndexAction extends Action{
		//登录页面视图
		Public function index(){
			$this->display();
		}

		Public function login(){

			$username = $_POST['username'];
			$pwd = $_POST['password'];

			
			$user = M('user')->select();

			foreach ($user as $v) {
				if($username == $v['username'] && $pwd == $v['pwd']){
					// var_dump($username);
					// var_dump($v['username']);
					// var_dump($pwd);
					// var_dump($v['pwd']);

					session('sid',$username);
					
					$this->success('登录成功!',"__GROUP__/Content/index");
				}
			}
				
			$this->error('用户名或密码错误！');	
				

		

		}
	}
?>