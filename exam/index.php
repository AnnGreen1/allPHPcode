<?php
// 引入Smarty核心文件
//require_once "../smarty-3.1.40/libs/Smarty.class.php";

require_once "./smarty-3.1.40/libs/Smarty.class.php";
// 引入工具类
require_once "./DB.php";

//  初始化Smarty
$smarty = new Smarty();

// 自定义smarty左右边界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

// 初始化数据库
$pdo = DB::getInstance()->connect();

// 获取用户希望访问哪一个controller
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Login';

// 获取用户希望访问的方法
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

// 引入对应的Controller类文件
require_once "./app/controller/{$controller}Controller.php";

//require_once ""

// 实例化该Controller对象
eval('$obj = new '.$controller."Controller();");

//调用用户传递方法名称
eval('$obj->'.$method."();");
