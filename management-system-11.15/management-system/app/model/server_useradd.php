<?php
/*
 * @Description: 服务端添加用户处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 23:43:25
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-01 14:21:43
 * @FilePath: /management-system-all/backend/server/server_useradd.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// require_once './common/connect.php';
require_once './common/DB.php';

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$type = $_REQUEST['type'];
$icon = $_REQUEST['icon'];
$create_time = time() + 8 * 3600;

$sql = "INSERT INTO user(name, age, birthday, type, icon, create_time) VALUES('$name', $age, '$birthday', $type, '$icon', $create_time)";

$count = DB::getInstance()->connect()->exec($sql);
if($count > 0) {
  echo "<script>alert('添加成功！');location.href='../view/userlist.php'</script>";
} else {
  echo "<script>alert('添加失败！');location.href='../view/useradd.php'</script>";
}
