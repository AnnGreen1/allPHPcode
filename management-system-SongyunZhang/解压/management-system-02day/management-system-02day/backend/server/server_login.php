<?php
/*
 * @Description: 服务端登录处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 09:44:30
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 09:56:18
 * @FilePath: /management-system/backend/server/server_login.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */

 require_once './common/connect.php';

//  获取前端提交的用户名和密码
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// 准备sql语句
$sqlStr = "SELECT * FROM admin WHERE username = '$username'";
// 执行sql查询
$stmt = $pdo->query($sqlStr);
// 提取结果集中的所有记录
$user = $stmt->fetch();
// 判断数据是否为空
if (empty($user)) {
  // 弹窗提示用户不存在，返回到登录页面
  echo "<script>alert('用户不存在！');history.go(-1);</script>";
} else {
  // 用户存在
  if ($user['password'] == $password) {
  // 密码正确，跳转到首页
      // 启用session
      session_start();
      // 将用户名保存到session中
      $_SESSION['username'] = $username;
    echo "<script>location.href='../view/userlist.php';</script>";
  } else {
    // 弹窗提示密码错误，返回到登录页面
    echo "<script>alert('密码错误！');history.go(-1);</script>";
  }
}
