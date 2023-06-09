<?php
/*
 * @Description: 用户编辑界面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 23:07:01
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-21 21:55:20
 * @FilePath: /management-system-all/backend/view/useredit.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
require_once "../server/common/connect.php";

// 获取用户信息
$id = $_REQUEST["id"];
$sql = "SELECT * FROM user WHERE id='$id'";
$stmt = $pdo->query($sql);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>编辑用户</title>
  <link rel="stylesheet" href="../utils/layui/css/layui.css">
  <style>
    #titlediv {
      margin-bottom: 15px;
    }

    #container {
      padding: 20px;
    }

    #show-img {
      width: 150px;
      height: 150px;
      margin-top: 15px;
    }
  </style>
</head>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
  {php}
    require_once './app/view/common/nav.php';
    {/php}
    <div class="layui-body">
      <div id="container">
        <div id="titlediv" class="layui-fluid">
          <h2>编辑用户</h2>
        </div>
        <form class="layui-form" action="../server/server_useredit.php" method="post" enctype="multipart/form-data">
          <!-- 隐藏域，用来存储用户id的 -->
          <input class="layui-input" type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="text" name="name" required lay-verify="required" placeholder="请输入姓名" autocomplete="off" value="<?php echo $user['name'] ?>">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">年龄</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="number" name="age" required lay-verify="required" placeholder="请输入年龄" autocomplete="off" value="<?php echo $user['age'] ?>">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">生日</label>
            <div class="layui-input-inline">
              <input class="layui-input" id="birthday" type="text" name="birthday" required lay-verify="required" placeholder="请输入生日" autocomplete="off" value="<?php echo $user['birthday'] ?>">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">分类</label>
            <div class="layui-input-inline">
              <select name="type" lay-verify="required">
                <option value=""></option>
                <option value="1" <?php if (1 == $user['type']) {
                                    echo 'selected';
                                  } ?>>普通员工</option>
                <option value="2" <?php if (2 == $user['type']) {
                                    echo 'selected';
                                  } ?>>项目经理</option>
                <option value="3" <?php if (3 == $user['type']) {
                                    echo 'selected';
                                  } ?>>项目组长</option>
              </select>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">头像</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="hidden" name="icon" value="<?php echo $user['icon']; ?>">
              <a class="layui-btn" id="upload-btn">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </a>
              <img id="show-img" src="<?php $img = $user['icon'] ? $user['icon'] : 'default.jpeg'; echo '../server/resource/' . $img; ?>">
            </div>
          </div>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" lay-submit>确认</button>
              <a class="layui-btn layui-btn-primary" href="./userlist.php">返回</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="../utils/jquery/jquery-3.6.0.min.js"></script>
  <script src="../utils/layui/layui.js"></script>
  <script>
    // 上传头像脚本
    layui.use(['upload', 'laydate'], function() {
      // 获取上传控件实例
      var upload = layui.upload
      // 执行实例
      var uploadInst = upload.render({
        elem: '#upload-btn', // 绑定元素
        url: '../server/common/img_upload.php', // 上传接口
        field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
        done: function(res, index, upload) {
          // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
          if (res.code == 100) {
            $('#show-img').attr('src', '../server/resource/' + res.img); // 获取图片的路径，设置给 src 属性
            $('#show-img').css('display', 'inline-block'); // 显示元素
            $(':input[name=icon]')[0].value = res.img; // 将图片的名字保存给隐藏域
          }
        },
        error: function(error) {
          // 请求异常回调
          console.log(error);
        }
      })
      // 获取时间控件实例
      var laydate = layui.laydate
      laydate.render({
        elem: '#birthday', // 绑定元素
      })
    })
  </script>
</body>

</html>