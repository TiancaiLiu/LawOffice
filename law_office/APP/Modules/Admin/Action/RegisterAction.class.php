<?php
/*
	后台注册控制器
*/
	class RegisterAction extends Action{
		Public function index(){
			$this->display();
		}

		Public function register(){
			// var_dump($_POST);
			$idnum = M('idnum')->select();
			$user = M('user');
			$pd = '0';
			foreach ($idnum as $v) {
				if($_POST['visa']==$v['idnum']){
					$pd = '1';
				}
			}

			if($pd=='0'){
				$this->error("证件号不存在!");
			}else{
			
				$user_s = $user->select();
				foreach ($user_s as $v) {
					if($_POST['Name']==$v['username']){
						$this->error("此用户已注册!");
					}
				}


				$data = array(
					'username' => $_POST['Name'],
					'realname' => $_POST['realname'],
					'idnum' => $_POST['visa'],
					'pwd' => $_POST['Password'],
					'tel' => $_POST['phonenum'],
					'idcard' => $_POST['Idnumber'],
					'email' => $_POST['email'],

				);

				if($add = $user->data($data)->add()){
					$this->success("注册成功！");
				}
			}
		}
	}
?>
