<!--
/*
 * @Description: 登录页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 09:05:44
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 01:03:26
 * @FilePath: /management-system/backend/view/login.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登录</title>
  <link rel="stylesheet" href="../utils/layui/css/layui.css">
  <style>
    #titlediv {
      margin-bottom: 20px;
    }
    #title {
      text-align: center;
    }
    #login {
      position: absolute;
      width: 300px;
      height: 240px;
      padding: 40px 60px;
      color: black;
      background-color: white;
      margin: auto;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }
  </style>
</head>
<body class="layui-bg-green">
  <div id="login">
    <div id="titlediv" class="layui-fluid">
      <h1 id="title" >后台管理系统</h1>
    </div>
    <form class="layui-form" action="../server/server_login.php" method="post">
    <div class="layui-form-item">
      <input class="layui-input" type="text" name="username" required lay-verify="required" autocomplete="off" placeholder="请输入用户名">
    </div>
    <div class="layui-form-item">
      <input class="layui-input" type="password" name="password" required lay-verify="required" autocomplete="off" placeholder="请输入密码">
    </div>
    <div class="layui-form-item layui-row">
      <div class="layui-col-xs5 layui-col-sm5 layui-col-md5">
        <button class="layui-btn layui-btn-primary layui-btn-fluid">注册</button>
      </div>
      <div class="layui-col-xs-offset2 layui-col-xs5 layui-col-sm-offset2 layui-col-sm5 layui-col-md-offset2 layui-col-md5">
        <button class="layui-btn layui-btn-fluid">登录</button>
      </div>
    </div>
  </form>
  </div>
  <script src="../utils/layui/layui.js"></script>
</body>
</html>