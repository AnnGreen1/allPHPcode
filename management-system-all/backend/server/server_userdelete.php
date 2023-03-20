<?php
/*
 * @Description: 服务端删除用户处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 22:44:28
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-01 14:22:19
 * @FilePath: /management-system-all/backend/server/server_userdelete.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// require_once "./common/connect.php";
require_once './common/DB.php';

$id = $_REQUEST["id"];

$sql = "DELETE FROM user WHERE id='$id'";
$count = DB::getInstance()->connect()->exec($sql);
if ($count > 0) {
  echo "<script>alert('删除成功！');location.href='../view/userlist.php'</script>";
} else {
  echo "<script>alert('删除失败！');location.href='../view/useradd.php'</script>";
}
