<?php
Class CommonAction extends Action{
	Public function _initialize(){
	 	if(!isset($_SESSION['sid'])){
	 	 	$this->redirect(GROUP_NAME . '/Index/index');
	 	}	
	}
}	
?>
