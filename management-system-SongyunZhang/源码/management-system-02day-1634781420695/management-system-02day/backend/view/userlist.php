<?php
/*
 * @Description: 首页--用户列表
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 10:56:13
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 09:56:23
 * @FilePath: /management-system/backend/view/userlist.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// 登录拦截
session_start();
if(empty($_SESSION['username'])){
  // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
  echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>首页</title>
  <link rel="stylesheet" href="../utils/layui/css/layui.css">
</head>
<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <?php
    require_once './common/nav.php';
    ?>
  </div>
  <script src="../utils/layui/layui.js"></script>
</body>
</html>