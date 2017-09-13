<?php 
/*标头*/
header('Content-Type: text/html; charset=utf-8');
/*加载核心启动类*/
include  "framework/core/Framework.class.php";
Framework::run();//run起来  启动整个项目文件
/*echo getcwd();*/
 ?>