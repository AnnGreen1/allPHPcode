<!--
/*
 * @Description: 添加用户界面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 23:44:25
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-21 21:59:42
 * @FilePath: /management-system-all/backend/view/useradd.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>添加用户</title>
  <link rel="stylesheet" href="../utils/layui/css/layui.css">
  <style>
    #titlediv {
      margin-bottom: 15px;
    }

    #container {
      padding: 20px;
    }

    #show-img {
      display: none;
      width: 150px;
      height: 150px;
      margin-top: 15px;
    }
  </style>
</head>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <?php
    require './common/nav.php';
    ?>
    <div class="layui-body">
      <div id="container">
        <div id="titlediv" class="layui-fluid">
          <h2>添加用户</h2>
        </div>
        <form class="layui-form" action="../server/server_useradd.php" method="post" enctype="multipart/form-data">
          <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="text" name="name" required lay-verify="required" placeholder="请输入姓名" autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">年龄</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="number" name="age" required lay-verify="required" placeholder="请输入年龄" autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">生日</label>
            <div class="layui-input-inline">
              <input class="layui-input" id="birthday" type="text" name="birthday" required lay-verify="required" placeholder="请输入生日" autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">分类</label>
            <div class="layui-input-inline">
              <select name="type" lay-verify="required">
                <option value=""></option>
                <option value="1">普通员工</option>
                <option value="2">项目经理</option>
                <option value="3">项目组长</option>
              </select>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">头像</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="hidden" name="icon">
              <a class="layui-btn" id="upload-btn">
                <i class="layui-icon">&#xe67c;</i>上传图片
              </a>
              <img id="show-img">
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
            $(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
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