<?php
/*
这是php代码
*/


  // 1. 引入smarty类文件
  require 'smarty/libs/Smarty.class.php';
  // 2. 实例化对象
  $smarty = new Smarty();
  // 3. 初始化该对象，设置各个目录的路径，这里是安装的重点，需要参照目录一一对应
  $smarty->template_dir ="smarty/templates/templates";
  $smarty->compile_dir ="smarty/templates/templates_c";
  $smarty->config_dir = "smarty/templates/config";
  $smarty->cache_dir ="smarty/templates/cache";
  $smarty->caching = false;
  //重新定义边界，因为默认边界“{}“符，在html页面中嵌入js脚本文件编写代码段时使用的就是”{}“符，自定义边界符还可以是<{ }>, {/ /} 等
  $smarty->left_delimiter = "{#";
  $smarty->right_delimiter = "#}";
  // 4. 分配变量(压入数据)
  $title = "后台管理系统";
  $content = "主要模块有用户列表模块和新闻列表模块";
  $smarty->assign("title", $title);
  $smarty->assign("content", $content);

  $fontColor="red";
  $smarty->assign('fontColor',$fontColor);

  $name="AnnGreen";
  $smarty->assign('name',$name);

  $login_in=true;
  $smarty->assign("login_in",$login_in);

//smarty关联数组
$smarty->assign('title', "数组");
$smarty->assign(
  'Contacts',
  array(
    'address' => 'A18S401',
    'email' => 'anngreen@qq.com',
    'communication' => array(
      'QQ' => '2936541562',
      'WeChat' => 'AnnGreen_'
    )
  )
);

$smarty->assign('a',1);
$smarty->assign('b',2);




function test1($args){
  $str="";
  for($i=0;$i<$args['times'];$i++){
   $str.="<font color='".$args['color']."' size='".$args['size']."'>".$args['con']."</font>"."<br>";
  }
  return $str;
 }
 // 注册一下
 $smarty->register_function("hsp","test1");
 
 $smarty->register_function("fun","login");
function login($args)
{
  return "欢迎".$args['name_'];
}

  
 $smarty->assign("onearray",array (  
  "0" => 'home',  
  '1' => 'who',  
  '2'=> 'tank',  
  '3'=> 'what'  
 )); 






  // 5. 解析渲染模板(生成html文档)
  $smarty->display('index.tpl');
?>