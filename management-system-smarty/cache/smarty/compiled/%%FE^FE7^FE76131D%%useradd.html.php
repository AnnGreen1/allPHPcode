<?php /* Smarty version 2.6.32, created on 2021-12-06 08:05:24
         compiled from useradd.html */ ?>
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
        <form class="layui-form" action="index.php?controller=Users&method=addUser" method="post"
          enctype="multipart/form-data">
          <div class="layui-form-item">
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="text" name="name" required lay-verify="required" placeholder="请输入姓名"
                autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">年龄</label>
            <div class="layui-input-inline">
              <input class="layui-input" type="number" name="age" required lay-verify="required" placeholder="请输入年龄"
                autocomplete="off">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">生日</label>
            <div class="layui-input-inline">
              <input class="layui-input" id="birthday" type="text" name="birthday" required lay-verify="required"
                placeholder="请输入生日" autocomplete="off">
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

  <script src="./public/js/jquery/jquery-3.6.0.min.js"></script>
  <script src="./third_party/layui/layui.js"></script>


  <script>
    <?php echo '
    // 上传头像脚本
    layui.use([\'upload\', \'laydate\'], function () {
      // 获取上传控件实例
      var upload = layui.upload
      // 执行实例
      var uploadInst = upload.render({
        elem: \'#upload-btn\', // 绑定元素
        url: \'./helpers/img_upload.php\', // 上传接口
        field: \'icon\', // 设置上传域的key，服务端通过此key来获取信息
        done: function (res, index, upload) {
          // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
          if (res.code == 100) {
            $(\'#show-img\').attr(\'src\', \'./resource/\' + res.img); // 获取图片的路径，设置给 src 属性
            $(\'#show-img\').css(\'display\', \'inline-block\'); // 显示元素
            $(\':input[type=hidden]\')[0].value = res.img; // 将图片的名字保存给隐藏域
          }
        },
        error: function (error) {
          // 请求异常回调
          console.log(error);
        }
      })
      // 获取时间控件实例
      var laydate = layui.laydate
      laydate.render({
        elem: \'#birthday\', // 绑定元素
      })
    })
    '; ?>

  </script>
</body>

</html>