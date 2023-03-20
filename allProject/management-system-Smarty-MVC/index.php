<?php
require_once './helpers/setup.php';
require_once './helpers/DB.php';

//初始化Smarty对象
$smarty = new MS_Smarty();
//先禁用缓存
$smarty->disable_caching();

//实例化pdo对象
$pdo = DB::getInstance()->connect();
//浏览者 -> 向浏览器发送指令
//获取控制器名称
$controller = empty($_REQUEST['controller']) ? 'Login' : $_REQUEST['controller'];
$method = empty($_REQUEST['method']) ? 'index' : $_REQUEST['method'];


//引入控制器文件
eval("require_once './app/controller/{$controller}Controller.php';");
//实例化对应的控制器
eval('$obj = new ' . $controller . 'Controller();');
// 让实例化出的对象去调用方法
// echo '$obj->' . $method . '();';
eval('$obj->' . $method . '();');