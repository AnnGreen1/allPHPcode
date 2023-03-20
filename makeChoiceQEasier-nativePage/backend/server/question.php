<?php


require_once './common/DB.php';
require_once './common/Response.php';

// 获取请求方式
//$_SERCER是一个超全局变量,记录服务器端与客户端的相关信息
//索引数组
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
  case "GET":
    //  判断业务类别，如果是 edit， 说明是编辑新闻，则根据id获取新闻
    if ($_REQUEST['service'] == 'edit') {
      //  [GET] /server/news.php?news_id
      $news_id = $_REQUEST['news_id'];
      $sql = "SELECT * FROM news WHERE id='$news_id'";
      $stmt = DB::getInstance()->connect()->query($sql);
      $news = $stmt->fetch();
      if($news) {
        Response::json("10001", "数据请求成功", [$news]);
      } else {
        Response::json("-10001", "数据请求失败!");
      }
    } else {
      //  [GET] /server/news.php
      // 查询新闻列表操作
      $limit = $_REQUEST['limit'] ? $_REQUEST['limit'] : 5;
      $curr = $_REQUEST['curr'] ? $_REQUEST['curr'] : 1;
      // 判断是否有传递查询的参数
      $sql = "";
      if(!empty($_REQUEST['search_title']) && !empty($_REQUEST['type_id'])) {
        // 根据条件查询数据
        $title = $_REQUEST['search_title'];
        $type_id = $_REQUEST['type_id'] + 0;
        $sql = "SELECT * FROM news WHERE title LIKE '%$title%' AND type_id=$type_id ORDER BY id LIMIT " . ($curr - 1) * $limit . ", $limit";
      } else {
        // 直接查询所有数据
        $sql = "SELECT * FROM news ORDER BY id LIMIT " . ($curr - 1) * $limit . ", $limit";
      }
      $stmt = DB::getInstance()->connect()->query($sql);
      if ($stmt->rowCount() > 0) {
        $news = $stmt->fetchAll();
        Response::json("10001", "数据请求成功!", $news);
      } else {
        Response::json("-10001", "数据请求失败!");
      }
    }
    break;
    //  [POST] /server/news.php
  
  
}
