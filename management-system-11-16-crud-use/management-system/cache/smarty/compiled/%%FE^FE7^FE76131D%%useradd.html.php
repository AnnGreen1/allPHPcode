<?php /* Smarty version 2.6.32, created on 2021-12-15 04:22:53
         compiled from useradd.html */ ?>
<!--
 * @Description: 用户添加视图view
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-11-16 10:30:51
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-16 10:42:30
 * @FilePath: /management-system/app/view/useradd.html
 * Copyright (C) 2021 syzhang. All rights reserved.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>添加用户</title>
  <link rel="stylesheet" href="./third_party/layui/css/layui.css">
  <link rel="stylesheet" href="./public/css/useradd.css">
</head>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <?php 
    require_once './app/view/common/nav.php';
     ?>
    <div class="layui-body">
      <div id="container">
        <div id="titlediv" class="layui-fluid">
          <h2>添加用户</h2>
        </div>
        <form class="layui-form" action="index.php?controller=Users&method=addUser" method="post" enctype="multipart/form-data">
          <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="text" name="username" required lay-verify="required" placeholder="请输入姓名" autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="text" name="password" required lay-verify="required" placeholder="请输入姓名" autocomplete="off">
            </div>
          </div>
       

          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" lay-submit>确认</button>
              <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="./public/js/jquery/jquery-3.6.0.min.js"></script>
  <script src="./third_party/layui/layui.js"></script>
    
</body>

</html>