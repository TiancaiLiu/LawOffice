<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();

	Class ManageAction extends Action{
		public function index(){
			$user = M('user');

			$this->index = $user->select();
			
			$this->display('index2');
		}

	}
?>