<?php
//后台管理首页
class ManageController extends PlatformController{
	public function IndexAction(){
		//载入视图模版
		require VIEW_PATH . 'index.html';
	}
	public function TopAction(){
		//载入top模版文件
		require VIEW_PATH . 'top.html';
	}
	public function MenuAction(){
		//载入menu模版即可！
		require VIEW_PATH . 'menu.html';
	}
	public function DragAction(){
		//载入drag模版
		require VIEW_PATH . 'drag.html';
	}
	public function MainAction(){
		//载入top模版即可！
		require VIEW_PATH . 'main.html';
	}
}