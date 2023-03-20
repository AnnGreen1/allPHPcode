<?php
/*
 * @Description: 首页--用户列表
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 10:56:13
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-19 11:12:40
 * @FilePath: /management-system/backend/view/userlist.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// 登录拦截
session_start();
if(empty($_SESSION['name'])){
  // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
  echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}