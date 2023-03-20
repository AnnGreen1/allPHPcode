<?php
require_once './helpers/DB.php';
require_once './helpers/setup.php';


//实例化smarty对象
$smarty =new CRUD_Smarty();
//禁用缓存
$smarty->disable_caching();

//实例化pdo对象
$pdo = DB::getInstance()->connect();
//获取控制器名称
$controller = $_REQUEST['controller'];
$method =  $_REQUEST['method'];
echo "require_once './app/controller/{$controller}Controller.php';";
//引入控制器文件
eval("require_once './app/controller/{$controller}Controller.php';");
//实例化对应的控制器
eval('$obj = new '.$controller . 'Controller();');
//让实例化的对象去调用方法
eval('$obj->' . $method . '();');