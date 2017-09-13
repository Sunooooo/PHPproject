<?php
//后台首页控制器
class IndexController{
	public function indexAction(){
		echo "home...index";
		include CUR_VIEW_PATH."1.html";
	}
	
}