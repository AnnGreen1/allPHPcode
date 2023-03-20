<?php
/*
 * @Description: 首页--用户列表
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 10:56:13
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-03 15:14:32
 * @FilePath: /management-system/backend/view/userlist.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
// 登录拦截
session_start();
if (empty($_SESSION['username'])) {
  // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
  echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}

require_once '../server/server_userlist.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>首页</title>
  <link rel="stylesheet" href="../utils//layui/css/layui.css">
  <style>
    #container {
      padding: 20px;
    }
  </style>
</head>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <?php
    require_once '../view/common/nav.php';
    ?>
    <div class="layui-body">
      <div id="container">
        <a href="./useradd.php" class="layui-btn">
          <i class="layui-icon layui-icon-add-circle"></i>
          添加用户
        </a>
        <table class="layui-table">
          <thead>
            <tr>
              <th>编号</th>
              <th>头像</th>
              <th>姓名</th>
              <th>年龄</th>
              <th>分类</th>
              <th>生日</th>
              <th>创建时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data as $user) {
              $img = $user['icon'] ? $user['icon'] : 'default.jpeg';
              echo "
                  <tr>
                    <td>{$user['id']}</td>
                    <td>
                    <img src=\"../server/resource/{$img}\" class=\"layui-img\" alt=\"无法加载头像\">
                    </td>
                    <td>{$user['name']}</td>
                    <td>{$user['age']}</td>
                    <td>{$user['type_name']}</td>
                    <td>{$user['birthday']}</td>
                    <td>{$user['ctime']}</td>
                    <td>
                      <a class='layui-btn layui-btn-sm' href=\"./useredit.php?id={$user['id']}\">编辑</a>
                      <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"deleteUser({$user['id']}, '{$user['name']}')\">删除</button>
                    </td>
                  </tr>
              ";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-footer">
      <!-- 底部固定区域 -->
      © web3 - 创业平台后台管理系统
    </div>
  </div>
  <script src="../utils/layui/layui.js"></script>
  <script>
    function deleteUser(id, name) {
      // 获取弹出框对象
      var layer = layui.layer;
      layer.confirm('确认删除' + name + "？", {
        btn: ["确定", "取消"] // 设置按钮
      }, function(index, ) {
        // 第一个按钮的回调函数
        location.href = "../server/server_userdelete.php?id=" + id
      }, function(index) {
        // 第二个按钮的回调函数
      })
    }
  </script>
</body>

</html>