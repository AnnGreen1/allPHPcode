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
 table.render({
        elem: '#test'
        ,url:'data.json'
        ,toolbar: '#toolbarDemo'
        ,title: '用户数据表'
        ,totalRow: true
        ,cols: [[
        {type: 'checkbox', fixed: 'left'}
        ,{field:'id', title:'ID', width:80, fixed: 'left', unresize: true, sort: true, totalRowText: '合计'}
        ,{field:'username', title:'用户名', width:120, edit: 'text'}
        ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
            return '<em>'+ res.email +'</em>'
        }}
        ,{field:'experience', title:'id', width:80, sort: true, totalRow: true}
        ,{field:'sex', title:'username', width:80, edit: 'text', sort: true}
        ,{field:'logins', title:'password, width:100, sort: true, totalRow: true}
        ,{field:'sign', title:'name'}
        ,{field:'city', title:'icon', width:100}
        ,{field:'ip', title:'type', width:120}
        ,{field:'joinTime', title:'age', width:120}
        ,{fixed: 'right', title:'birthday', toolbar: '#barDemo', width:150}
        ]]
        ,page: true
    });
    <div class="t_title">
        <fieldset class="layui-elem-field layui-field-title">
            <blockquote class="layui-elem-quote">
                <legend>列表</legend>
            </blockquote>
        </fieldset>
    </div>

   <?php
     

    require_once './common/nav.php';
   ?>
  </div>
  <script src="../utils/layui/layui.js"></script>
</body>
</html>