<?php
/*
 * @Description: 服务端编辑用户处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 22:43:42
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-01 23:38:50
 * @FilePath: /management-system-all/backend/server/server_useredit.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// require_once './common/connect.php';
require_once './common/DB.php';

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$type = $_REQUEST['type'];
$icon = $_REQUEST['icon'];
$create_time = time();

$sql = "UPDATE user SET name='$name', age=$age, birthday='$birthday', type=$type, icon='$icon', create_time=$create_time WHERE id='$id'";

$count = DB::getInstance()->connect()->exec($sql);

if($count > 0) {
  echo "<script>alert('修改成功！');location.href='../view/userlist.php'</script>";
} else {
  echo "<script>alert('修改失败！');location.href='../view/useradd.php'</script>";
}
